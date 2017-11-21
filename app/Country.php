<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    //
    //
    protected $table = 'country';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name'];
    public function country(){
    	return $this->hasMany(App\League::class);
    }
}
