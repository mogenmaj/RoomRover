<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('about', function (Request $request) {
    return view('about');
})->name('about');

Route::get('contact', function (Request $request) {
    return view('contact');
})->name('contact');

Route::get('rooms', function (Request $request) {
    return view('rooms');
})->name('rooms');

Route::get('restaurant', function (Request $request) {
    return view('restaurant');
})->name('restaurant');

Route::get('blog', function (Request $request) {
    return view('blog');
})->name('blog');

Route::get('index', function (Request $request) {
    return view('index');
})->name('index');


