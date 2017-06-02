<?php
/**
 * Created by PhpStorm.
 * User: hungnguyen
 * Date: 28/05/2017
 * Time: 03:58
 */

namespace App\Http\Controllers\Customer;


use App\Consts;
use App\Http\Services\Customer\OrderService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Exception;

class OrderController
{
    protected $orderService;
    public function __construct()
    {
        $this->orderService = new OrderService();
    }

    public function showHistoryTransactionPage(){
        return view('customer.history_order');
    }

    public function getListOrder(Request $request)
    {
        DB::beginTransaction();
        try{
            $result = $this->orderService->getListOrder($request->all());

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