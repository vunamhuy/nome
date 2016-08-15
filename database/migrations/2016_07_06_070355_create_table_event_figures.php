<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableEventFigures extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_figures', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('event_id');
            $table->integer('team_id');
            $table->integer('ball_process_percent');
            $table->integer('attempt');
            $table->integer('target_in');
            $table->integer('target_out');
            $table->integer('goals');
            $table->integer('target');
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
        Schema::drop('event_figures');
    }
}
