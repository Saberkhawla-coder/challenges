<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/hello', function () {
    return view('hello');
});

Route::resource('/post', PostController::class);

Route::resource('services', ServiceController::class);
Route::resource('bookings', BookingController::class);
