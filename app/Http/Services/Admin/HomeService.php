<?php
/**
 * Created by PhpStorm.
 * User: hungnguyen
 * Date: 02/06/2017
 * Time: 02:15
 */

namespace App\Http\Services\Admin;


use App\Utils;
use Illuminate\Support\Facades\Auth;

class HomeService
{
    public function getDataDashBoard(){
        $token = $this->guard()->user()->token;
        $email = $this->guard()->user()->email;
        $headers = [
            'Content-Type' => 'application/x-www-form-urlencoded',
            'Authorization' => $email,
            'Tokenkey' => $token
        ];
        $response = Utils::send('admins/dashboard', $headers, null, "GET");
        return json_encode($response);
    }

    protected function guard(){
        return Auth::guard("admin");
    }
}