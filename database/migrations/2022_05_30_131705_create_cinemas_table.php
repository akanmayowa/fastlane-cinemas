<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCinemasTable extends Migration
{

    public function up()
    {
        Schema::create('cinemas', function (Blueprint $table) {
            $table->id();
            $table->string('cinema_name');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('cinemas');
    }
}
