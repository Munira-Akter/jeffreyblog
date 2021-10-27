<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('posts.all-post', [
            'posts' => Post::latest()->paginate(10),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $data =  $this ->valiadateform(new Post());
       $data['user_id'] = auth()->id();
       $data['slug']  = Str::slug($data['title']);
       if(request()->file('thumbnail') ?? false){
            $data['thumbnail'] = request()->file('thumbnail')->store('post');
       }
        Post::create($data);

        return redirect()->back()->with('success' , 'Post Added Successfully!');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::firstWhere('id',$id);
        return view('posts.edit',[
            'post' => $post,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updatepost(Request $request, Post $post)
    {
        $data = $this->valiadateform($post);
        $data['user_id'] = auth()->id();
        $data['slug']  = Str::slug($data['title']);
        if(request()->file('thumbnail') ?? false){
            if(request()->file('old_thumbnail') ?? false){
                unlink(request()->file('old_thumbnail'));
            }
            $data['thumbnail'] = request()->file('thumbnail')->store('post');
        }else{
            $data['thumbnail'] = request()->file('old_thumbnail');
        }
        $post -> update($data);

        return redirect('/admin');
    }
 /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Post $post)
    {
       if($post -> thumbnail ?? false){
           unlink('storage/'.$post->thumbnail);
       }
       $post->delete();

       return redirect('/admin');
    }

     /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function valiadateform($post)
    {
        return request()->validate([
            'title' => ['required' , Rule::unique('posts','title')->ignore($post)],
            'excerpt' => 'required',
            'body' => 'required',
            'category_id' => ['required' , Rule::exists('categories','id')],
            'thumbnail' => 'image'
        ]);
    }


}
