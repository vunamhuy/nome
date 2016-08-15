<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableOrders extends Migration
{

    public function up()
    {
        Schema::create('orders', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('user_id');
            $table->float('total_paid');
            $table->float('name');
            $table->float('phone');
            $table->float('address');
            $table->float('comment');
            $table->float('email');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('orders');
    }
}
