<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TwoController;

// Rute menggunakan controller
Route::get('/portofolio', [TwoController::class, 'portofolio']);

Route::get('/', function () {
    return view('portofolio');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/school', function () {
    return view('school');
});

Route::get('/contact', function () {
    return view('contact');
});
