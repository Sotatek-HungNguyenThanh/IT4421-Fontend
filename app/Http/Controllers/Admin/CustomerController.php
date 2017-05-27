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
use App\Http\Services\Admin\CustomerService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Exception;


class CustomerController extends Controller
{
    protected $guard = 'admin';
    protected $customerService;

    public function __construct()
    {
        $this->customerService = new CustomerService();
    }

    public function showListCustomerPage(){
        return view("admin.list_customer");
    }

    public function getListCustomer(Request $request){
        DB::beginTransaction();
        try{
            $result = $this->customerService->getListCustomer($request->all());
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
            $result = $this->customerService->deleteCustomer($request->all());
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