<?php

namespace App\Models;

use Illuminate\Support\Facades\File;

class Post{
    public static function find($slug){

        $path = resource_path("post/{$slug}.html");

        if(!file_exists($path)){
            return abort(404, 'Post Not Found');
        }else{

            $file = cache()->remember('posts.{slug}' , 1200 , function() use($path){
                 return file_get_contents($path);
            });

            return $file;
        }
    }


    public static function all(){
         $posts = File::files(resource_path('post'));

        return $pots =  array_map(function($post){
             return $post -> getContents();
         },$posts);
    }
}


?>