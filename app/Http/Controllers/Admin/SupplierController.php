<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SupplierController extends Controller
{

    public function showManageSuppliersPage()
    {
        return view('admin.manage_suppliers');
    }

    public function viewAddSupplier()
    {
        return view('admin.add_suppliers');
    }

    public function addSupplier(Request $request){
        $params = $request->all();
        $validator = Validator::make($params, [
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required | number',
            'status' => 'required',
            'discription' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect('addSupplier')
                ->withErrors($validator)
                ->withInput();
        }

        $data = [
            "name" => $params['name'],
            "address" => $params['address'],
            "phone" => $params['phone'],
            "status" => $params['status'],
            "discription" => $params['discription']
        ];

        try {
            $headers = API::buildHeaders();
            API::send('addSupplier', $headers, $data);
            $request->session()->flash('alert-success', 'Success!');
            return redirect('/admin/addSupplier');
        }catch (\Exception $e){
            Log::error($e->getMessage());
            $messageError = \GuzzleHttp\json_decode($e->getResponse()->getBody(true));
            $validator->errors()->add('message', $messageError->message);
            return redirect('addSupplier')
                ->withErrors($validator)
                ->withInput();
        }
    }
}
