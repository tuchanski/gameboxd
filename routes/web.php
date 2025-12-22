<?php

use App\Http\Controllers\GamebrainApiController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('dashboard');
//})->middleware(['auth']);

// Dashboard
Route::get('/', [ReviewController::class, 'index'])->name('home')->middleware('auth');

// Reviews (Posts)
Route::get('/reviews/create', [ReviewController::class, 'create'])->name('review.create')->middleware('auth');
Route::get('/reviews/{review}', [ReviewController::class, 'show'])->name('review')->middleware('auth');
Route::post('/reviews', [ReviewController::class, 'store'])->name('review.store')->middleware('auth');
Route::delete('/reviews/{review}', [ReviewController::class, 'destroy'])->name('review.destroy')->middleware('auth');

// Auth
Route::get('/register', [RegisteredUserController::class, 'create'])->name('register')->middleware('guest');
Route::post('/register', [RegisteredUserController::class, 'store'])->name('register.store')->middleware('guest');
Route::get("/login", [SessionController::class, 'create'])->name('login')->middleware('guest');
Route::post("/login", [SessionController::class, 'store'])->name('login.store')->middleware('guest');
Route::delete("/login", [SessionController::class, 'destroy'])->middleware('auth');

// Gamebrain API
Route::get('/games', [GamebrainApiController::class, 'index'])->name('games')->middleware('auth');

// About
Route::get("/about", function () {
    return view('about');
})->middleware('auth')->name('about');
