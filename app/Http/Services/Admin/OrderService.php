<?php

namespace App\Http\Services\Admin;

use App\Utils;
use Illuminate\Support\Facades\Auth;
use Exception;
use Illuminate\Support\Facades\Log;

class OrderService
{
    protected function guard()
    {
        return Auth::guard("admin");
    }

    public function getAllOrder($params){
        $token = $this->guard()->user()->token;
        $email = $this->guard()->user()->email;
        $headers = [
            'Content-Type' => 'application/x-www-form-urlencoded',
            'Authorization' => $email,
            'Tokenkey' => $token
        ];
        $data = [];
        if(isset($params["daterange"]) && $params["daterange"] != ""){
            $data["daterange"] = $params["daterange"];
        }

        if(isset($params["customer_id"]) && $params["customer_id"] != 0){
            $data["customer_id"] = intval($params["customer_id"]);
        }

        if (isset($params["page_no"]) && $params["per_page"]){
            $data["page_no"] = intval($params["page_no"]);
            $data["per_page"] = intval($params["per_page"]);
        }
        $response = Utils::send('admins/orders', $headers, $data, 'GET');
        return array("total" => $response->total_orders, "orders" => $response->orders);
    }

    public function updateStatusOrder($params){
        try {
            $id = $params['id'];
            $status = $params['status'];
            $token = $this->guard()->user()->token;
            $email = $this->guard()->user()->email;
            $headers = [
                'Content-Type' => 'application/json',
                'Authorization' => $email,
                'Tokenkey' => $token
            ];

            $data = [
                "status" => $status
            ];

            $response = Utils::sendWithDataJson('admins/orders/' . $id, $headers, $data, 'PATCH');
            return $response->message;

        }catch (Exception $e){
            Log::error($e->getMessage());
            return null;
        }
    }
}