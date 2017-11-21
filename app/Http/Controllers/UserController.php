<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use App\Country;
use Input;
use App\Http\Requests\UserAccountRequest;
use App\Http\Controllers\Controller;
use App\Repositories\Interfaces\UserInterface;
use Illuminate\Support\Facades\File as Files;
use App\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Response;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $userInterface;
    public function __construct(UserInterface $userInterface)
    {
        $this->middleware('auth:all');
        $this->userInterface = $userInterface;
    }

    public function index()
    {
        //
        if(\Auth::user()->hasRole('supper_user') || \Auth::user()->hasRole('basic_user') || \Auth::user()->hasRole('free_user')){
            return view('user.index');
        }
        return response(view('errors.403'), 403);
    }

    public function getYears()
    {
        $start_year = 1890;
        $end_year = 2100;
        $years = null;
        for($i=$start_year; $i <= $end_year; $i++){
            $years[$i] = $i;
        }
        return $years;
    }
    public function getMonths()
    {
        $start_month = 1;
        $end_month = 12;
        $months = null;
        for($i=$start_month; $i <= $end_month; $i++){
            $months[$i] = $i;
        }
        return $months;
    }
    public function getDays()
    {
        $start_day = 1;
        $end_day = 31;
        $days = null;
        for($i=$start_day; $i <= $end_day; $i++){
            $days[$i] = $i;
        }
        return $days;
    }
    public function getSexies()
    {
        $sexies = [
            'male' =>'Male',
            'female' =>'Female'
        ];
        return $sexies;
    }

    public function account()
    {
        $years = $this->getYears();
        $months = $this->getMonths();
        $days = $this->getDays();
        $sexies = $this->getSexies();
        $user_id = \Auth::user()->id;
        $user = User::with(['avatar'])->where('id', $user_id)->first();
        $point = \Auth::user()->point();
        return view('user.account', compact('user', 'years', 'months', 'days', 'sexies', 'point'));
    }

    public function charge()
    {
        $point = \Auth::user()->point();
        return view('user.account-charge', compact('point'));
    }

    public function updateAccount(UserAccountRequest $request)
    {
        $user_id = \Auth::user()->id;
        $input = $request->all();
        $user = User::find($user_id);
        $file = \Request::file('avatar');
        if( !empty($user) ) {
            if($file){
                $entry = $this->userInterface->saveFile($file);
                $user->file_id = $entry->id;
            }
            $user->update($input);
        }

        return \Redirect::to('/user/account')->with('messageSuccess', 'success');

    }

    public function video($filename){
        $entry = File::where('filename', '=', $filename)->firstOrFail();
        $file = Storage::disk('local')->get($entry->filename);

        return (new Response($file, 200))
              ->header('Content-Type', $entry->mime);
    }

    public function home()
    {
        if(\Auth::user()->hasRole('supper_user') || \Auth::user()->hasRole('basic_user') || \Auth::user()->hasRole('free_user')){
            return view('user.home');
        }
        return response(view('errors.403'), 403);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    public function edit($id)
    {
        //
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
        //
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
