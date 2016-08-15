<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    //
    public function product()
    {
        return $this->belongsTo('App\Product');
    } //
    public function cartItem()
    {
        return $this->belongsTo('App\cartItem');
    }//
    public function team()
    {
        return $this->belongsTo('App\Team');
    }
    public function file_type()
    {
        return $this->belongsTo('App\FileType');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
