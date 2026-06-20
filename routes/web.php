<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home');
Route::view('/about', 'about');

// Custom student view route
Route::get('/students', [JobController::class, 'student']);

// Job Routes with correct HTTP verbs
Route::get('/jobs', [JobController::class, 'index']);                           // Public list
Route::get('/jobs/create', [JobController::class, 'create']);
Route::post('/jobs', [JobController::class, 'store'])->middleware('auth');       // Handle form submission

Route::get('/jobs/{job}', [JobController::class, 'show']);                        // Public single view
Route::get('/jobs/{job}/edit', [JobController::class, 'edit'])
    ->middleware('auth')
    ->can('edit_job', 'job');

Route::patch('/jobs/{job}', [JobController::class, 'update'])                   // Changed to PATCH
    ->middleware('auth')
    ->can('edit_job', 'job');

Route::delete('/jobs/{job}', [JobController::class, 'destroy'])                  // Changed to DELETE & fixed typo
    ->middleware('auth')
    ->can('edit_job', 'job');

// Auth Routes
Route::get('/register', [RegisteredUserController::class,'create']);
Route::post('/register', [RegisteredUserController::class,'store']);

Route::get('/login', [SessionController::class,'create'])->name('login');
Route::post('/login', [SessionController::class,'store']);
Route::post('/logout', [SessionController::class,'destroy']); // Fixed typo here too if needed
