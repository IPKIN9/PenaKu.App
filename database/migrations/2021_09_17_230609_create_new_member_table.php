<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewMemberTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('new_member', function (Blueprint $table) {
            $table->id();
            $table->string('pic');
            $table->string('regis_number');
            $table->string('name');
            $table->date('born');
            $table->string('sex');
            $table->foreignId('departemen_id')->constrained('departement');
            $table->string('semester');
            $table->string('hp')->nullable();
            $table->string('cause');
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
        Schema::dropIfExists('new_member');
    }
}
