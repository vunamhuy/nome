<?php

namespace App;

use App\File;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	protected $fillable = ['id', 'name', 'description', 'content', 'price', 'file_id', 'user_id'];
    public function file()
    {
        return $this->belongsTo('App\File');
    }  

    public function user()
    {
        return $this->belongsTo('App\User');
    }  

    public function slug()
	{
	    $clean = $this->name;
	    setlocale(LC_ALL, 'en_US.UTF8');

	    $delimiter = '-';

	    $clean = iconv('UTF-8', 'ASCII//TRANSLIT', $clean);
	    $clean = preg_replace("/[^a-zA-Z0-9\/_|+ -]/", '', $clean);
	    $clean = preg_replace("/[\/_|+ -]+/", $delimiter, $clean);
	    $clean = strtolower(trim($clean, $delimiter));

	    return $clean;
	}
}