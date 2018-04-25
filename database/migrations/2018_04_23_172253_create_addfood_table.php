<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddfoodTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addfood', function (Blueprint $table) {
            $table->increments('id');
            $table->string('restName')->nullable();
            $table->string('cuisine')->nullable();
            $table->string('restphone')->nullable();
            $table->string('restemail')->nullable();
            $table->string('restwebsite')->nullable();
            
            $table->string('address')->nullable();
            $table->string('zip')->nullable();
            $table->string('city')->nullable();

            $table->string('weekday')->nullable();
            $table->string('weekend')->nullable();

            $table->text('restdescription')->nullable();
             
            $table->string('restimage')->nullable();

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
        Schema::dropIfExists('addfood');
    }
}
