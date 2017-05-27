<?php
/**
 * Created by PhpStorm.
 * User: hungnguyen
 * Date: 28/05/2017
 * Time: 03:47
 */

namespace App\Http\Controllers\Customer;


use App\Consts;
use App\Http\Controllers\Controller;
use App\Http\Services\Customer\AccountService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Exception;

class AccountController extends Controller
{
    protected $accountService;
    public function __construct()
    {
        $this->accountService = new AccountService();
    }

    public function showAccountPage()
    {
        return view('customer.account');
    }

    public function showChangePasswordPage()
    {
        return view('customer.change_password');
    }

    public function showAccountAddressPage(){
        return view('customer.account_address');
    }

    public function getAccountInfo(){
        DB::beginTransaction();
        try{
            $result = $this->accountService->getAccountInfo();
            DB::commit();

            return $result;
        }catch (Exception $e){
            DB::rollback();
            Log::error($e->getMessage());
            return[
                'status' => Consts::STATUS_ERROR,
                'message' => $e->getMessage(),
                'data' => ''
            ];
        }
    }

    public function updateAccountInfo(Request $request){
        DB::beginTransaction();
        try{

            $this->accountService->updateAccountInfo($request->all());

            $request->session()->flash('alert-success', 'Password change success!');
            DB::commit();

            return redirect()->back();
        }catch (Exception $e){
            DB::rollback();
            Log::error($e->getMessage());
            return[
                'status' => Consts::STATUS_ERROR,
                'message' => $e->getMessage(),
                'data' => ''
            ];
        }
    }

    public function changePassword(Request $request){
        DB::beginTransaction();
        try{

            $this->accountService->changePassword($request->all());
            DB::commit();

            $request->session()->flash('alert-success', 'Password change success!');

            return redirect()->back();
        }catch (Exception $e){
            DB::rollback();
            Log::error($e->getMessage());
            return[
                'status' => Consts::STATUS_ERROR,
                'message' => $e->getMessage(),
                'data' => ''
            ];
        }
    }
}