<?php

namespace App\Http\Controllers;

use App\OrderItem;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Response;
use App\Cart;
use DB;
use App\Order;
use App\CartItem;
use App\Product;


class OrderController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:all');
    }

    public function checkout(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'phone' => 'required',
            'address' => 'required',
        ]);

        $cart = Cart::where('user_id', Auth::user()->id)->first();
        $items = $cart->cartItems;
        $total=0;
        foreach($items as $item){
            $total+=$item->product->price;
        }

        $order = new Order();
        $order->total_paid = $total;
        $order->user_id = Auth::user()->id;
        $order->name = $request->name;
        $order->phone = $request->phone;
        $order->address = $request->address;
        $order->email = $request->email;
        $order->comment = $request->comment;

        $order->save();

        foreach($items as $item){
            $orderItem = new OrderItem();
            $orderItem->order_id=$order->id;
            $orderItem->product_id=$item->product->id;
            $orderItem->file_id=$item->product->file->id;
            $orderItem->save();

            CartItem::destroy($item->id);
        }

        return redirect('/order/'.$order->id);

    }

    public function index(){
        if(Auth::user()->hasRole('admin')){
            $orders = Order::paginate(5);
        }else{
            $orders = Order::where('user_id', Auth::user()->id)->paginate(5);
        }
        return view('order.list',['orders'=>$orders]);
    }
    public function ordered(){
    	$ordered = OrderItem::with(['file'])
        ->select('order_items.order_id as order_id', 'order_items.file_id as file_id', 'order_items.created_at as created_at')
        ->join('products', 'products.id', '=', 'order_items.product_id')
        ->where('products.user_id', Auth::user()->id)
        ->groupBy('order_items.order_id')
        ->paginate(5);
    	return view('order.ordered',['ordered'=>$ordered]);
    }

    public function viewOrder($orderId){
        $order = OrderItem::with(['file', 'order'])->where('order_id', $orderId)->get();
        // dd($order);die;
        $orderInfo = Order::find($orderId);
        return view('order.view', compact('order', 'orderInfo'));
    }

    public function viewOrdered($orderedId){
        // DB::enableQueryLog();
        $order = OrderItem::with(['file', 'product' => function($query){
            $query->where('user_id', '=', \Auth::user()->id);
        }])->where('order_id', $orderedId)->get();
        // print_r(DB::getQueryLog());
        // print_r($order);die;
        $orderInfo = Order::find($orderedId);
        return view('order.view-ordered', compact('order', 'orderInfo'));
    }

    public function download($orderId,$filename){

        $fileid=\App\File::where('filename', $filename)->first();

        $orderItem = OrderItem::where('order_id','=',$orderId)->where('file_id',$fileid->id)->first();

        if(!$orderItem){
            redirect('/failed');
        }

        $entry = \App\File::where('filename', $filename)->first();
        $file = Storage::disk('local')->get($entry->filename);

        return (new Response($file, 200))->header('Content-Type', $entry->mime);
    }
}
