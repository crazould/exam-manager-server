<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScheduleDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedule_details', function (Blueprint $table) {
            $table->unsignedInteger('scheduleID');
            $table->unsignedInteger('userID');
            $table->string('answerStatus');
            $table->integer('score')->default(0);
            $table->foreign('scheduleID')->references('id')->on('schedule_headers')
            ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('userID')->references('id')->on('users')
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
        Schema::dropIfExists('schedule_details');
    }
}
