<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('app.home');
    }

    public function preview()
    {
        return view('app.preview');
    }

    public function delivery()
    {
        return view('app.delivery');
    }

    public function about()
    {
        return view('app.about');
    }

    public function contact()
    {
        return view('app.contact');
    }

    public function news()
    {
        return view('app.news');
    }
}
