<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMemberTable extends Migration
{
    public function up()
    {
        Schema::create('member', function (Blueprint $table) {
            $table->id();
            $table->string('pic');
            $table->string('regist_number');
            $table->string('name');
            $table->date('born');
            $table->string('sex');
            $table->foreignId('departement_id')->constrained('departement');
            $table->foreignId('generation_id')->constrained('generation');
            $table->foreignId('position_id')->constrained('position');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('member');
    }
}
