<?php

namespace App\Http\Services\Admin;

use App\Admin;
use App\Utils;
use Illuminate\Support\Facades\Auth;

class AuthService
{
    protected function guard()
    {
        return Auth::guard("admin");
    }

    public function login($params){
        $data = [
            "email" => $params['email'],
            "password" => $params['password']
        ];

        $headers = [
            'Content-Type' => 'application/x-www-form-urlencoded',
        ];
        $response = Utils::send('admins/login', $headers, $data);
        $user = $response->admin;
        $admin = Admin::firstOrNew(['email' => $user->email]);
        $admin->token = $response->token_key;
        $admin->status = $user->status;
        $admin->password = bcrypt($params['password']);
        $admin->save();

        return $admin;
    }


    public function logout(){
        $token = $this->guard()->user()->token;
        $email = $this->guard()->user()->email;
        $headers = [
            'Content-Type' => 'application/x-www-form-urlencoded',
            'Authorization' => $email,
            'Tokenkey' => $token
        ];
        Utils::send('admins/logout', $headers);

        $this->guard()->logout();
    }
}