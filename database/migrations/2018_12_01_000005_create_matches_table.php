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
