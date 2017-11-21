<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventUserScores extends Model
{
    //
    protected $table = 'event_user_scores';
    protected $fillable = ['id', 'user_id', 'scores'];
}
