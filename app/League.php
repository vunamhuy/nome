<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class League extends Model
{
    //
    protected $table = 'league';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'league_id'];
    public function country(){
    	return $this->belongsTo(App\Country::class);
    }
    public function team(){
    	return $this->hasMany(App\Team::class);
    }
}
