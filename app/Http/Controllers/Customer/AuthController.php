<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Units;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;
use App\User;
use Log;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('customer.login');
    }

    public function showRegister()
    {
        return view('customer.register');
    }

    public function feedback()
    {
    	return view('customer.feedback');
    }
    public function account()
    {
        return view('customer.account');
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

        $data = [
            "fullname" => $params['fullname'],
            "email" => $params['email'],
            "password" => $params['password'],
            "address" => $params['address'],
            "phone_number" => $params['phone_number']
        ];
        try {
            $headers = [
                'Content-Type' => 'application/json',
            ];
            Units::sendWithDataJson('users', $headers, $data);
            $this->create($data);
            return redirect('/login');
        }catch (\Exception $e){
            Log::error($e->getMessage());
            $messageError = \GuzzleHttp\json_decode($e->getResponse()->getBody(true));
            $validator->errors()->add('message', $messageError->message[0]);
            return redirect('register')
                ->withErrors($validator)
                ->withInput();
        }
    }

    private function create(array $params)
    {
        $user =  new User();
        $user->fullname = $params['fullname'];
        $user->email = $params['email'];
        $user->password = bcrypt($params['password']);
        $user->address = ($params['address']);
        $user->phone_number = ($params['phone_number']);
        $user->status = 'active';
        $user->save();
        return $user;
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
            $headers = $headers = [
                'Content-Type' => 'application/json',
            ];
            $response = Units::sendWithDataJson('login', $headers, $data);
            $user = $this->updateAccountInfo($params, $response->token_key);
            Auth::login($user);
            return redirect('/');
        }catch (\Exception $e){
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
            $token = Auth::user()->token;
            $email = Auth::user()->email;
            $headers = [
                'Content-Type' => 'application/json',
                'Authorization' => $email,
                'Tokenkey' => $token
            ];
            Units::sendWithDataJson('logout', $headers);
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

    private function updateAccountInfo($params, $token)
    {
        $headers = [
            'Content-Type' => 'application/json',
            'Authorization' => $params['email'],
            'Tokenkey' => $token
        ];
        $response = Units::sendWithDataJson('users/current_user', $headers, null, 'GET');
        $user = User::firstOrNew(['email' => $params['email']]);
        $user->password = bcrypt($params['password']);
        $user->fullname = $response->customer->fullname;
        $user->address = $response->customer->address;
        $user->phone_number = $response->customer->phone_number;
        $user->status = $response->customer->status;
        $user->token = $token;
        $user->save();
        return $user;
    }

    public function addFeedback(Request $request){
        $params = $request->all();
        $validator = Validator::make($params, [
            'email' => 'required | email',
            'feedback' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect('feedback')
                ->withErrors($validator)
                ->withInput();
        }

        $data = [
            "email" => $params['email'],
            "feedback" => $params['feedback']
        ];

        try {
            $headers = [
                'Content-Type' => 'application/json'
            ];
            Units::sendWithDataJson('feedback', $headers, $data);
            $request->session()->flash('alert-success', 'Send feedback success!');
            return redirect('/feedback');
        }catch (\Exception $e){
            Log::error($e->getMessage());
            $messageError = json_decode($e->getResponse()->getBody(true));
            $validator->errors()->add('message', $messageError->message);
            return redirect('feedback')
                ->withErrors($validator)
                ->withInput();
        }
    }
}
