<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailQuestionTable extends Migration
{
    public function up()
    {
        Schema::create('detail_question', function (Blueprint $table) {
            $table->id();
            $table->foreignId('new_member_id')->constrained('new_member');
            $table->foreignId('question_id')->constrained('question');
            $table->string('answer');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('detail_question');
    }
}
