<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //this method in for register view show
    public function index(){
        return view('aurh.index');
    }

    // this method is for store user data in database
    public function store(){

    }
}
