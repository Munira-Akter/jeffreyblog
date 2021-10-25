<?php

use Illuminate\Support\Facades\Route;

Route::get('/post/{post:slug}', 'PostController@postshow')->where('slug','[A-z_\-]+');
Route::resource('/', PostController::class);

