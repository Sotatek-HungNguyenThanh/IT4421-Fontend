<?php

namespace App\Http\Services\Customer;

use App\User;
use App\Utils;
use Illuminate\Support\Facades\Auth;

class AuthService
{
    protected function guard()
    {
        return Auth::guard();
    }

    public function register($params){
        $data = [
            "fullname" => $params['fullname'],
            "email" => $params['email'],
            "password" => $params['password'],
            "address" => $params['address'],
            "phone_number" => $params['phone_number']
        ];

        $headers = [
            'Content-Type' => 'application/json',
        ];
        Utils::sendWithDataJson('users', $headers, $data);
        $this->create($data);
    }

    protected function create(array $params){
        $user =  new User();
        $user->fullname = $params['fullname'];
        $user->email = $params['email'];
        $user->password = bcrypt($params['password']);
        $user->address = ($params['address']);
        $user->phone_number = ($params['phone_number']);
        $user->status = 'active';
        $user->save();
        return $user;
    }

    public function login($params){
        $data = [
            "email" => $params['email'],
            "password" => $params['password']
        ];

        $headers = $headers = [
            'Content-Type' => 'application/json',
        ];
        $response = Utils::sendWithDataJson('login', $headers, $data);
        $user = $this->updateAccountInfo($params, $response->token_key);
        Auth::login($user);
    }

    private function updateAccountInfo($params, $token)
    {
        $headers = [
            'Content-Type' => 'application/json',
            'Authorization' => $params['email'],
            'Tokenkey' => $token
        ];
        $response = Utils::sendWithDataJson('users/current_user', $headers, null, 'GET');
        $user = User::firstOrNew(['email' => $params['email']]);
        $user->password = bcrypt($params['password']);
        $user->fullname = $response->customer->fullname;
        $user->address = $response->customer->address;
        $user->phone_number = $response->customer->phone_number;
        $user->status = $response->customer->status;
        $user->token = $token;
        $user->save();
        return $user;
    }

    public function logout(){
        $token = $this->guard()->user()->token;
        $email = $this->guard()->user()->email;
        $headers = [
            'Content-Type' => 'application/json',
            'Authorization' => $email,
            'Tokenkey' => $token
        ];
        Utils::sendWithDataJson('logout', $headers);
        Auth::logout();
    }
}