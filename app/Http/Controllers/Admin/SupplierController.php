<?php

namespace App\Http\Controllers\Admin;

use App\Facades\API;
use App\Units;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class SupplierController extends Controller
{
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
        $params = $request->all();
        $validator = Validator::make($params, [
            'name' => 'required',
            'address' => 'required',
            'description' => 'description',
            'phone_number' => 'required'
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
            return $response->suppliers;
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
