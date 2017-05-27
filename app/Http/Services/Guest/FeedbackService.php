<?php
/**
 * Created by PhpStorm.
 * User: hungnguyen
 * Date: 28/05/2017
 * Time: 03:33
 */

namespace App\Http\Services\Guest;


use App\Utils;
use Illuminate\Support\Facades\Auth;

class FeedbackService
{
    protected function guard()
    {
        return Auth::guard();
    }

    public function createFeedback($params){
        $data = [
            "email" => $params['email'],
            "feedback" => $params['feedback']
        ];

        $headers = [
            'Content-Type' => 'application/json'
        ];

        Utils::sendWithDataJson('feedback', $headers, $data);
    }
}