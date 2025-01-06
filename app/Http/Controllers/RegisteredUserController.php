<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;
use App\Models\User;
// use  Illuminate\Broadcasting\Broadcasters\AblyBroadca

use Illuminate\Support\Facades\Auth;
class RegisteredUserController extends Controller
{
    //


    public function create(){
        return view('auth.register');
    }

    public function store(Request $request){
        // validate 
        $validateAttributes = request()->validate([
            'first_name' => ['required'],
            'last_name' => ['required'],
            'email' => ['required','email'],
            'password' => ['required',Password::min(6),'confirmed']
        ]);

        $user = User::create($validateAttributes);

        Auth::login($user);

        return redirect('/jobs');
        //dd(request()->all());
    }
}
