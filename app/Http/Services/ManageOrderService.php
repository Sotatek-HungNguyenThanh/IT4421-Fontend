<?php
/**
 * Created by PhpStorm.
 * User: hungnguyen
 * Date: 24/05/2017
 * Time: 02:20
 */

namespace App\Http\Services;

use App\Units;
use Illuminate\Support\Facades\Auth;
use Exception;
use Illuminate\Support\Facades\Log;

class ManageOrderService
{
    protected function guard($guard = null)
    {
        return Auth::guard($guard);
    }

    public function getAllOrder($params){
        $token = $this->guard("admin")->user()->token;
        $email = $this->guard("admin")->user()->email;
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
            $data["customer_id"] = $params["customer_id"];
        }

        if (isset($params["page_no"]) && $params["per_page"]){
            $data["page_no"] = $params["page_no"];
            $data["per_page"] = $params["per_page"];
        }
        Log::info($data);
        $response = Units::send('admins/orders', $headers, $data, 'GET');
        return array("total" => $response->total_orders, "orders" => $response->orders);
    }

    public function updateStatusOrder($params){
        try {
            $id = $params['id'];
            $status = $params['status'];
            $token = $this->guard("admin")->user()->token;
            $email = $this->guard("admin")->user()->email;
            $headers = [
                'Content-Type' => 'application/json',
                'Authorization' => $email,
                'Tokenkey' => $token
            ];

            $data = [
                "status" => $status
            ];

            $response = Units::sendWithDataJson('admins/orders/' . $id, $headers, $data, 'PATCH');
            return $response->message;

        }catch (Exception $e){
            Log::error($e->getMessage());
            return null;
        }
    }
}