<?php
/**
 * Created by PhpStorm.
 * User: hungnguyen
 * Date: 28/05/2017
 * Time: 03:08
 */

namespace App\Http\Services\Admin;


use App\Utils;
use Illuminate\Support\Facades\Auth;
use Exception;
use Illuminate\Support\Facades\Log;

class CustomerService
{
    protected function guard()
    {
        return Auth::guard("admin");
    }

    public function getListCustomer($params){
        $token = $this->guard()->user()->token;
        $email = $this->guard()->user()->email;
        $headers = [
            'Content-Type' => 'application/x-www-form-urlencoded',
            'Authorization' => $email,
            'Tokenkey' => $token
        ];
        if(isset($params["key_word"]) && $params["key_word"] != ""){
            $data = [
                "name" => $params["key_word"],
            ];
        }else{
            $data = [
                "page_no" => $params["page_no"],
                "per_page" => $params["per_page"],
            ];
        }

        $response = Utils::send('admins/customers', $headers, $data, 'GET');
        return array("total" => $response->total_customers, "customers" => $response->customers);
    }

    public function deleteCustomer($params){
        try {
            $customerID = $params['customerID'];
            $token = $this->guard()->user()->token;
            $email = $this->guard()->user()->email;
            $headers = [
                'Content-Type' => 'application/json',
                'Authorization' => $email,
                'Tokenkey' => $token
            ];
            $response = Utils::sendWithDataJson('admins/customers' . $customerID, $headers, null, 'DELETE');
            return $response->message;

        }catch (Exception $e){
            Log::error($e->getMessage());
            return null;
        }
    }
}