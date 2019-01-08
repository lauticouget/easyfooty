<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();

            $table->string('first_name');
            $table->string('last_name')->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->unsignedSmallInteger('height')->nullable();
            $table->string('favorite_position')->nullable();
            $table->string('strong_foot')->nullable();
            $table->string('location')->nullable();
            $table->string('profile_img_path')->nullable();
            $table->bigInteger('phone')->unique()->signed()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
