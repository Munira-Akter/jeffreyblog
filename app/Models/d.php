<?php

namespace App\Models;

use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;

class Post{

    public $title;
    public $slug;
    public $excerpt;
    public $date;


    public function __construct($title,$slug,$excerpt,$date)
    {
        $this -> title = $title;
        $this -> slug = $slug;
        $this -> excerpt = $excerpt;
        $this -> date = $date;
    }


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

        return cache()->rememberForever('post.all', function () {

            return $all = collect($files = File::files(resource_path('post')))
                ->map(function($file){

                    $document = YamlFrontMatter::parseFile($file);

                    return new Post($document -> title,$document -> slug,$document->excerpt,$document->data);


            },$files);

        });



    }
}


?>
