<?php
/**
 * Created by PhpStorm.
 * User: hungnguyen
 * Date: 25/04/2017
 * Time: 20:20
 */

namespace App;


use GuzzleHttp\Client;

class Utils
{
    public static function send($path, $headers, $params = null, $method = 'POST'){
        $client = new Client(['base_uri' => Consts::HOST]);
        $response = $client->request($method, $path, [
            'headers' => $headers,
            'form_params' => $params
        ]);
        return json_decode($response->getBody());
    }

    public static function sendWithDataJson($path, $headers, $params = null, $method = 'POST'){
        $client = new Client(['base_uri' => Consts::HOST]);
        $response = $client->request($method, $path, [
            'headers' => $headers,
            'json' => $params
        ]);
        return json_decode($response->getBody());
    }
}