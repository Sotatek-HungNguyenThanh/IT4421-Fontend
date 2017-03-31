<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index(){
        return view('customer.account_info');
    }

    public function getAddress(){
        return view('customer.account_address');
    }
}
