<?php

namespace App\Http\Controllers\Guest;
use App\Http\Controllers\Controller;
use App\Http\Services\Guest\HomeService;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $homeService;
    public function __construct()
    {
        $this->homeService = new HomeService();
    }
    public function showHomePage(){
        return view('app.home');
    }

    public function showSearchPage(){
        return view('app.search');
    }

    public function showCheckoutPage(){
        return view('app.checkout');
    }

    public function showCartPage(){
        return view('app.cart');
    }
}