<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('posts' , [
            'posts' => Post::latest()->filter(request(['search','category']))->get(),
            'categories' => Category::all(),
            // 'Currentcategory' => Category::firstWhere('slug' , request('category')),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function categorysearch(Category $category)
    {
        if(!isset($category)){
            abort(404);
        }else{
            return view('posts' ,[
                'CurrentCategory' => $category,
                'posts'  => $category -> posts,
                'categories' => Category::all()

            ]);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
            // $post = cache()->rememberForever('post.{$post}',function() use($post){
            //     return $post::with('category');
            // });
            return view('post',compact('post'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * Search Post by Author
     */

    public function authorsearch(User $user){
        if(!isset($user)){
            abort(404);
        }else{
            return view('author' , compact('user'));
        }

    }
}
