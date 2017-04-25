<?php

namespace App\Http\Services;

use App\Consts;
use GuzzleHttp\Client as Client;

class API
{
    private $client;

    public function __construct()
    {
        $this->client = new Client(['base_uri' => Consts::HOST]);
    }

    public function send($path, $headers, $params = null, $method = 'POST'){
        $response = $this->client->request($method, $path, [
            'headers' => $headers,
            'form_params' => $params
        ]);
        return json_decode($response->getBody());
    }

    public function buildHeaders($email = null, $token = null){
        if($token){
            $headers = [
                'Content-Type' => 'application/x-www-form-urlencoded',
                'Authorization' => $email,
                'Tokenkey' => $token
            ];
        }else{
            $headers = ['Content-Type' => 'application/x-www-form-urlencoded'];
        }
        return $headers;
    }
}