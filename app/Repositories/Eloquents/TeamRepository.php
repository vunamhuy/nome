<?php
namespace App\Repositories\Eloquents;
use App\Team;
use App\EventSport;
use DB;
use App\Repositories\Interfaces\TeamInterface;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File as Files;

class TeamRepository extends Repository implements TeamInterface {
    /**
    * Eloquent model
    */
    protected $model;
    /**
    * @param Lesson $model
    */
    function __construct(Team $model)
    {
        $this->model = $model;
    }
    
    public function paginate($perPage = 5, $columns = array('*')) {
        return $this->model->with('file')->paginate($perPage, $columns);
    }
    public function saveFile($file) {
        $extension = $file->getClientOriginalExtension();
        Storage::disk('local')->put($file->getFilename().'.'.$extension,  Files::get($file));
        $entry = new \App\File();
        $entry->mime = $file->getClientMimeType();
        $entry->original_filename = $file->getClientOriginalName();
        $entry->filename = $file->getFilename().'.'.$extension;
        $entry->save();
        return $entry;
    }

    public function importCsv($data = array())
    {
        if(! empty($data) && $data->count()){
            $countSuccess = 0 ;
            $countFailed = 0 ;
            $insert = array();
            foreach ($data as $key => $value) {

                if(!empty($value->name)){
                    $teamName = Team::where('name', $value->name)->first();
                    if($teamName == NULL){ // both empty
                        $insert[] = [
                            'name' => $value->name, 
                            'league_id' => $value->league, 
                            'teamCode' => $value->teamcode,
                            'file_id'  => (string)$value->file_id
                        ];
                        $countSuccess++;
                    }
                }
                else{
                    $countFailed++;
                }
            }
            if(!empty($insert)){
                DB::table('team')->insert($insert);
                return redirect()->to('team')->with(['messageSuccess' => 'Records inserted success', 'countSuccess' =>$countSuccess,'messageError' => 'Records is invalid data', 'countFailed' =>$countFailed]);
            }
            else{
                return redirect()->to('team')->with(['messageError' => 'Error while connect server']);
            }
        }
        return false;
    }

    public function importCsvEventSport($data = array())
    {
        if(! empty($data) && $data->count()){
            $countSuccess = 0 ;
            $countFailed = 0 ;
            $insert = array();
            foreach ($data as $key => $value) {

                if(!empty($value->team)){
                    $event = EventSport::where('team_id', $value->team)->first();
                    if($event == NULL){ // both empty
                        $insert[] = [
                            'team_id' => $value->team, 
                            'competitor_id' => $value->competitor, 
                            'group_id' => $value->group, 
                            'league_id' => $value->league
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
}