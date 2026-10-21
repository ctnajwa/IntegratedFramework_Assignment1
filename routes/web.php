<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
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

// Maneessa About Me Page
Route::get('/about/maneessa', function () {
    return view('about-maneessa');
})->name('about.maneessa');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');
