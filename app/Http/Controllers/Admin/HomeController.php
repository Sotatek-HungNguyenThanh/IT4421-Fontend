<?php
/**
 * Created by PhpStorm.
 * User: hungnguyen
 * Date: 28/05/2017
 * Time: 04:03
 */

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function showHomePage(){
        return view('admin.home');
    }

}