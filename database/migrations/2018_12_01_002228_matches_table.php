<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('matches', function(Blueprint $table){
            $table->foreign('team1_id')->references('id')->on('teams')->change();
            $table->foreign('team2_id')->references('id')->on('teams')->change();

            $table->foreign('score1_id')->references('id')->on('scores')->change();
            $table->foreign('score2_id')->references('id')->on('scores')->change();

            $table->foreign('field_id')->references('id')->on('fields')->change();

            $table->foreign('guest1_id')->references('id')->on('users');
            $table->foreign('guest2_id')->references('id')->on('users');
            $table->foreign('guest3_id')->references('id')->on('users');
            $table->foreign('guest4_id')->references('id')->on('users');
            $table->foreign('guest5_id')->references('id')->on('users');
            $table->foreign('guest6_id')->references('id')->on('users');
            $table->foreign('guest7_id')->references('id')->on('users');
            $table->foreign('guest8_id')->references('id')->on('users');
            $table->foreign('guest9_id')->references('id')->on('users');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
