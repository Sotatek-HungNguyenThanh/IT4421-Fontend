<?php

namespace App\Http\Controllers\Admin;

use App\Consts;
use App\Http\Controllers\Controller;
use App\Http\Services\ManageOrderService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Exception;

class ManageOrderController extends Controller
{
    protected $manageOrderService;
    public function __construct()
    {
        $this->manageOrderService = new ManageOrderService();
    }

    public function getAllOrder(Request $request){
        DB::beginTransaction();
        try{
            $result = $this->manageOrderService->getAllOrder($request->all());
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
            $result = $this->manageOrderService->updateStatusOrder($request->all());
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
