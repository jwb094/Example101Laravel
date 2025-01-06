<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
class SessionController extends Controller
{
    //

    public function create(){
        return view('auth.login');
    }

    public function store(){
        // dd(request()->all());
       $attributes = request()->validate([
            'email' => ['required','email'],
            'password' => ['required']
        ]);
        Auth::attempt($attributes,true);

        request()->session()->regenerate();

        return redirect('/jobs');
    }




    public function  destroy (){

        Session::flush();
        Auth::logout();

        return redirect('/');
    }
}
