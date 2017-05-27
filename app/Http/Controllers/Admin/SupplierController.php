<?php

namespace App\Http\Controllers\Admin;

use App\Consts;
use App\Facades\API;
use App\Http\Services\SupplierService;
use App\Units;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Validator;
use Exception;

class SupplierController extends Controller
{
    protected $supplierService;
    public function __construct()
    {
        $this->supplierService = new SupplierService();
    }
    protected $guard = 'admin';

    public function showManageSuppliersPage()
    {
        return view('admin.list_suppliers');
    }

    public function showCreateSupplierPage()
    {
        return view('admin.create_supplier');
    }

    public function createSupplier(Request $request){
        $params = json_decode($request->input('data'), true);
        $validator = Validator::make($params, [
            'name' => 'required',
            'address' => 'required',
            'description' => 'required',
            'phone_number' => 'required',
        ]);
        if ($validator->fails()) {
            return [
                'status' => Consts::STATUS_ERROR,
                'message'=> "false",
                'data' =>  $validator->errors()
            ];
        }

        try {
            $response = $this->supplierService->createSupplier($params);

            return [
                'status' => Consts::STATUS_OK,
                'message'=> "success",
                'data' => json_encode($response)
            ];

        }catch (Exception $e){
            Log::error($e->getMessage());

            return [
                'status' => Consts::STATUS_ERROR,
                'message'=> "false",
                'data' => $e->getResponse()->getBody(true)
            ];
        }
    }

    public function getListSuppliers(Request $request){
        try {
            $params = $request->all();
            $response = $this->supplierService->getListSuppliers($params);
            return [
                'status' => Consts::STATUS_OK,
                'message'=> "success",
                'data' => json_encode($response)
            ];
        }catch (Exception $e){
            Log::error($e->getMessage());
            return [
                'status' => Consts::STATUS_ERROR,
                'message'=> "false",
                'data' => $e->getMessage()
            ];
        }
    }

    public function getSupplier(Request $request){
        try {
            $params = $request->all();

            $response = $this->supplierService->getSupplier($params);

            return [
                'status' => Consts::STATUS_OK,
                'message'=> "success",
                'data' => json_encode($response)
            ];

        }catch (Exception $e){
            Log::error($e->getMessage());
            return [
                'status' => Consts::STATUS_ERROR,
                'message'=> "false",
                'data' => $e->getMessage()
            ];
        }
    }

    public function updateSupplier(Request $request){
        $params = json_decode($request->input('data'), true);
        $validator = Validator::make($params, [
            'supplierID' => 'required',
            'name' => 'required',
            'address' => 'required',
            'description' => 'required',
            'phone_number' => 'required',
        ]);
        if ($validator->fails()) {
            return [
                'status' => Consts::STATUS_ERROR,
                'message'=> "false",
                'data' => $validator->errors()
            ];
        }

        try {
            $response = $this->supplierService->updateSupplier($params);

            return [
                'status' => Consts::STATUS_OK,
                'message'=> "success",
                'data' => json_encode($response)
            ];
        }catch (Exception $e){
            Log::error($e->getMessage());
            return [
                'status' => Consts::STATUS_ERROR,
                'message'=> "false",
                'data' => $e->getMessage()
            ];
        }
    }

    public function deleteSupplier(Request $request){
        try {
            $params = $request->all();

            $response = $this->supplierService->deleteSupplier($params);

            return [
                'status' => Consts::STATUS_OK,
                'message'=> "success",
                'data' => $response
            ];

        }catch (Exception $e){
            Log::error($e->getMessage());
            return [
                'status' => Consts::STATUS_ERROR,
                'message'=> "false",
                'data' => $e->getMessage()
            ];
        }
    }

    protected function guard()
    {
        return Auth::guard($this->guard);
    }
}
