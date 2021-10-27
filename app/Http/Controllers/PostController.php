<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('posts.index' , [
            'posts' => Post::latest()
            ->filter(request(['search','category','author']))
            ->paginate(6)->withQueryString(),

        ]);
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function postshow(Post $post)
    {

        if(!isset($post)){
            abort(404);
        }else{
            return view('posts.show',compact('post'));
        }
    }


}
