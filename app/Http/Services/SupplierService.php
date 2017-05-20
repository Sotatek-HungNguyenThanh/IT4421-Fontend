<?php
/**
 * Created by PhpStorm.
 * User: hungnguyen
 * Date: 10/05/2017
 * Time: 10:27
 */

namespace App\Http\Services;


use App\Units;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class SupplierService
{
    protected function guard()
    {
        return Auth::guard('admin');
    }

    public function createSupplier($params){
        $data = [
            "name" => $params['name'],
            "description" => $params['description'],
            "address" => $params['address'],
            "phone_number" => $params['phone_number'],
        ];

        $token = $this->guard()->user()->token;
        $email = $this->guard()->user()->email;
        $headers = [
            'Content-Type' => 'application/json',
            'Authorization' => $email,
            'Tokenkey' => $token
        ];
        $response = Units::sendWithDataJson('admins/suppliers', $headers, $data);

        return $response->supplier;
    }

    public function getListSuppliers($params){
        $token = $this->guard()->user()->token;
        $email = $this->guard()->user()->email;
        $headers = [
            'Content-Type' => 'application/x-www-form-urlencoded',
            'Authorization' => $email,
            'Tokenkey' => $token
        ];
        if(isset($params["key_word"]) && $params["key_word"] != ""){
            $data = [
                "key_word" => $params["key_word"],
            ];
        }else{
            $data = [
                "page_no" => $params["page_no"],
                "per_page" => $params["per_page"],
            ];
        }
        Log::info($data);
        $response = Units::send('admins/suppliers', $headers, $data, 'GET');
        Log::info(json_encode($response));
        return ["total" => $response->total_suppliers, "suppliers" => $response->suppliers];
    }

    public function getSupplier($params){
        $token = $this->guard()->user()->token;
        $email = $this->guard()->user()->email;
        $headers = [
            'Content-Type' => 'application/json',
            'Authorization' => $email,
            'Tokenkey' => $token
        ];
        $response = Units::sendWithDataJson('admins/suppliers/' . $params["supplierID"], $headers, null, 'GET');

        return $response->supplier;
    }

    public function updateSupplier($params){
        $data = [
            "name" => $params['name'],
            "description" => $params['description'],
            "address" => $params['address'],
            "phone_number" => $params['phone_number'],
        ];

        $token = $this->guard()->user()->token;
        $email = $this->guard()->user()->email;
        $headers = [
            'Content-Type' => 'application/json',
            'Authorization' => $email,
            'Tokenkey' => $token
        ];
        $response = Units::sendWithDataJson('admins/suppliers/' . $params['supplierID'], $headers, $data, 'PATCH');

        return $response->supplier;
    }

    public function deleteSupplier($params){
        $token = $this->guard()->user()->token;
        $email = $this->guard()->user()->email;
        $headers = [
            'Content-Type' => 'application/json',
            'Authorization' => $email,
            'Tokenkey' => $token
        ];
        $response = Units::sendWithDataJson('admins/suppliers/' . $params["supplierID"], $headers, null, 'DELETE');
        return $response->message;
    }
}