<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    //this method is call for store comment is Database

    public function store(Post $post){
        request()->validate([
            'body' => 'required',
        ]);

        $post -> comments() -> create([
            'user_id' => auth() -> user() -> id,
            'body' => request() -> input('body'),
        ]);

        return redirect()->back();

    }


}
