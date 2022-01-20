<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersUsersTable extends Migration
{
    public function up()
    {
        Schema::create('user_user', function (Blueprint $table) {
            $table->id();
            $table->unSignedBigInteger('follower_id');
            $table->unSignedBigInteger('following_id');
            $table->timestamps();
            $table->foreign('follower_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('following_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_user');
    }
}
