<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    //this method in for register view show
    public function index(){
        return view('aurh.index');
    }

    // this method is for store user data in database
    public function store(UserRequest $request){
        $user = User::create($request->all());
        Auth::login($user);
        return redirect('/')->with('success' , 'Your account created successfully!');
    }

    // Auth user logout

    public function distroy(){
        Auth::logout();
        return redirect('/')->with('success' , 'We are feel sorry to see you go back! ');
    }

    // This method is for login view return
    public function loginview(){
        return view('aurh.login');
    }

    // Login User Authentication
    public function login(Request $request){
        $user_data = request()->validate([
            'email' => 'required|email',
            'password' => 'required|min:5|max:255',
        ]);

        if(Auth::attempt($user_data)){
            // session()->regenerate();
           return redirect('/')->with('success' , 'Welcome BAck!');
        }else{
            throw ValidationException::withMessages([
                'email' => 'This isn\'t a valid email address',
                'password' => 'this password is incorrect',
            ]);
        }
    }
}
