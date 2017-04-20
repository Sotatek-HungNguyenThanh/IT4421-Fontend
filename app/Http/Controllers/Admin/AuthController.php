<?php

namespace App\Http\Controllers\Admin;

use App\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;
use API;
use Log;

class AuthController extends Controller
{
    protected $guard = 'admin';

    public function showLogin()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $params = $request->all();
        $validator = $this->validatorLogin($params);

        if ($validator->fails()) {
            return redirect('login')
                ->withErrors($validator)
                ->withInput();
        }

        $data = [
            "email" => $params['email'],
            "password" => $params['password']
        ];
        try {
            $headers = API::buildHeaders();
            $response = API::send('login', $headers, $data);
            $user = $this->updateAccountInfo($params, $response->token_key);
            Auth::guard()->login($user);
            return "admin login";
        }catch (\Exception $e){
            Log::error($e->getMessage());
            $messageError = \GuzzleHttp\json_decode($e->getResponse()->getBody(true));
            $validator->errors()->add('message', $messageError->message);
            return redirect('admin/login')
                ->withErrors($validator)
                ->withInput();
        }
    }

    public function logout()
    {
        try {
            $token = Auth::user()->token;
            $email = Auth::user()->email;
            $headers = API::buildHeaders($email, $token);
            API::send('logout', $headers);
            Auth::logout();
            return redirect('/');
        }catch (\Exception $e){
            Log::error($e->getMessage());
        }
    }

    private function validatorLogin($params)
    {
        return Validator::make($params, [
            'email' => 'required | email',
            'password' => 'required | min: 8'
        ]);
    }

    private function updateAccountInfo($params, $token)
    {
        $headers = API::buildHeaders($params['email'], $token);
        $response = API::send('users/current_user', $headers, null, 'GET');
        $admin = Admin::firstOrNew(['email' => $params['email']]);
        $admin->password = bcrypt($params['password']);
        $admin->fullname = $response->customer->fullname;
        $admin->address = $response->customer->address;
        $admin->phone_number = $response->customer->phone_number;
        $admin->status = $response->customer->status;
        $admin->token = $token;
        $admin->save();
        return $admin;
    }

    protected function guard()
    {
        return Auth::guard($this->guard);
    }

    public function index()
    {
        return view('admin.change_password');
    }
    public function viewAddSupplier()
    {
        return view('admin.add_suppliers');
    }

    public function addSupplier(Request $request){
        $params = $request->all();
        $validator = Validator::make($params, [
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required | number',
            'discription' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect('addSupplier')
                ->withErrors($validator)
                ->withInput();
        }

        $data = [
            "name" => $params['name'],
            "address" => $params['address'],
            "phone" => $params['phone'],
            "discription" => $params['discription']
        ];

        try {
            $headers = API::buildHeaders();
            API::send('addSupplier', $headers, $data);
            $request->session()->flash('alert-success', 'Success!');
            return redirect('/admin/addSupplier');
        }catch (\Exception $e){
            Log::error($e->getMessage());
            $messageError = \GuzzleHttp\json_decode($e->getResponse()->getBody(true));
            $validator->errors()->add('message', $messageError->message);
            return redirect('addSupplier')
                ->withErrors($validator)
                ->withInput();
        }
    }
}
