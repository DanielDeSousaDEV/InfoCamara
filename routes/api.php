<?php

use App\Http\Controllers\DeputyController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/deputies', [DeputyController::class, 'index']);
Route::get('/deputies/{id}', [DeputyController::class, 'show']);
Route::get('/deputies/{id}/expenses', [DeputyController::class, 'expenses']);