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
Route::delete('/reviews/{review}', [ReviewController::class, 'destroy'])->name('review.destroy')->middleware('auth');

// Auth
Route::get('/register', [RegisteredUserController::class, 'create'])->name('register')->middleware('guest');
Route::post('/register', [RegisteredUserController::class, 'store'])->name('register.store')->middleware('guest');

Route::get("/login", [SessionController::class, 'create'])->name('login')->middleware('guest');
Route::post("/login", [SessionController::class, 'store'])->name('login.store')->middleware('guest');
Route::delete("/login", [SessionController::class, 'destroy'])->middleware('auth');

Route::get("/about", function () {
    return view('about');
})->middleware('auth')->name('about');
