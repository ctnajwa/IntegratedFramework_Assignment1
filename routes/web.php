<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
})->name('home');

// Hazirah About Me Page
Route::get('/about/hazirah', function () {
    return view('about-hazirah');
})->name('about.hazirah');

// Najwa About Me Page
Route::get('/about/najwa', function () {
    return view('about-najwa');
})->name('about.najwa');

// Aliyah About Me Page
Route::get('/about/aliyah', function () {
    return view('about-aliyah');
})->name('about.aliyah');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');
