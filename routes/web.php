<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('posts');
});


Route::get('/post/{slug}', function($slug){
    $path = resource_path("post/{$slug}.html");

    if(!file_exists($path)){
        abort(404, 'Post Not Found');
    }else{
        $file = file_get_contents($path);
        return view('post',compact('file'));
    }
});
