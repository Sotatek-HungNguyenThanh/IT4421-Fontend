<?php

namespace App\Http\Services\Customer;
use App\User;
use App\Utils;
use Illuminate\Support\Facades\Auth;

class AccountService
{
    protected function guard()
    {
        return Auth::guard();
    }

    public function getAccountInfo()
    {
        return $this->guard()->user();
    }

    public function updateAccountInfo($params)
    {
        $data = [
            "email" => $this->guard()->user()->email,
            "fullname" => $params['fullname'],
            "address" => $params['address'],
            "phone_number" => $params['phone_number']
        ];
        $token = $this->guard()->user()->token;
        $email = $this->guard()->user()->email;

        $headers = [
            'Content-Type' => 'application/json',
            'Authorization' => $email,
            'Tokenkey' => $token
        ];

        $response = Utils::sendWithDataJson('users/current_user', $headers, $data, 'PATCH');

        $user = User::firstOrNew(['email' => $data['email']]);
        $user->fullname = $response->customer->fullname;
        $user->address = $response->customer->address;
        $user->phone_number = $response->customer->phone_number;
        $user->status = $response->customer->status;
        $user->save();

        return $user;
    }

    public function changePassword($params)
    {
        $data = [
            "old_password" => $params['oldPassword'],
            "new_password" => $params['newPassword'],
        ];
        $token = Auth::user()->token;
        $email = Auth::user()->email;

        $headers = [
            'Content-Type' => 'application/json',
            'Authorization' => $email,
            'Tokenkey' => $token
        ];

        Utils::sendWithDataJson('users/current_user/change_password', $headers, $data, 'PATCH');

        $user = Auth::user();
        $user->password = bcrypt($params['newPassword']);
        $user->save();

        return $user;
    }
}