<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Auth as FacadesAuth;



class RegisteredUserController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        //validate
       $validatedAttributes = request()->validate([
            'first_name' => ['required'],
            'last_name' => ['required'],
            'email' => ['required', 'email', 'max:254'],
            'password' => ['required', Password::min(6), 'confirmed'],
        ]);

        //create the user
       $user = User::create($validatedAttributes);

       //log in
        FacadesAuth::login($user);

        //redirect
        return redirect('/jobs');
    }
}
