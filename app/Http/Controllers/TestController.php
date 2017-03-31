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
        $headers = API::buildHeaders();
        $response = API::send('login', $headers, $params);
        return $response;
    }

    public function logout(){
        $headers = API::buildHeaders("test213@gmail.com", '6f19ba042bccce04478e8dc72f075d2a');
        $response = API::send('logout', $headers);
        return $response;
    }
}
