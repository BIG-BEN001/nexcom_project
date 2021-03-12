<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class PackageController extends Controller
{
    public function getGuzzleRequest()
    {
        $client = new \GuzzleHttp\Client();
        $request = $client->get('http://myexample.com');
        $response = $request->getBody();

        dd($response);
    }

    public function postGuzzleRequest()
    {
//        dd('hapa');
        $url = "http://127.0.0.1:8872/getSiteAvailablePackages";

        $client = new Client(); //GuzzleHttp\Client
        $request = $client->post($url, [
            'form_params' => [
                'sample-form-data' => 'value'
            ]
        ]);
        $response = $request->send();

        dd($response);
    }
}
