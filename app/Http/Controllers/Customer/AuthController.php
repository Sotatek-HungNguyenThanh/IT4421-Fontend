<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Http\Services\Customer\AuthService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Exception;

class AuthController extends Controller
{
    protected $authService;

    public function __construct()
    {
        $this->authService = new AuthService();
    }

    public function showLoginPage()
    {
        return view('customer.login');
    }

    public function showRegisterPage()
    {
        return view('customer.register');
    }

    public function register(Request $request)
    {
        $params = $request->all();

        $validator = $this->validatorRegister($params);

        if ($validator->fails()) {
            return redirect('register')
                ->withErrors($validator)
                ->withInput();
        }

        try {

            $this->authService->register($params);

            return redirect('/login');
        }catch (Exception $e){
            Log::error($e->getMessage());
            $messageError = \GuzzleHttp\json_decode($e->getResponse()->getBody(true));
            $validator->errors()->add('message', $messageError->message[0]);
            return redirect('register')
                ->withErrors($validator)
                ->withInput();
        }
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

        try {

            $this->authService->login($params);

            return redirect('/');
        }catch (Exception $e){
            Log::error($e->getMessage());
            $messageError = \GuzzleHttp\json_decode($e->getResponse()->getBody(true));
            $validator->errors()->add('message', $messageError->message);
            return redirect('login')
                ->withErrors($validator)
                ->withInput();
        }
    }

    public function logout()
    {
        try {

            $this->authService->logout();

            return redirect('/');
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

    private function validatorRegister($params)
    {
        return Validator::make($params, [
            'fullname' => 'required',
            'email' => 'required | email',
            'password' => 'required | min:8 |confirmed',
            'password_confirmation' => 'required | min:8',
            'address' => 'required',
            'phone_number' => 'required | min: 10',
        ]);
    }
}
