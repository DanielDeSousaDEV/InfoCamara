<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.homePage');
});

Route::get('/waiting', function () {
    return view('pages.waitingPage');
});