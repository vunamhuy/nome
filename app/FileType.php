<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FileType extends Model
{
    //
    protected $table = 'file_type';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name'];
    public function file(){
    	return $this->hasMany(App\File::class);
    }
}
