<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableEventRatio extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_ratio', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('event_id');
            $table->integer('team_id');
            $table->integer('result_id');
            $table->float('ratio');
            $table->integer('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('event_ratio');
    }
}
