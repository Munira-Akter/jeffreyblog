<?php

use Illuminate\Support\Facades\Route;

Route::get('/{post:slug}', 'PostController@postshow')->where('slug','[A-z_\-]+');
Route::resource('/', PostController::class);

