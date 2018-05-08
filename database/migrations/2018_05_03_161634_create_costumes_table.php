<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCostumesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('costumes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('band');
            $table->string('section');
            $table->string('category1')->nullable();
            $table->string('price1')->nullable();
            $table->string('category2')->nullable();
            $table->string('price2')->nullable();
            $table->string('category3')->nullable();
            $table->string('price3')->nullable();
            $table->string('category4')->nullable();
            $table->string('price4')->nullable();
            $table->text('description')->nullable();
            $table->string('image');
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
        Schema::dropIfExists('costumes');
    }
}
