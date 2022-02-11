<?php

use Illuminate\Support\Facades\Route;

//Route::resource('movies',\App\Http\Controllers\MovieController::class);
Route::get('/',[\App\Http\Controllers\MovieController::class,'index'])->name('movies.index');
Route::get('/movies/{id}',[\App\Http\Controllers\MovieController::class,'show'])->name('movies.show');

Route::get('/tv',[\App\Http\Controllers\TvController::class,'index'])->name('tv.index');
Route::get('/tv/{id}',[\App\Http\Controllers\TvController::class,'show'])->name('tv.show');

Route::get('/actors',[\App\Http\Controllers\ActorController::class,'index'])->name('actors.index');
Route::get('/actors/page/{page?}',[\App\Http\Controllers\ActorController::class,'index']);
Route::get('/actors/{id}',[\App\Http\Controllers\ActorController::class,'show'])->name('actors.show');
