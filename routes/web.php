<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReviewController;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/reviews', [ReviewController::class, 'store'])->name('reviews.store');

Route::get('/reviews', [ReviewController::class, 'index'])->name('reviews.index');