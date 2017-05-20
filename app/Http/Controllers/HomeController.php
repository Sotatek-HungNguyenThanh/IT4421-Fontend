<?php

namespace App\Http\Controllers;

use App\Consts;
use App\Http\Services\HomeService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Exception;

class HomeController extends Controller
{
    protected $homeService;
    public function __construct()
    {
        $this->homeService = new HomeService();
    }
    public function index(){
        return view('app.home');
    }


}
