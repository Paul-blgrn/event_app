<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/event/{event}', [EventController::class, 'show']);

Route::get('/event/comment/{comment}', [CommentController::class, 'show']);

Route::get('/events', [EventController::class, 'index']);

Route::get('/events/comments', function () {

});

Route::get('/login', function () {

});

Route::get('/cities', function () {

});
