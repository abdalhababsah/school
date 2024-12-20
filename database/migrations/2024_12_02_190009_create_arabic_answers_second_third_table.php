<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArabicAnswersSecondThirdTable extends Migration
{
    public function up()
    {
        Schema::create('arabic_answers_second_third', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('question_id'); // Foreign key for arabic_second_third
            $table->unsignedBigInteger('user_id'); // Foreign key for users table
            $table->string('answer'); // Answer field
            $table->boolean('is_correct')->default(false); // Whether the answer is correct

            $table->timestamps(); // created_at and updated_at

            // Foreign key constraints
            $table->foreign('question_id')->references('id')->on('arabic_second_third')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('arabic_answers_second_third');
    }
}
