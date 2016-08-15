<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\EventSport;
use App\EventRatio;
use App\EventUserBooks;
use App\EventUserScores;
use DB;
use Validator;
use App\Product;
use Cache;

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
        
        if(! empty($events_sport)){
            return view('main.events_sport', compact('events_sport'));
        }else{
            abort(403);
        }
    }

    public function eventRatio(Request $request, $id)
    {
        // DB::enableQueryLog();
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
        $event_user_books =array();
        $user_id = \Auth::user()->id;
        if($user_id){
            $validator = Validator::make($request->all(), [
                'ratio_id' => 'integer|required|min:1',
                'scores' => 'required|integer|min:1',
            ]);
            if ($validator->fails()) {
                $result = [
                    'error' => true,
                    'status' => 'The validation has fails',
                    'message' => 'fails'
                ];
                return response($result);
            }
            $event_user_books['user_id'] = $user_id;
            $event_user_books['ratio_id'] = $data['ratio_id'];
            $event_user_books['scores'] = $data['scores'];
            $user_scores_info = EventUserScores::where('user_id', '=', $user_id)->first();
            $success = false;
            $updateScores = false;
            if($user_scores_info->scores && $user_scores_info->scores >= $data['scores']){
                $success = EventUserBooks::insert($event_user_books);
                // scores
                $user_scores_info->scores -= $data['scores']; 
                $updateScores = DB::table('event_user_scores')
                ->where('user_id', $user_scores_info->user_id)
                ->update(['scores' => $user_scores_info->scores]);
            }
            $result = [
                'error' => false,
                'success' => $success,
                'updateScores' => $updateScores,
                'message' => 'success'
            ];
            
            return response($result);
        }else{
            return response([
                'error' => true,
                'authorization' => false,
                'message' => 'Not authorization'
                ]);
        }
    }
}