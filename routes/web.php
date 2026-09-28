<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('beranda');
});

Route::get('/union/bhaskara', function () {
    return view('union.bhaskara');
});

Route::get('/bhaskara', function () {
    return view('union.bhaskara');
});

Route::get('/beranda', function () {
    return view('beranda');
});
