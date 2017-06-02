<?php

namespace App\Http\Controllers\Admin;

use App\Admin;
use App\Http\Controllers\Controller;
use App\Http\Services\Admin\AuthService;
use App\Utils;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Exception;

class AuthController extends Controller
{
    use AuthenticatesUsers;
    protected $redirectTo = 'admin/home';
    protected $guard = 'admin';
    protected $authService;


    public function __construct()
    {
        $this->authService = new AuthService();
    }

    public function showLoginPage()
    {
        return view('admin.login');
    }


    public function login(Request $request)
    {
        $params = $request->all();
        $validator = $this->validatorLogin($params);

        if ($validator->fails()) {
            return redirect('/admin/login')
                ->withErrors($validator)
                ->withInput();
        }

        try {

            $admin = $this->authService->login($params);
            $this->guard()->login($admin);

            return redirect($this->redirectTo);
        }catch (Exception $e){
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
            $this->authService->logout();

            $request->session()->flush();
            $request->session()->regenerate();

            return redirect('admin/login');
        }catch (Exception $e){
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

    protected function guard()
    {
        return Auth::guard($this->guard);
    }
}
