<?php
/**
 * Created by PhpStorm.
 * User: hungnguyen
 * Date: 28/05/2017
 * Time: 04:03
 */

namespace App\Http\Controllers\Admin;


use App\Consts;
use App\Http\Controllers\Controller;
use App\Http\Services\Admin\HomeService;
use Illuminate\Support\Facades\DB;
use Exception;

class HomeController extends Controller
{
    protected $homeService;
    public function __construct()
    {
        $this->homeService = new HomeService();
    }

    public function showHomePage(){
        return view('admin.dashboard');
    }

    public function showDashboardPage(){
        return view('admin.dashboard');
    }

    public function getDataDashBoard(){
        DB::beginTransaction();
        try{
            $result = $this->homeService->getDataDashBoard();

            DB::commit();

            return [
                'status' => Consts::STATUS_OK,
                'message'=> 'success',
                'data' => $result
            ];
        }catch (Exception $e){
            DB::rollback();
            return[
                'status' => Consts::STATUS_ERROR,
                'message' => $e->getMessage(),
                'data' => ''
            ];
        }
    }

}