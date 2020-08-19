<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('question_type_id');
            $table->unsignedInteger('question_option_id');
            $table->string('name');
            $table->string('right_answer');
            $table->foreign('question_type_id')->references('id')->on('question_types')
            ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('question_option_id')->references('id')->on('question_options')
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
        Schema::dropIfExists('questions');
    }
}
