<?php

use App\Jobs\InsertDeputy;
use App\Jobs\InsertExpenses;
use App\Jobs\PopulateDatabaseFromApi;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.homePage');
});

Route::get('/waiting', function () {
    return view('pages.waitingPage');
});

Route::get('/data', function () {
    // PopulateDatabaseFromApi::dispatch();
    // InsertDeputy::dispatch(1, [
    //     'deputy_identifier' => 204379,
    //     'name' => 'daniel',
    //     'email' => 'daniel@tals',
    //     'party_acronym' => 'BRL',
    //     'photo' => 'aqui😎',
    //     'state_of_birth' => 'CE',
    // ]);
    // InsertExpenses::dispatch(1, 204379);
});


