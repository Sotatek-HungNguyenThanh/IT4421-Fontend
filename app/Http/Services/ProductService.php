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
use Exception;

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

        } catch (Exception $e) {
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
                    $urlFile =  time() . '.' . $image->getClientOriginalName();
                    $fileName[$key] = url('storage/' . $urlFile);
                    Storage::disk('public')->put($urlFile, File::get($image));
                }
            }
        }
        $variants_attributes = [];
        foreach ($variants as $variant) {
            $variants_attributes[] = [
                "properties" => $variant,
                "image_url" => $fileName[0],
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
        Log::info(json_encode($response));
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

        }catch (Exception $e){
            Log::error($e->getMessage());
            return null;
        }
    }

    public function getProduct($params, $productID){
        try {
            $token = $this->guard()->user()->token;
            $email = $this->guard()->user()->email;
            $headers = [
                'Content-Type' => 'application/x-www-form-urlencoded',
                'Authorization' => $email,
                'Tokenkey' => $token
            ];
            $response = Units::send('admins/products/' . $productID, $headers, null, 'GET');
            Log::info(json_encode($response));
            return json_encode($response);
        }catch (Exception $e){
            Log::error($e->getMessage());
            return null;
        }
    }

    public function removeVariant($params){
        try {
            $variant = $params["variant"];
            $token = $this->guard()->user()->token;
            $email = $this->guard()->user()->email;
            $headers = [
                'Content-Type' => 'application/x-www-form-urlencoded',
                'Authorization' => $email,
                'Tokenkey' => $token
            ];
            $response = Units::send('admins/products/' . $variant["product_id"] . '/variants/' . $variant["id"], $headers, null, 'DELETE');
            Log::info(json_encode($response));
            return json_encode($response);
        }catch (Exception $e){
            Log::error($e->getMessage());
            return null;
        }
    }

    public function updateProduct($params){
        try {
            $token = $this->guard()->user()->token;
            $email = $this->guard()->user()->email;
            $headers = [
                'Content-Type' => 'application/json',
                'Authorization' => $email,
                'Tokenkey' => $token
            ];
            $data = $this->formatDataUpdateProduct($params);

            $response = Units::sendWithDataJson('admins/products/' . $data["id"], $headers, $data, 'PATCH');

            return json_encode($response);

        } catch (Exception $e) {
            Log::error($e->getMessage());
            return null;
        }
    }

    public function formatDataUpdateProduct($params)
    {
        $fileName = [];
        $fileNewVariants = [];
        $id = $params["id"];
        $title = $params["title"];
        $description = $params["description"];
        $supplier = json_decode($params["supplier"]);
        $variants = json_decode($params["variants"], true);
        if (isset($params["images"])) {
            $images = $params["images"];

            foreach ($images as $key => $image) {
                if (is_file($image)) {
                    $urlFile =  time() . '.' . $image->getClientOriginalName();
                    $fileName[$key] = url('storage/' . $urlFile);
                    Storage::disk('public')->put($urlFile, File::get($image));
                }
            }
        }

        if (isset($params["imagesNewVariants"])) {
            $imagesNewVariants = $params["imagesNewVariants"];

            foreach ($imagesNewVariants as $key => $image) {
                if (is_file($image)) {
                    $urlFile =  time() . '.' . $image->getClientOriginalName();
                    $fileNewVariants[$key] = url('storage/' . $urlFile);
                    Storage::disk('public')->put($urlFile, File::get($image));
                }
            }
        }

        $variants_attributes = [];
        foreach ($variants as $variant) {
            $variants_attributes[] = [
                "id" => $variant["id"],
                "image_url" => isset($fileNewVariants[$variant["id"]]) ? $fileNewVariants[$variant["id"]] : $variant["image_url"],
                "inventory" => $variant["inventory"],
                "original_price" => $variant["original_price"],
                "selling_price" => $variant["selling_price"]
            ];
        }
        $imageOld = $params["images_old"] ? explode("," , $params["images_old"] ): [];
        $totalImage = array_merge($imageOld, $fileName);
        return $data = [
            "id" => $id,
            "title" => $title,
            "description" => $description,
            "images" => $totalImage ? implode("," , $totalImage) : "",
            "supplier_id" => $supplier->id,
            "variants_attributes" => $variants_attributes
        ];
    }

    function getListNewProduct($params){
        try {
            $headers = [
                'Content-Type' => 'application/x-www-form-urlencoded',
            ];
            $data = [
                "page_no" => 1,
                "per_page" => $params["quantity"],
            ];
            $response = Units::send('products', $headers, $data, 'GET');
            Log::info(json_encode($response));
            return $response->products;
        }catch (Exception $e){
            Log::error($e->getMessage());
            return null;
        }
    }

    function getProductByID($params){
        try {
            $headers = [
                'Content-Type' => 'application/x-www-form-urlencoded',
            ];
            $response = Units::send('products/' . $params["id"], $headers, null, 'GET');
            Log::info(json_encode($response));
            return ["product" => $response->product, "variants" =>  $response->variants];
        }catch (Exception $e){
            Log::error($e->getMessage());
            return null;
        }
    }
}