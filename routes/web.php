<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/jelajahpulau', function () {
    return view('pages.jelajahpulau');
});
Route::get('/ebook', function () {
    return view('pages.ebook');
});
Route::get('/video', function () {
    return view('pages.video');
});
