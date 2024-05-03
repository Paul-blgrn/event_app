<?php

use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/event/{event}', [EventController::class, 'show']);

Route::get('/login', function () {

});

Route::get('/cities', function () {

});

Route::get('/events', [EventController::class, 'index']);
