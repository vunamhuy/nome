<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('description');
            $table->string('keyword');
            $table->string('tags');
            $table->double('price');
            $table->double('price_sale');
            $table->string('image_url');
            $table->string('file_id');
            $table->integer('user_id')->unsigned()->index();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('products', function ($table) {
            $table->dropSoftDeletes();
        });
    }

    public function dropSoftDeletes()
    {
        $this->dropColumn('deleted_at');
    }
}
