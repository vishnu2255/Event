<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::create('events', function (Blueprint $table) {
            $table->increments('id');
            $table->string('eventname');
            $table->date('eventdate');
            $table->string('eventclub')->nullable();
            $table->string('eventhours')->nullable();
            $table->string('eventphone')->nullable();
            $table->string('eventmail')->nullable();
            $table->string('eventwebsite')->nullable();
            $table->text('eventdescription')->nullable();
            $table->string('eventnotes')->nullable();
            $table->string('eventdjname')->nullable();            
            $table->string('coverimage')->nullable();
            $table->string('carnivaldest')->nullable();                        
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
        Schema::dropIfExists('events');
    }
}
