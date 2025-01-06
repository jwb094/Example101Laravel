<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\ValidationException;
use Illuminate\Validation\Validator;

class SessionController extends Controller
{
    //

    public function create(){
        return view('auth.login');
    }

    public function store(){
       $attributes = request()->validate([
            'email' => ['required','email'],
            'password' => ['required']
        ]);
        if (!Auth::attempt($attributes)){
            throw ValidationException::withMessages([
                'email' => 'sorry, those credentials do not match',
            ]);
        }

        request()->session()->regenerate();

        return redirect('/jobs');
    }




    public function  destroy (){

        Session::flush();
        Auth::logout();

        return redirect('/');
    }
}
