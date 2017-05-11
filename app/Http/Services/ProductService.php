<?php
/**
 * Created by PhpStorm.
 * User: hungnguyen
 * Date: 10/05/2017
 * Time: 10:27
 */

namespace App\Http\Services;


use App\Consts;
use App\Units;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class ProductService
{
    public function createProduct($params)
    {
        try {
            $token = $this->guard()->user()->token;
            $email = $this->guard()->user()->email;
            $headers = [
                'Content-Type' => 'application/json',
                'Authorization' => $email,
                'Tokenkey' => $token
            ];
            $data = $this->formatDataCreateProduct($params);

            $response = Units::sendWithDataJson('admins/products', $headers, $data, 'POST');

            return json_encode($response);

        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return null;
        }
    }

    public function formatDataCreateProduct($params)
    {
        $fileName = [];
        $title = $params["title"];
        $description = $params["description"];
        $supplier = json_decode($params["supplier"]);
        $listOption = $params["listOption"];
        $variants = json_decode($params["variants"], true);
        $originalPrice = $params["originalPrice"];
        $sellingPrice = $params["sellingPrice"];
        if (isset($params["images"])) {
            $images = $params["images"];

            foreach ($images as $key => $image) {
                if (is_file($image)) {
                    $fileName[$key] = url('/storage/' . time() . '.' . $image->getClientOriginalName() . '.' . $image->getClientOriginalExtension());
                    Storage::put($fileName[$key], File::get($image));
                }
            }
        }
        $variants_attributes = [];
        foreach ($variants as $variant) {
            $variants_attributes[] = [
                "properties" => $variant,
                "image_url" => url('/images/pictures_null.png'),
                "inventory" => 1,
                "original_price" => $originalPrice,
                "selling_price" => $sellingPrice
            ];
        }
        return $data = [
            "title" => $title,
            "description" => $description,
            "images" => $fileName ? implode("," , $fileName) : "",
            "supplier_id" => $supplier->id,
            "options" => $listOption,
            "variants_attributes" => $variants_attributes
        ];
    }


    protected function guard()
    {
        return Auth::guard("admin");
    }

    public function getListProduct($params){

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

        $response = Units::send('admins/products', $headers, $data, 'GET');
        return array("total" => $response->total_products, "data" => $response->products);
    }

    public function deleteProduct($params){
        try {
            $productID = $params['productID'];
            $token = $this->guard()->user()->token;
            $email = $this->guard()->user()->email;
            $headers = [
                'Content-Type' => 'application/x-www-form-urlencoded',
                'Authorization' => $email,
                'Tokenkey' => $token
            ];
            $response = Units::send('admins/products/' . $productID, $headers, null, 'DELETE');
            return array('status' => $response->success, 'message' => $response->message);

        }catch (\Exception $e){
            Log::error($e->getMessage());
            return null;
        }
    }

    public function getProduct($params){
        try {
            $productID = $params['productID'];
            $token = $this->guard()->user()->token;
            $email = $this->guard()->user()->email;
            $headers = [
                'Content-Type' => 'application/x-www-form-urlencoded',
                'Authorization' => $email,
                'Tokenkey' => $token
            ];
            $response = Units::send('admins/products/' . $productID, $headers, null, 'GET');
            return json_encode($response);
        }catch (\Exception $e){
            Log::error($e->getMessage());
            return null;
        }
    }
}