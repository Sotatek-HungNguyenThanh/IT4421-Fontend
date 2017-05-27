<?php
/**
 * Created by PhpStorm.
 * User: hungnguyen
 * Date: 28/05/2017
 * Time: 01:37
 */

namespace App\Http\Controllers\Admin;
use App\Consts;
use App\Http\Controllers\Controller;
use App\Http\Services\Admin\OrderService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Exception;

class OrderController extends Controller
{
    protected $orderService;
    public function __construct()
    {
        $this->orderService = new OrderService();
    }

    public function showListOrderPage(){
        return view('admin.list_order');
    }

    public function getAllOrder(Request $request){
        DB::beginTransaction();
        try{
            $result = $this->orderService->getAllOrder($request->all());
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

    public function updateStatusOrder(Request $request){
        DB::beginTransaction();
        try{
            $result = $this->orderService->updateStatusOrder($request->all());
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