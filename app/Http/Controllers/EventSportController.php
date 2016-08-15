<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\EventSport;
use App\Http\Controllers\Controller;
use App\Repositories\Interfaces\EventSportInterface;

class EventSportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $eventSportInterface;
    public function __construct(EventSportInterface $eventSportInterface)
    {
        //
        $this->eventSportInterface = $eventSportInterface;
    }
    public function index()
    {
        $events = $this->eventSportInterface->paginate(2);
        if (\Request::ajax()) {
            return \Response::json(view('event.list', compact('events'))->render());
        }
        return view('event.index', compact('events'));
    }
    public function edit(Request $request, $id)
    {
        //
        $events = EventSport::where('id', $id)->first();
        return view('event.edit', compact('events'));
    }

    public function update(Request $request, $id)
    {
        //
        $input = $request->all();
        $event = EventSport::find($id);
        
        if(! $event){

            return \Redirect::back()->with('messageError', 'Error');
        }
        $event->created_at = $input['start_date'];
        $success = $event->update($input);
        if($success){
            return \Redirect::to('/admin/event')->with('messageSuccess', 'success');
        }else{
            return \Redirect::back()->with('messageError', 'Error');
        }
    }
    public function destroy($id){
        EventSport::destroy($id);
        return redirect('/admin/event');
    }
}
