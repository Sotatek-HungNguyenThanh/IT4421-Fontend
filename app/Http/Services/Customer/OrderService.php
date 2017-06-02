<?php
/**
 * Created by PhpStorm.
 * User: hungnguyen
 * Date: 28/05/2017
 * Time: 03:58
 */

namespace App\Http\Services\Customer;


use App\Utils;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class OrderService
{
    protected function guard()
    {
        return Auth::guard();
    }

    public function getListOrder($params){

        $token = $this->guard()->user()->token;
        $email = $this->guard()->user()->email;

        $headers = [
            'Content-Type' => 'application/json',
            'Authorization' => $email,
            'Tokenkey' => $token
        ];
        $data = [];
        if(isset($params["daterange"]) && $params["daterange"] != ""){
            $data["daterange"] = $params["daterange"];
        }

        if (isset($params["page_no"]) && $params["per_page"]){
            $data["page_no"] = intval($params["page_no"]);
            $data["per_page"] = intval($params["per_page"]);
        }
        Log::info($data);
        $response = Utils::sendWithDataJson('orders', $headers, $data, 'GET');

        return array("total" => $response->total_orders, "orders" => $response->orders);
    }
}