<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
}); 

Route::get('/services', function () {
    return view('services');
}); 

Route::get('/meshal', function () {
    return view('branch');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/website', function () {
    return view('website');
});
