<?php

namespace App\Http\Controllers;

//use App\Models\User as ModelsUser;
use Illuminate\Http\Request;
//use Illuminate\Http\Models\User;
use Illuminate\Validation\Rules\Password;
use Illuminate\Auth;
//use Illuminate\Auth\Authenticatable;
//use Illuminate\Support\Facades\Auth as FacadesAuth;

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
        //$user = ModelsUser::create($validatedAttributes);
        dd($validatedAttributes);
        //log in
       // Authenticatable ::login($user);
        //redirect
        return redirect('/jobs');
    }
}
