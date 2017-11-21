<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventRatio extends Model
{
    //
    protected $table = 'event_ratio';
    protected $fillable = ['id', 'ratio'];
    public function event_sport()
    {
        return $this->belongsTo('App\EventSport', 'event_id', 'id');
    }
    public function event_result()
    {
        return $this->belongsTo('App\EventResult', 'result_id', 'id');
    }

    public function event_user_books()
    {
        return $this->hasMany('App\EventUserBooks', 'ratio_id', 'id');
    }
}
