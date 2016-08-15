<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
use App\EventRatio;
use App\User;
use App\EventSport;
use App\EventUserBooks;
use App\EventUserScores;
use Validator;
use Session;
use App\Http\Controllers\Controller;

class EventRatioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $ratios = EventRatio::with(['event_sport', 'event_result'])->paginate(10);
        if (\Request::ajax()) {
            return \Response::json(view('ratio.list', compact('ratios'))->render());
        }

        return view('ratio.index', compact('ratios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        // return view('ratio.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        //
        $statuses = array(0 => "No",1 => "Yes");
        $ratio = EventRatio::with(['event_sport', 'event_result'])->where('id', '=', $id)->first();

        return view('ratio.edit', compact('ratio', 'statuses'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $ratio = $request->all();
        $user_id = \Auth::user()->id;
        $ratioData = EventRatio::where('id', '=', $id)->first();
        $updateStatus = EventRatio::where('event_id', '=', $ratioData->event_id)
        ->update(['status' => 0]);
        $success = EventRatio::where('id', '=', $id)->update(['status' => $ratio['status']]);
        
        if($ratio['updateScores']){
            // DB::enableQueryLog();
            // update scores 
            $user_scores = EventUserBooks::join('event_ratio', 'event_ratio.id', '=', 'event_user_books.ratio_id')
            ->select(['event_user_books.user_id as user_id',DB::raw('sum(event_ratio.ratio*event_user_books.scores) as total_scores')])
            ->where('event_ratio.status', '=', 1)
            ->where('event_ratio.id', '=', $id)
            ->where('event_user_books.status', '<>', 1)
            ->groupBy('user_id')
            ->get()->toArray();
            // update điểm
            $successScores =array();
            foreach($user_scores as $key => $scores){
                $successScores[$key] = EventUserScores::where('user_id', '=', $scores['user_id'])->increment('scores', $scores['total_scores']);
            }
            $updateStatus = EventUserBooks::where('ratio_id', '=', $id)->update(['status' => 1]);
            // trừ đi số điểm đã cộng khi update kết quả

            // print_r(DB::getQueryLog());die;
            return \Redirect::back()->with('message', 'Updated success!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
