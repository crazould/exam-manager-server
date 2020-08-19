<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScheduleHeadersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedule_headers', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('test_id');
            $table->foreign('test_id')->references('id')->on('test_headers')
            ->onUpdate('cascade')->onDelete('cascade');
            $table->dateTime('schedule_date');
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
        Schema::dropIfExists('schedule_headers');
    }
}
