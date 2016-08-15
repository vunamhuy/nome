<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TeamRequest;
use Input;
use App\Team;
use App\File;
use App\League;
use DB;
use Excel;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Repositories\Interfaces\TeamInterface;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $teamInterface;
    public function __construct(TeamInterface $teamInterface)
    {
        //
        $this->teamInterface = $teamInterface;
    }
    public function index()
    {
        //
        // $teams = Team::with('file')->get();
        // // echo $teams[0]->file->filename;die;
        // return view('team.index', ['teams' => $teams]);
        $teams = $this->teamInterface->paginate(2);
        if (\Request::ajax()) {
            return \Response::json(view('team.list', compact('teams'))->render());
        }
        // return \Response::json(array(
        //     'error' => false,
        //     'teams' => $teams->toArray(),
        //     'message' => 'collection success'),
        //     200
        // );die;
        return view('team.index', compact('teams'));
    }

    public function import()
    {
        //
        return view('team.import');
    }

    public function importEventSport()
    {
        //
        return view('event.import_event_sport');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $leagues = $this->getLeagues();
        return view('team.new', compact('leagues'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TeamRequest $request)
    {
        //
        $input = $request->all();
        $team = $this->teamInterface->create($input);
        if($team){
            $file = \Request::file('file');
            if(! empty($file)){
                $entry = $this->teamInterface->saveFile($file);
                $team->file_id = $entry->id;
                $this->teamInterface->update($team->toArray(), $team->id);
            }
            return \Redirect::to('admin/team')->with(['messageSuccess' => 'success', 'messageWarning' => 'Dont have image!']);
        }
        else{
            return \Redirect::back()->with('messageError', 'Error');
        }
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
        $teams = Team::with(['league', 'file'])->where('id', $id)->first();
        // $teams = array(
        //     'id' => $team->id,
        //     'name' => $team->name,
        //     'file' => $team->file
        // );
        $leagues = $this->getLeagues();
        // return \Response::json(array(
        //     'error' => false,
        //     'teams' => $teams,
        //     'message' => 'collection success'),
        //     200
        // );die;
        return view('team.edit', compact('teams','leagues'));
    }


    public function getLeagues()
    {
        //
        $leagueObject = League::all();
        $leagues = array();
        foreach($leagueObject as $key => $league){
            $leagues[$league->id]= $league->name;
        }

        return $leagues;
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
        $input = $request->all();
        $team = Team::find($id);
        $file = \Request::file('file');

        if(! $team){
            return \Redirect::back()->with('messageError', 'Error');
        }
        if($file){
            $entry = $this->teamInterface->saveFile($file);
            $team->file_id = $entry->id;
        }
        $team->user_id = \Auth::user()->id;
        $success = $team->update($input);
        if($success){
            return \Redirect::to('admin/team')->with('messageSuccess', 'success');
        }else{
            return \Redirect::back()->with('messageError', 'Error');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){

        Team::destroy($id);
        return \Redirect::to('admin/team')->with('messageSuccess', 'Deleted success');
    }

    public function importTeam()
    {
        if(Input::hasFile('import_file')){
            $path = Input::file('import_file')->getRealPath();
            $data = Excel::load($path, function($reader) {
            })->get();
            $success = $this->teamInterface->importCsv($data);
            if($success){
                return \Redirect::to('admin/team');
            }else{
                return \Redirect::back()->with('messageError', 'Error while connect server');
            }
        }
    }

    public function importCsvEventSport()
    {
        if(Input::hasFile('import_file')){
            $path = Input::file('import_file')->getRealPath();
            $data = Excel::load($path, function($reader) {
            })->get();
            $success = $this->teamInterface->importCsvEventSport($data);
            if($success){
                return \Redirect::to('admin/event');
            }else{
                return \Redirect::back()->with('messageError', 'Error while connect server');
            }
        }
    }
}
