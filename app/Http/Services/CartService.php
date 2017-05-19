<?php
/**
 * Created by PhpStorm.
 * User: hungnguyen
 * Date: 18/05/2017
 * Time: 22:35
 */

namespace App\Http\Services;

use App\Units;
use Illuminate\Support\Facades\Log;
use Exception;
use Illuminate\Support\Facades\Session;

class CartService
{
    public function add($params){
        if(!session()->has('cart')){
            Session::put('cart', []);
        }
        $product = $params["item"];
        $cart = Session::get('cart');
        $variantID = $product["variant_id"];
        if(isset($cart[$variantID])){
            $item = $cart[$variantID];
            $item["quantity"] += $product["quantity"];
            $item["total"] += $product["total"];
            $cart[$variantID] = $item;
        }else{
            $cart[$variantID] = $product;
        }
        Session::put('cart', $cart);
        return "success";
    }

    public function update($params){
        $product = $params["item"];
        $cart = Session::get('cart');
        $variantID = $product["variant_id"];
        if(isset($cart[$variantID])){
            $item = $cart[$variantID];
            $item["quantity"] = $product["quantity"];
            $item["total"] = $product["total"];
            $cart[$variantID] = $item;
            Session::put('cart', $cart);
            return "success";
        }
    }

    public function remove($params){
        $product = $params["item"];
        $cart = Session::get('cart');
        $variantID = $product["variant_id"];
        if(isset($cart[$variantID])){
            unset($cart[$variantID]);
            Session::put('cart', $cart);
            return "success";
        }
    }

    public function getCart(){
        return Session::get('cart');
    }

    public function createOrder($params){
        try {
            $headers = [
                'Content-Type' => 'application/json',
            ];
            $data = [
                "customer" => [
                    "fullname" => "Hung Nguyen",
                    "email" => "hungnguyen.vp.1995@gmail.com",
                    "address" => "Ha Noi",
                    "phone_number" => "0973241196"
                ],
                "total_price" => 123456,
                "variants" => [
                    [
                        "variant_id" => 80,
                        "quantity" => 6,
                        "unit_price" => 123456
                    ]
                ]
            ];
            Log::info(json_encode($data));
            $response = Units::sendWithDataJson('orders', $headers, $data, 'POST');
            Log::info(json_encode($response));
            return json_encode($response);
        }catch (Exception $e){
            Log::error($e->getMessage());
            return null;
        }
    }
}