<?php

use App\Http\Controllers\pesananController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('layouts.master-layout');
})->name('WelcomePage');

Route::get('/pesanan', function () {
    return view('pages.tablePemesanan');
})->name('tablePemesanan');

Route::get('/', function () {
    return view('layouts.master-layout');
})->name('WelcomePage');

Route::get('/bootstrap', function () {
    return view('pages.bootstrap');
})->name('bootstrap');

Route::resource('pesanan', pesananController::class);

