<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\client;

class HomeController extends Controller
{
    public function __construct() 
    {

    }

    public function count()
    {
        // Device count
        $client = new Client();
        $res_device = $client->get('https://api.heyliot.com:3000/devices/device-count', ["headers" => ['x-access-token' => 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJGaXJzdE5hbWUiOiJTdGF0c1BhbmVsIiwiRW1haWwiOiJTdGF0c1BhbmVsQGhleWxpb3QuY29tIiwiUGFzc3dvcmQiOiI2MTQ1MDQ5Y2I5YTg2NzNlNjNjM2M4MzQzMDkzYTY4MSIsImlhdCI6MTU0MTY4OTY1NCwiZXhwIjoxNTY3NjA5NjU0fQ.hOOcQaEAAcs65jb6uZeA6HT1sdwJOb7MSAPr_mJ-FK4']]);
        $total_device = (string) $res_device->getBody();

        // Payload count
        $res_payloads = $client->get('https://api.heyliot.com:3000/payloads/payload-count', ["headers" => ['x-access-token' => 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJGaXJzdE5hbWUiOiJTdGF0c1BhbmVsIiwiRW1haWwiOiJTdGF0c1BhbmVsQGhleWxpb3QuY29tIiwiUGFzc3dvcmQiOiI2MTQ1MDQ5Y2I5YTg2NzNlNjNjM2M4MzQzMDkzYTY4MSIsImlhdCI6MTU0MTY4OTY1NCwiZXhwIjoxNTY3NjA5NjU0fQ.hOOcQaEAAcs65jb6uZeA6HT1sdwJOb7MSAPr_mJ-FK4']]);
        $total_payloads = (string) $res_payloads->getBody();
        //var_dump($total_device);
        //var_dump($total_payloads);

        // client count
        $res_clients = $client->get('https://api.heyliot.com:3000/organisations/organisations-count', ["headers" => ['x-access-token' => 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJGaXJzdE5hbWUiOiJTdGF0c1BhbmVsIiwiRW1haWwiOiJTdGF0c1BhbmVsQGhleWxpb3QuY29tIiwiUGFzc3dvcmQiOiI2MTQ1MDQ5Y2I5YTg2NzNlNjNjM2M4MzQzMDkzYTY4MSIsImlhdCI6MTU0MTY4OTY1NCwiZXhwIjoxNTY3NjA5NjU0fQ.hOOcQaEAAcs65jb6uZeA6HT1sdwJOb7MSAPr_mJ-FK4']]);
        $total_clients = (string) $res_clients->getBody();
        

        return view("index", ["total_device" => $total_device, "total_payloads" => $total_payloads, "total_clients" => $total_clients]);
    }
    
    
}


//https://api.heyliot.com:3000/devices/device-count

//http://localhost:3100/devices/device-count