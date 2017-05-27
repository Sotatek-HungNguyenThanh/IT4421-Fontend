<?php

namespace App\Http\Services\Guest;

use App\Utils;
use Illuminate\Support\Facades\Auth;
use Exception;
use Illuminate\Support\Facades\Log;

class ProductService
{
    protected function guard()
    {
        return Auth::guard();
    }

    function getListNewProduct($params){
        try {
            $headers = [
                'Content-Type' => 'application/json',
            ];
            $data = [
                "page_no" => 1,
                "per_page" => $params["quantity"],
            ];
            $response = Utils::sendWithDataJson('products', $headers, $data, 'GET');
            return $response->products;
        }catch (Exception $e){
            Log::error($e->getMessage());
            return null;
        }
    }

    function getProductByID($params){
        try {
            $headers = [
                'Content-Type' => 'application/json',
            ];
            $response = Utils::sendWithDataJson('products/' . $params["id"], $headers, null, 'GET');
            return ["product" => $response->product, "variants" =>  $response->variants];
        }catch (Exception $e){
            Log::error($e->getMessage());
            return null;
        }
    }

    function search($param){
        $headers = [
            'Content-Type' => 'application/x-www-form-urlencoded',
        ];
        $data = [
            "key_word" => $param["query"]
        ];

        $response = Utils::send('products', $headers, $data, 'GET');
        return ["query" => $param["query"], "products" => $response->products];
    }

    function getProductByUrl($id){
        try {
            $headers = [
                'Content-Type' => 'application/json',
            ];
            $response = Utils::sendWithDataJson('products/' . $id, $headers, null, 'GET');
            return ["product" => $response->product, "variants" =>  $response->variants];
        }catch (Exception $e){
            Log::error($e->getMessage());
            return null;
        }
    }

}