<?php

use App\Http\Controllers\MoviesController;
use App\Http\Controllers\CinemasController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



Route::middleware('api')->group(function () {
    Route::resource('movies', MoviesController::class);
    Route::resource('cinemas', CinemasController::class);
});
