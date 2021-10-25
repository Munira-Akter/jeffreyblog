<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;

class RegisterController extends Controller
{
    //this method in for register view show
    public function index(){
        return view('aurh.index');
    }

    // this method is for store user data in database
    public function store(UserRequest $request){
        User::create($request->all());
        return redirect('/')->with('success' , 'Your account created successfully!');
    }
}
