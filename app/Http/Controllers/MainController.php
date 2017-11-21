<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\EventSport;
use App\EventRatio;
use App\EventUserBooks;
use App\EventUserScores;
use App\User;
use App\League;
use DB;
use Validator;
use App\Product;
use Cache;
use Carbon\Carbon;
use App\Repositories\Eloquents\EventSportRepository as EventSportRepository;

class MainController extends Controller
{

    public function index()
    {
        if(! Cache::has('products') ){
            Cache::remember('products', 1, function(){
                return Product::with('file')->orderBy('updated_at', 'DESC')->get();
            });
        }
        $products = Cache::get('products');

        // $products = Product::get();
        return view('main.index',['products' => $products]);
    }
    public function viewProduct(Request $request, $product_name, $product_id)
    {
        $product = Product::with('file')->where('id', $product_id)->first();
        $related_product = Product::with('file')->where('id', '<>', $product_id)->orderBy('updated_at', 'DESC')->paginate(5);
        // var_dump($related_product);die;
        return view('main.view_product',['product' => $product, 'related_product' => $related_product]);
    }
    public function eventSports()
    {
            $events_sport = EventSport::with(['team', 'competitor', 'ratio', 'league'])->get();
            $eventByLeague = League::with(['events' => function ($query) {
                $query->with(['team', 'competitor', 'ratio'])->get();
            }])->get();

            if(! empty($events_sport)){
                $scores = 0;
                if (\Auth::check()) {
                    $scores = \Auth::user()->point();
                }
                return view('main.events_sport', compact('events_sport', 'eventByLeague', 'scores'));
            }else{
                abort(403);
            }
    }

    // get infomation event by event id
    public function eventRatio(Request $request, $id)
    {
        if(!isset(\Auth::user()->id)){
            return response([
                'error' => true,
                'authorization' => false,
                'message' => 'Not authorization'
                ]);
        }

        $ratio = EventRatio::with(['event_sport' => function($query){
            $query->select(['id', 'team_id', 'competitor_id']);
            $query->with(['team' => function($query){
                $query->select(['id', 'name', 'league_id']);
                $query->with(['league' => function($query){
                    $query->select(['id', 'name']);
                }]);
            },
            'competitor' => function($query){
                $query->select(['id', 'name', 'league_id']);
                $query->with(['league' => function($query){
                    $query->select(['id', 'name']);
                }]);
            }
            ]);
        }, 'event_result' =>function($query){
            $query->select(['id', 'name']);
        }])
        ->where('id', $id)
        ->select(['id','event_id', 'team_id', 'result_id', 'ratio'])
        ->first();


        $response = array(
            'ratio_id' => $ratio->id,
            'homeTeam' => $ratio->event_sport->team->name,
            'result' => array(
                'id' => $ratio->event_result->id,
                'name' => $ratio->event_result->name,
            ),
            'awayTeam' => $ratio->event_sport->competitor->name,
            'event_id' => $ratio->event_id,
            'ratio' => $ratio->ratio,
        );
        // print_r(DB::getQueryLog());
        return response($response);
    }
    public function eventDeposit(Request $request)
    {
        $data = $request->all();
        $event_user_books = array();
        if (isset(\Auth::user()->id)) {
            $user_id = \Auth::user()->id;
            $validator = Validator::make($request->all(), [
                'ratio_id' => 'integer|required|min:1',
                'scores' => 'required|integer|min:1'
            ]);
            if ($validator->fails()) {
                $result = [
                    'error' => true,
                    'status' => 'The validation has fails',
                    'alertStatus' => "alert-danger",
                    'message' => '<p style="color:red">The validate error(lỗi nhập điểm)</p>'
                ];
                return response($result);
            }

            $event_user_books['user_id'] = $user_id;
            $event_user_books['ratio_id'] = $data['ratio_id'];
            $event_user_books['scores'] = $data['scores'];
            $event_user_books['event_id'] = $data['event_id'];
            $event_user_books['created_at'] = Carbon::now();
            $event_user_books['updated_at'] = Carbon::now();
            $user_scores = EventUserScores::where('user_id', '=', $user_id)->where('scores', '>=', $data['scores'])->first();

            $success = false;
            $updateScores = false;
            if ($user_scores) {
                $success = EventUserBooks::insert($event_user_books);
                // scores
                $scores = $user_scores->scores - $data['scores'];
                $updateScores = EventUserScores::where('user_id', $user_id)
                ->update(['scores' => $scores]);
                if ($updateScores) {
                    $result = [
                        'error' => false,
                        'success' => $success,
                        'updateScores' => $updateScores,
                        'alertStatus' => "alert-success",
                        'message' => '<p style="color:green">success: Bạn vừa đặt '. $data['scores']. ', số điểm hiện tại còn '. $scores .' !)</p>',
                        'scores' => $scores
                    ];

                    return response($result);
                }
            } else {
                return response([
                    'error' => true,
                    'score' => false,
                    'alertStatus' => "alert-danger",
                    'message' => '<p style="color:red">Your score not enough, please try again late! (Số điểm của bạn không đủ để thực hiện, vui lòng thử lại sau!)</p>'
                ]);
            }
        } else {
            return response([
                'error' => true,
                'authorization' => false,
                'alertStatus' => "alert-danger",
                'message' => '<p style="color:red">Not authorization</p>'
                ]);
        }
    }

    public function test(){
  //       \Stripe\Stripe::setApiKey("sk_test_8dgpVpWYycrDGcG0n8mONILj");

		// $customer = \Stripe\Charge::create(array(
		// 	 "source" => "tok_19danlAIyKq9h5i12pKST8ig",
		// 	  "amount" => "100",
		// 	  "currency" => "usd",
		// 	  "description" => "0904948875",
		// 	  "metadata" => [
		// 		"order_id" => 48
		// 	  ]
		// ));
		// /*
		// $customer = \Stripe\Customer::retrieve(
		// 	"cus_9xATsBUKy3jtx8"
		// );
		//  */

		// dd($customer);
        return view('welcome');
    }

	/**
    * Create a new Stripe customer for a given user.
    *
    * @var Stripe\Customer $customer
    * @param string $token
    * @return Stripe\Customer $customer
    */
    public function createStripeCustomer($token)
    {
        \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

        $customer = \Stripe\Customer::create(array(
            "description" => Auth::user()->email,
            "source" => $token
        ));

        Auth::user()->stripe_id = $customer->id;
        Auth::user()->save();

        return $customer;
    }

	/**
    * Check if the Stripe customer exists.
    *
    * @return boolean
    */
    public function isStripeCustomer()
    {
        return Auth::user() && \App\User::where('id', Auth::user()->id)->whereNotNull('stripe_id')->first();
    }
}