<?php

use Illuminate\Support\Facades\Route;

//Route::resource('movies',\App\Http\Controllers\MovieController::class);
Route::get('/',[\App\Http\Controllers\MovieController::class,'index'])->name('movies.index');
Route::get('/movies/{movie}',[\App\Http\Controllers\MovieController::class,'show'])->name('movies.show');

Route::get('/actors',[\App\Http\Controllers\ActorController::class,'index'])->name('actors.index');
Route::get('/actors/page/{page?}',[\App\Http\Controllers\ActorController::class,'index']);
Route::get('/actors/{actor}',[\App\Http\Controllers\ActorController::class,'show'])->name('actors.show');
