<?php

namespace App;

use App\File;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    //
    protected $table = 'team';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id','name', 'league_id', 'file_id'];

    public function file()
    {
        return $this->belongsTo('App\File');
    }
    public function league()
    {
        return $this->belongsTo('App\League');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function event_sport()
    {
        return $this->belongsTo('App\EventSport');
    }
}
