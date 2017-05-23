<?php

namespace App\Http\Controllers\Admin;

use App\Consts;
use App\Http\Controllers\Controller;
use App\Http\Services\ManageCustomerService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Exception;

class ManageCustomerController extends Controller
{
    protected $manageCustomerService;
    public function __construct()
    {
        $this->manageCustomerService = new ManageCustomerService();
    }
    protected $guard = 'admin';

    public function getListCustomer(Request $request){
        DB::beginTransaction();
        try{
            $result = $this->manageCustomerService->getListCustomer($request->all());
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

    public function deleteCustomer(Request $request){
        DB::beginTransaction();
        try{
            $result = $this->manageCustomerService->deleteCustomer($request->all());
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
