<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePositionTable extends Migration
{
    public function up()
    {
        Schema::create('position', function (Blueprint $table) {
            $table->id();
            $table->string('position_name');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('position');
    }
}
