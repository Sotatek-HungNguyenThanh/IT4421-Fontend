<?php

namespace App\Http\Controllers;

use App\Facades\API;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function test(){
        $params = [
            "fullname" => "hungnguyen",
            "email" => "test213@gmail.com",
            "password" => "hung123456",
            "address" => "ha noi",
            "phone_number" => "01224343543"
        ];
        $response = API::send('users', $params);
        return $response;
    }

    public function login(){
        $token = '8c3ff71a28bb599d831fc7efda8c2c36';
        $params = [
            "email" => "test213@gmail.com",
            "password" => "hung123456"
        ];
        $response = API::send('login', $params);
        return $response;
    }

    public function logout(){
        $response = API::send('logout', null, 'POST', "test213@gmail.com", '8c3ff71a28bb599d831fc7efda8c2c36');
        return $response;
    }
}
