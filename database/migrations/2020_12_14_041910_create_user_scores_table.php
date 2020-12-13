<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserScoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_scores', function (Blueprint $table) {
            $table->unsignedInteger('userID');
            $table->unsignedInteger('scheduleID');
            $table->integer('score');
            $table->foreign('userID')->references('id')->on('users')
            ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('scheduleID')->references('id')->on('schedule_headers')
            ->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('user_scores');
    }
}
