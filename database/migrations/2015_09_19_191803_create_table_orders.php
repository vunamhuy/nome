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
            $table->string('name', 250);
            $table->string('phone', 250);
            $table->string('address', 250);
            $table->string('comment', 250);
            $table->string('email', 250);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('orders');
    }
}
