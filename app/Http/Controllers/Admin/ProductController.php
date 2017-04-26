<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function showManageProductsPage(){
    	return view('admin.manage_products');
    }

    public function createProduct(){
        return view('admin.add_product');
    }
}
