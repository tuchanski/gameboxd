<?php

use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('dashboard');
//})->middleware(['auth']);

// Main
Route::get('/', [ReviewController::class, 'index'])->name('home')->middleware('auth');

// Post
Route::get('/reviews/{review}', [ReviewController::class, 'show'])->name('review')->middleware('auth');

// Auth
Route::get('/register', [RegisteredUserController::class, 'create']);
Route::post('/register', [RegisteredUserController::class, 'store']);

Route::get("/login", [SessionController::class, 'create'])->name('login');
Route::post("/login", [SessionController::class, 'store']);
Route::delete("/login", [SessionController::class, 'destroy']);

