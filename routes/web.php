<?php

use App\Jobs\PopulateDatabaseFromApi;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.homePage');
});

Route::get('/data', function () {
    PopulateDatabaseFromApi::dispatch();
});
