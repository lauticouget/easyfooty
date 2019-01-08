<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('teams', function (Blueprint $table) {
            $table->foreign('goalkeeper_id')->references('id')->on('users');
            $table->foreign('player1_id')->references('id')->on('users');
            $table->foreign('player2_id')->references('id')->on('users');
            $table->foreign('player3_id')->references('id')->on('users');
            $table->foreign('captain_id')->references('id')->on('users');      
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
