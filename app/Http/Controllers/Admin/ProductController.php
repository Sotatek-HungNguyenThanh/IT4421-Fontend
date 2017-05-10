<?php

namespace App\Http\Controllers\Admin;

use App\Consts;
use App\Http\Services\ProductService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Exception;

class ProductController extends Controller
{
    protected $productService;
    public function __construct()
    {
        $this->productService = new ProductService();
    }

    public function showManageProductsPage(){
    	return view('admin.manage_products');
    }

    public function showCreateProductPage(){
        return view('admin.add_product');
    }

    public function createProduct(Request $request){
        DB::beginTransaction();
        try{
            $result = $this->productService->createProduct($request->all());
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

    public function getListSupplier(){
        DB::beginTransaction();
        try{
            $result = $this->productService->getListSupplier();
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
