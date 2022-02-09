<?php

use Illuminate\Support\Facades\Route;

//Route::resource('movies',\App\Http\Controllers\MovieController::class);
Route::get('/',[\App\Http\Controllers\MovieController::class,'index'])->name('movies.index');
Route::get('/movies/{movie}',[\App\Http\Controllers\MovieController::class,'show'])->name('movies.show');
