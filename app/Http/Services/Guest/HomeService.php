<?php

namespace App\Http\Services\Guest;

use Illuminate\Support\Facades\Auth;

class HomeService
{
    protected function guard()
    {
        return Auth::guard();
    }

}