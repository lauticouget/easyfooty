<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matches', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            
            $table->dateTime('date');
            
            $table->integer('team1_id')->unsigned();
            $table->integer('team2_id')->unsigned();

            $table->integer('score1_id')->unsigned();
            $table->integer('score2_id')->unsigned();

            $table->integer('field_id')->unsigned();
            
            $table->integer('guest1_id')->unsigned()->nullable();
            $table->integer('guest2_id')->unsigned()->nullable();
            $table->integer('guest3_id')->unsigned()->nullable();
            $table->integer('guest4_id')->unsigned()->nullable();
            $table->integer('guest5_id')->unsigned()->nullable();
            $table->integer('guest6_id')->unsigned()->nullable();
            $table->integer('guest7_id')->unsigned()->nullable();
            $table->integer('guest8_id')->unsigned()->nullable();
            $table->integer('guest9_id')->unsigned()->nullable();
 
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('matches');
    }
}
