<?php

use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use Spatie\YamlFrontMatter\YamlFrontMatter;


Route::get('/', function () {
    $post = Post::with('category')->latest()->get();
   return view('posts' , compact('post'));
});


Route::get('/post/{post:slug}', function(Post $post){

    if(!isset($post)){
        abort(404);
    }else{
        // $post = cache()->rememberForever('post.{$post}',function() use($post){
        //     return $posts = [
        //         'post' =>  $post,
        //         'category' => $post -> category(),
        //     ];
        // });
        return view('post',compact('post'));
    }

})->where('slug','[A-z_\-]+');



Route::get('/posts/category/{category:slug}' , function(Category $category){
    if(!isset($category)){
        abort(404);
    }else{
        return view('category' , compact('category'));
    }
});
