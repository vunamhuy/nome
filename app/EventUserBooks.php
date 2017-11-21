<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventUserBooks extends Model
{
    //
    protected $table = 'event_user_books';
    protected $fillable = ['id', 'user_id', 'ratio_id', 'scores'];

    public function ratio()
    {
        return $this->belongsTo('App\EventRatio', 'ratio_id', 'id');
    }
    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
}
