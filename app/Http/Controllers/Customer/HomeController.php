<?php

namespace App\Http\Controllers\Customer;

use App\Consts;
use App\Http\Controllers\Controller;
use App\Utils;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Facades\API;
use Log;
use App\User;
use Validator;

class HomeController extends Controller
{
    public function index(){
        return view('customer.account');
    }

    public function getAddress(){
        return view('customer.account_address');
    }

    public function showChangePassword(){
        return view('customer.change_password');
    }

}
