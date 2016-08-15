<?php

namespace App\Http\Controllers;

use Gate;
use App\Product;
use App\File;
use Config;
use Input;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\ProductRequest;
use App\Http\Controllers\Controller;
use App\Repositories\Interfaces\ProductInterface;

use Illuminate\Http\Response;

use Illuminate\Support\Facades\Storage;

use Illuminate\Support\Facades\File as Files;


class ProductController extends Controller
{
    protected $productInterface;
    public function __construct(ProductInterface $productInterface)
    {
        //
        // $this->middleware('auth:all');
        $this->productInterface = $productInterface;
    }

    public function index(){

        if(\Auth::user()->hasRole('admin')){
            $products = $this->productInterface->paginate(3);
        }else{
            $user_id = \Auth::user()->id;
            $products = $this->productInterface->paginateByUser(5, array('*'), array('file'), $user_id);
        }
        return view('admin.products',['products' => $products]);
    }

    public function destroy($id){
        Product::destroy($id);
        return redirect('/admin/products');
    }

    public function newProduct(){
        return view('admin.new');
    }

    public function add() {

        $file = \Request::file('file');

        $product  = new Product();
        if(!empty($file)){
            $extension = $file->getClientOriginalExtension();
            Storage::disk('local')->put($file->getFilename().'.'.$extension,  Files::get($file));

            $entry = new \App\File();
            $entry->mime = $file->getClientMimeType();
            $entry->original_filename = $file->getClientOriginalName();
            $entry->filename = $file->getFilename().'.'.$extension;

            $entry->save();
            $product->file_id=$entry->id;
        }
        
        $product->name = \Request::input('name');
        $product->description = strip_tags(\Request::input('description'));
        $product->content = strip_tags(\Request::input('content'));
        $product->price = \Request::input('price');
        $product->user_id = \Auth::user()->id;
        $product->imageurl = \Request::input('imageurl');

        if($product->save()){
            if(\Auth::user()->hasRole('admin')){
                return \Redirect::to('/admin/products')->with('messageSuccess', 'success');
            }else{
                return \Redirect::to('/user/products')->with('messageSuccess', 'success');
            }
        }else{
            return \Redirect::back()->with('messageError', 'Error');
        }
    }

    public function edit(Request $request, $id)
    {
        //
        $products = Product::where('id', $id)->first();
        if(Gate::denies('edit', $products))
        {
            abort(403, 'Sorry, You can\'t');
        }
        return view('product.edit', compact('products'));
    }

    public function update(ProductRequest $request, $id)
    {
        //
        $input = $request->all();
        $product = Product::find($id);
        $file = \Request::file('file');
        
        if(! $product){
            return \Redirect::back()->with('messageError', 'Error');
        }
        $product->user_id = \Auth::user()->id;
        $success = $product->update($input);
        if($success){
            if(\Auth::user()->hasRole('admin')){
                return \Redirect::to('/admin/products')->with('messageSuccess', 'success');
            }else{
                return \Redirect::to('/user/products')->with('messageSuccess', 'success');
            }
        }else{
            return \Redirect::back()->with('messageError', 'Error');
        }
    }

    public function get($filename){
    
        $entry = File::where('filename', '=', $filename)->firstOrFail();
        $file = Storage::disk('local')->get($entry->filename);
 
        return (new Response($file, 200))
              ->header('Content-Type', $entry->mime);
    }

    public function settings()
    {
        $settings = Config::get('settings');
        Config::set(['settings' => array_merge($settings,['paymentMethod' => 'paypal'])]);
        $settings = Config::get('settings');
        return view('admin.settings', compact('settings'));
    }
}
