<?php

namespace App\Http\Controllers;

use App\Http\Services\ProductService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Consts;
use Exception;

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
}
