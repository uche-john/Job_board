<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;


Route::view('/', 'home');
Route::view('/students', 'students');
Route::view('/about', 'about');
Route::resource('jobs', JobController::class);







