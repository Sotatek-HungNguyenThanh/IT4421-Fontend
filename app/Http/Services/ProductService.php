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
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class ProductService
{
    public function createProduct($params){
        Log::info(json_encode($this->formatDataCreateProduct($params)));
        try {
            $token = $this->guard()->user()->token;
            $email = $this->guard()->user()->email;
            $headers = [
                'Content-Type' => 'application/x-www-form-urlencoded',
                'Authorization' => $email,
                'Tokenkey' => $token
            ];
            $data = $this->formatDataCreateProduct($params);

            $response = Units::send('admin/products', $headers, $data, 'POST');

            return $response->suppliers;

        }catch (\Exception $e){
            Log::error($e->getMessage());
            return null;
        }
    }

    public function formatDataCreateProduct($params){
        $fileName = [];
        $title = $params["title"];
        $description = $params["description"];
        $supplier = json_decode($params["supplier"]);
        $listOption = $params["listOption"];
        $variants = json_decode($params["variants"],true);
        $originalPrice = $params["originalPrice"];
        $sellingPrice = $params["sellingPrice"];
        if(isset($params["images"])) {
            $images = $params["images"];

            foreach ($images as $key => $image) {
                if (is_file($image)) {
                    $fileName[$key] = time() . '.' . $image->getClientOriginalName() . '.' . $image->getClientOriginalExtension();
                    Storage::put($fileName[$key], File::get($image));
                }
            }
        }

        return $data = [
            "title" => $title,
            "description" => $description,
            "images" => $fileName ? implode("," , $fileName) : "",
            "supplier_id" => $supplier->id,
            "options" => $listOption,
            "variants_attributes" => [
                [
                    "properties" => $variants,
                    "image_url" => url('/images/pictures_null.png'),
                    "inventory" => 0,
                    "original_price" => 10000,
                    "selling_price" => 10000
                ]
            ]

        ];
    }


    protected function guard()
    {
        return Auth::guard("admin");
    }
}