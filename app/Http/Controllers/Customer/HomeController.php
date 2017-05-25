<?php

namespace App\Http\Controllers\Customer;

use App\Consts;
use App\Http\Controllers\Controller;
use App\Units;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Facades\API;
use Log;
use App\User;
use Validator;

class HomeController extends Controller
{
    public function index(){
        return view('customer.account');
    }

    public function getAddress(){
        return view('customer.account_address');
    }

    public function showChangePassword(){
        return view('customer.change_password');
    }

    public function getAccountInfo(){
        return Auth::user();
    }

    public function updateAccountInfo(Request $request){
        try {
            $params = $request->all();
            $data = [
                "email" => Auth::user()->email,
                "fullname" => $params['fullname'],
                "address" => $params['address'],
                "phone_number" => $params['phone_number']
            ];
            $token = Auth::user()->token;
            $email = Auth::user()->email;
            $headers = API::buildHeaders($email, $token);
            $response = API::send('users/current_user', $headers, $data, 'PATCH');
            $user = User::firstOrNew(['email' => $data['email']]);
            $user->fullname = $response->customer->fullname;
            $user->address = $response->customer->address;
            $user->phone_number = $response->customer->phone_number;
            $user->status = $response->customer->status;
            $user->save();

            $request->session()->flash('alert-success', 'Password change success!');
            return redirect()->back();
        }catch (\Exception $e){
            Log::error($e->getMessage());
        }
    }

    public function changePasswordAccount(Request $request){
        try {
            $params = $request->all();
            $validator = Validator::make($params, [
                'old_password' => 'required | min: 8',
                'new_password' => 'required | min: 8'
            ]);
            $data = [
                "old_password" => $params['oldPassword'],
                "new_password" => $params['newPassword'],
            ];
            $token = Auth::user()->token;
            $email = Auth::user()->email;
            $headers = API::buildHeaders($email, $token);
            API::send('users/current_user/change_password', $headers, $data, 'PATCH');
            $user = Auth::user();
            $user->password = bcrypt($params['newPassword']);
            $request->session()->flash('alert-success', 'Password change success!');
            $user->save();
            return redirect()->back();
        }catch (\Exception $e){
            Log::error($e->getMessage());
        }
    }

    public function getListOrder(Request $request){
        $params = $request->all();
        $token = $this->guard()->user()->token;
        $email = $this->guard()->user()->email;
        $headers = [
            'Content-Type' => 'application/x-www-form-urlencoded',
            'Authorization' => $email,
            'Tokenkey' => $token
        ];
        $data = [];
        if(isset($params["daterange"]) && $params["daterange"] != ""){
            $data["daterange"] = $params["daterange"];
        }

        if (isset($params["page_no"]) && $params["per_page"]){
            $data["page_no"] = intval($params["page_no"]);
            $data["per_page"] = intval($params["per_page"]);
        }
        $response = Units::send('orders', $headers, $data, 'GET');

        return[
            'status' => Consts::STATUS_OK,
            'message' => "success",
            'data' => array("total" => $response->total_orders, "orders" => $response->orders),
        ];
    }

    protected function guard($guard = null)
    {
        return Auth::guard($guard);
    }
}
