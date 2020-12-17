<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_answers', function (Blueprint $table) {
            $table->unsignedInteger('userID');
            $table->unsignedInteger('questionID');
            $table->text('answer')->nullable();
            $table->foreign('userID')->references('id')->on('users')
            ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('questionID')->references('id')->on('questions')
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
        Schema::dropIfExists('user_answers');
    }
}
