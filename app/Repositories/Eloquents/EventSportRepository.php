<?php
namespace App\Repositories\Eloquents;
use App\EventSport;
use App\Team;
use App\League;
use DB;
use App\Repositories\Interfaces\EventSportInterface;
use App\Repositories\Eloquents\TeamRepository;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File as Files;

class EventSportRepository extends Repository implements EventSportInterface {
    /**
    * Eloquent model
    */
    protected $model;

    /**
    * @param Lesson $model
    */
    function __construct(EventSport $model)
    {
        $this->model = $model;
    }
    
    public function paginate($perPage = 5, $columns = array('*')) {
        return $this->model->with(['team', 'competitor'])->paginate($perPage, $columns);
    }
    
    public function importCsvEventSport($data = array())
    {
        if(! empty($data) && $data->count()){
            $countSuccess = 0 ;
            $countFailed = 0 ;
            $insert = array();
            foreach ($data as $key => $value) {

                if(!empty($value->team) && !empty($value->competitor)  && !empty($value->league)){
                	// get id team
                    $team = Team::where('name', '=' ,$value->team)->first(); 
                    //get id competitor
                    $competitor = Team::where('name', '=' ,$value->competitor)->first(); 
                    //get id league
                    $league = League::where('name', '=' ,$value->league)->first(); 

                    $event = EventSport::where('team_id', '=', $team->id)->where('competitor_id', '=', $competitor->id)->where('league_id', '=', $league->id);

                    if(empty($event)){ // empty
                    	// assign data insert records
                        $insert[] = [
                            'team_id' => $team->id, 
                            'competitor_id' => $competitor->id, 
                            'group_id' => $value->group, 
                            'league_id' => $league->id
                        ];
                        $countSuccess++;
                    }
                }
                else{
                    $countFailed++;
                }
            }
            if(!empty($insert)){
                DB::table('event_sport')->insert($insert);
                return redirect()->to('event_sport')->with(['messageSuccess' => 'Records inserted success', 'countSuccess' =>$countSuccess,'messageError' => 'Records is invalid data', 'countFailed' =>$countFailed]);
            }
            else{
                return redirect()->to('event_sport')->with(['messageError' => 'Error while connect server']);
            }
        }
        return false;
    }
    public static  function test(){
        $teamRepository = new TeamRepository;
        return $teamRepository->test();
    }
}