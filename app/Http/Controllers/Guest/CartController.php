<?php

namespace App\Http\Controllers\Guest;
use App\Consts;
use App\Http\Controllers\Controller;
use App\Http\Services\Guest\CartService;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{

    protected $cartService;
    public function __construct()
    {
        $this->cartService = new CartService();
    }

    public function add(Request $request){
        DB::beginTransaction();
        try{
            $result = $this->cartService->add($request->all());
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

    public function getCart(Request $request){
        DB::beginTransaction();
        try{
            $result = $this->cartService->getCart($request->all());
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

    public function createOrder(Request $request){
        DB::beginTransaction();
        try{
            $result = $this->cartService->createOrder($request->all());
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

    public function update(Request $request){
        DB::beginTransaction();
        try{
            $result = $this->cartService->update($request->all());
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

    public function remove(Request $request){
        DB::beginTransaction();
        try{
            $result = $this->cartService->remove($request->all());
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