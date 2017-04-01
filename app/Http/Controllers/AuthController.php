<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function register()
    {
        return view('auth.register');
    }
    public function feedback()
    {
    	return view('auth.feedback');
    }
    public function account()
    {
        return view('auth.account');
    }
}
