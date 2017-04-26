<?php

namespace App\Http\Controllers\Admin;

use App\Facades\API;
use App\Units;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Validator;

class SupplierController extends Controller
{
    protected $guard = 'admin';

    public function showManageSuppliersPage()
    {
        $listSuppliers = $this->getListSuppliers();
        return view('admin.manage_suppliers')->with('listSuppliers', $listSuppliers);
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

        $data = [
            "name" => $params['name'],
            "description" => $params['description'],
            "address" => $params['address'],
            "phone_number" => $params['phone_number'],
        ];

        try {
            $token = $this->guard()->user()->token;
            $email = $this->guard()->user()->email;
            $headers = [
                'Content-Type' => 'application/x-www-form-urlencoded',
                'Authorization' => $email,
                'Tokenkey' => $token
            ];
            $response = Units::send('admins/suppliers', $headers, $data);
            return array('status' => $response->success, 'message' => $response->message);
        }catch (\Exception $e){
            Log::error($e->getMessage());
            $messageError = json_decode($e->getResponse()->getBody(true));
            return array('status' => 'false', 'message' => $messageError);
        }
    }

    public function getListSuppliers(){
        try {
            $token = $this->guard()->user()->token;
            $email = $this->guard()->user()->email;
            $headers = [
                'Content-Type' => 'application/x-www-form-urlencoded',
                'Authorization' => $email,
                'Tokenkey' => $token
            ];
            $response = Units::send('admins/suppliers', $headers, null, 'GET');
            Log::info(json_encode($response));
            return $response->suppliers;
        }catch (\Exception $e){
            Log::error($e->getMessage());
            return null;
        }
    }

    public function getSupplier(Request $request){
        try {
            $supplierID = $request->supplierID;
            $token = $this->guard()->user()->token;
            $email = $this->guard()->user()->email;
            $headers = [
                'Content-Type' => 'application/x-www-form-urlencoded',
                'Authorization' => $email,
                'Tokenkey' => $token
            ];
            $response = Units::send('admins/suppliers/' . $supplierID, $headers, null, 'GET');
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

        $data = [
            "name" => $params['name'],
            "description" => $params['description'],
            "address" => $params['address'],
            "phone_number" => $params['phone_number'],
        ];
        try {
            $supplierID = $params['supplierID'];
            $token = $this->guard()->user()->token;
            $email = $this->guard()->user()->email;
            $headers = [
                'Content-Type' => 'application/x-www-form-urlencoded',
                'Authorization' => $email,
                'Tokenkey' => $token
            ];
            $response = Units::send('admins/suppliers/' . $params['supplierID'], $headers, $data, 'PATCH');
            return array('status' => $response->success, 'message' => $response->message);
        }catch (\Exception $e){
            Log::error($e->getMessage());
            return null;
        }
    }

    public function deleteSupplier(Request $request){
        try {
            $supplierID = $request->supplierID;
            $token = $this->guard()->user()->token;
            $email = $this->guard()->user()->email;
            $headers = [
                'Content-Type' => 'application/x-www-form-urlencoded',
                'Authorization' => $email,
                'Tokenkey' => $token
            ];
            $response = Units::send('admins/suppliers/' . $supplierID, $headers, null, 'DELETE');
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
