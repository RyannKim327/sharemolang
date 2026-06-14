<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function (Request $request) {
    return view('index');
});

Route::get('/about', function (Request $request) {
    return view('about');
});
