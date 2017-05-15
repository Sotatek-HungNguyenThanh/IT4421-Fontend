<?php

namespace App\Http\Controllers\Admin;

use App\Facades\API;
use App\Http\Services\SupplierService;
use App\Units;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Validator;

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
        return view('admin.manage_suppliers');
    }

    public function showCreateSupplierPage()
    {
        return view('admin.add_suppliers');
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
            return array('status' => 'false', 'message' => $validator->errors());
        }

        try {
            $response = $this->supplierService->createSupplier($params);

            return array('status' => $response->success, 'message' => $response->message);

        }catch (\Exception $e){
            Log::error($e->getMessage());

            $messageError = json_decode($e->getResponse()->getBody(true));

            return array('status' => 'false', 'message' => $messageError);
        }
    }

    public function getListSuppliers(Request $request){
        try {
            $params = $request->all();
            $response = $this->supplierService->getListSuppliers($params);
            return array("total_suppliers" => $response->total_suppliers, "data" => $response->suppliers);
        }catch (\Exception $e){
            Log::error($e->getMessage());
            return null;
        }
    }

    public function getSupplier(Request $request){
        try {
            $params = $request->all();

            $response = $this->supplierService->getSupplier($params);

            return json_encode($response->supplier);
        }catch (\Exception $e){
            Log::error($e->getMessage());
            return null;
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
            return array('status' => 'false', 'message' => $validator->errors());
        }


        try {
            $response = $this->supplierService->updateSupplier($params);
            return array('status' => $response->success, 'message' => $response->message);
        }catch (\Exception $e){
            Log::error($e->getMessage());
            return null;
        }
    }

    public function deleteSupplier(Request $request){
        try {
            $params = $request->all();

            $response = $this->supplierService->deleteSupplier($params);

            return array('status' => $response->success, 'message' => $response->message);

        }catch (\Exception $e){
            Log::error($e->getMessage());
            return null;
        }
    }

    protected function guard()
    {
        return Auth::guard($this->guard);
    }
}
