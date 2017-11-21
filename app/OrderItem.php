<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{

    public function product()
    {
        return $this->belongsTo('App\Product', 'product_id');
    }

    public function file()
    {
        return $this->belongsTo('App\File');
    }

    public function order()
    {
        return $this->belongsTo('App\Order');
    }

    
}

