<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventSport extends Model
{
    //
    protected $table = 'event_sport';
    protected $fillable = ['team_id','competitor_id', 'group_id', 'league_id'];

    public function team()
    {
        return $this->belongsTo('App\Team', 'team_id', 'id');
    }
    public function competitor()
    {
        return $this->belongsTo('App\Team', 'competitor_id', 'id');
    }
    public function ratio()
    {
        return $this->hasMany('App\EventRatio', 'event_id', 'id');
    }
    public function league()
    {
        return $this->belongsTo('App\League', 'league_id', 'id');
    }
}
