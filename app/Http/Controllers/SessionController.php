<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        // Logic for storing user session (login)
        dd('your log  details would show here');
    }
    public function destory()
    {

        Auth::logout();

        return redirect('/');
    }

}
