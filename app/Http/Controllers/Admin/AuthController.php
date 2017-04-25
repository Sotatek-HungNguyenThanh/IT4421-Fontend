<?php

namespace App\Http\Controllers\Admin;

use App\Admin;
use App\Http\Controllers\Controller;
use App\Units;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Validator;
use API;

class AuthController extends Controller
{
    use AuthenticatesUsers;
    protected $redirectTo = 'admin/home';
    protected $guard = 'admin';

    public function showLoginForm()
    {
        return view('admin.login');
    }

    public function showChangePasswordPage(){
        return view('admin.change_password');
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
            $headers = [
                'Content-Type' => 'application/x-www-form-urlencoded',
            ];
            $response = Units::send('admins/login', $headers, $data);
            $user = $response->admin;
            $admin = Admin::firstOrNew(['email' => $user->email]);
            $admin->token = $response->token_key;
            $admin->status = $user->status;
            $admin->password = bcrypt($params['password']);
            $admin->save();
            $this->guard()->login($admin);
            return redirect()->intended($this->redirectPath());
        }catch (\Exception $e){
            Log::error($e->getMessage());
            $messageError = json_decode($e->getResponse()->getBody(true));
            $validator->errors()->add('message', $messageError->message);
            return redirect('admin/login')
                ->withErrors($validator)
                ->withInput();
        }
    }

    public function logout(Request $request)
    {
        try {
            $token = $this->guard()->user()->token;
            $email = $this->guard()->user()->email;
            $headers = [
                'Content-Type' => 'application/x-www-form-urlencoded',
                'Authorization' => $email,
                'Tokenkey' => $token
            ];
            Units::send('admins/logout', $headers);

            $this->guard()->logout();
            $request->session()->flush();
            $request->session()->regenerate();
            return redirect('admin/login');
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
}
