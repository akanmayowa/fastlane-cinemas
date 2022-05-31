<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoviesTable extends Migration
{

    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cinema_id');
            $table->foreign('cinema_id')->references('id')->on('cinemas')->onDelete('cascade');
            $table->string('name');
            $table->integer('rating');
            $table->string('genre');
            $table->timestamp('showtime')->useCurrent();
            $table->timestamps();
        });
    }

public function down()
    {
        Schema::dropIfExists('movies');
    }
}
