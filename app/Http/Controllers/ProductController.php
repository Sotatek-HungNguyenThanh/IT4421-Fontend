<?php

namespace App\Http\Controllers;

use App\Http\Services\ProductService;
use App\Units;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Consts;
use Exception;
use Illuminate\Support\Facades\Log;

class ProductController extends Controller
{
    protected $productService;
    public function __construct()
    {
        $this->productService = new ProductService();
    }

    public function getListNewProduct(Request $request){
        DB::beginTransaction();
        try{
            $result = $this->productService->getListNewProduct($request->all());
            DB::commit();
            return [
                'status' => Consts::STATUS_OK,
                'message'=> 'success',
                'data' => $result
            ];
        }catch (Exception $e){
            DB::rollback();
            return[
                'status' => Consts::STATUS_ERROR,
                'message' => $e->getMessage(),
                'data' => ''
            ];
        }
    }

    public function getProductByID(Request $request){
        DB::beginTransaction();
        try{
            $result = $this->productService->getProductByID($request->all());
            DB::commit();
            return [
                'status' => Consts::STATUS_OK,
                'message'=> 'success',
                'data' => $result
            ];
        }catch (Exception $e){
            DB::rollback();
            return[
                'status' => Consts::STATUS_ERROR,
                'message' => $e->getMessage(),
                'data' => ''
            ];
        }
    }


    public function search(Request $request){
        DB::beginTransaction();
        try{
            $result = $this->productService->search($request->all());
            DB::commit();
            return [
                'status' => Consts::STATUS_OK,
                'message'=> 'success',
                'data' => $result
            ];
        }catch (Exception $e){
            DB::rollback();
            return[
                'status' => Consts::STATUS_ERROR,
                'message' => $e->getMessage(),
                'data' => ''
            ];
        }
    }

    public function showProductDetailPage(){
        return view('app.product_details');
    }

    public function getProductByUrl(Request $request, $id){
        DB::beginTransaction();
        try{
            $result = $this->productService->getProductByUrl($id);
            DB::commit();
            return [
                'status' => Consts::STATUS_OK,
                'message'=> 'success',
                'data' => $result
            ];
        }catch (Exception $e){
            DB::rollback();
            return[
                'status' => Consts::STATUS_ERROR,
                'message' => $e->getMessage(),
                'data' => ''
            ];
        }
    }

    public function getListProduct(Request $request){
        DB::beginTransaction();
        try{
            $params = $request->input("params");

            $data = [];
            $headers = [
                'Content-Type' => 'application/x-www-form-urlencoded',
            ];
            if(isset($params["key_word"]) && $params["key_word"] != ""){
                $data["key_word"] = $params["key_word"];
            }

            if(isset($params["page_no"]) && $params["page_no"] != ""){
                $data["page_no"] = $params["page_no"];
            }
            if(isset($params["per_page"]) && $params["per_page"] != ""){
                $data["per_page"] = $params["per_page"];
            }

            if(isset($params["category"]) && $params["category"] != ""){
                $data["category"] = $params["category"];
            }

            if(isset($params["sort_name"]) && $params["sort_name"] != ""){
                $data["sort_name"] = $params["sort_name"];
            }
            Log::info($data);
            $response = Units::send('products', $headers, $data, 'GET');
            $result = array("total" => $response->total_products, "products" => $response->products);
            DB::commit();
            return [
                'status' => Consts::STATUS_OK,
                'message'=> 'success',
                'data' => $result
            ];
        }catch (Exception $e){
            DB::rollback();
            return[
                'status' => Consts::STATUS_ERROR,
                'message' => $e->getMessage(),
                'data' => ''
            ];
        }
    }
}
