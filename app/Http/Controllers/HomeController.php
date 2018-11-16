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
       
        $client = new Client();
        
       // Device count
        $res_device = $client->get('https://api.heyliot.com:3000/devices/device-count', ["headers" => ['x-access-token' => 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJGaXJzdE5hbWUiOiJTdGF0c1BhbmVsIiwiRW1haWwiOiJTdGF0c1BhbmVsQGhleWxpb3QuY29tIiwiUGFzc3dvcmQiOiI2MTQ1MDQ5Y2I5YTg2NzNlNjNjM2M4MzQzMDkzYTY4MSIsImlhdCI6MTU0MTY4OTY1NCwiZXhwIjoxNTY3NjA5NjU0fQ.hOOcQaEAAcs65jb6uZeA6HT1sdwJOb7MSAPr_mJ-FK4']]);
        $total_device = (string) $res_device->getBody();
    
        // client count
        $res_clients = $client->get('https://api.heyliot.com:3000/organisations/organisations-count', ["headers" => ['x-access-token' => 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJGaXJzdE5hbWUiOiJTdGF0c1BhbmVsIiwiRW1haWwiOiJTdGF0c1BhbmVsQGhleWxpb3QuY29tIiwiUGFzc3dvcmQiOiI2MTQ1MDQ5Y2I5YTg2NzNlNjNjM2M4MzQzMDkzYTY4MSIsImlhdCI6MTU0MTY4OTY1NCwiZXhwIjoxNTY3NjA5NjU0fQ.hOOcQaEAAcs65jb6uZeA6HT1sdwJOb7MSAPr_mJ-FK4']]);
        $total_clients = (string) $res_clients->getBody(); 
        
        //count des capteurs inactifs: capteurs avec une date de dernier payload = null ou n'ayant pas eu de payload depuis plus de 2jours(48h)
        $res_CapteursInactifs = $client->get('https://api.heyliot.com:3000/get-devices-id', ["headers" => ['x-access-token' => 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJGaXJzdE5hbWUiOiJTdGF0c1BhbmVsIiwiRW1haWwiOiJTdGF0c1BhbmVsQGhleWxpb3QuY29tIiwiUGFzc3dvcmQiOiI2MTQ1MDQ5Y2I5YTg2NzNlNjNjM2M4MzQzMDkzYTY4MSIsImlhdCI6MTU0MTY4OTY1NCwiZXhwIjoxNTY3NjA5NjU0fQ.hOOcQaEAAcs65jb6uZeA6HT1sdwJOb7MSAPr_mJ-FK4']]);
        $result = json_decode($res_CapteursInactifs->getBody());
        $new_array = array();
        foreach($result as $res) 
        {
            $lastpayload = $res[3]->LastPayload_Date;
            array_push($new_array, $lastpayload);
        }   
        //var_dump($new_array);
        $now = time();
    
        $numberof_inactivedevices = 0;
        foreach($new_array as $value)
        {   
            $lastpayload_date_known = strtotime($value);
            $datediff= abs($now - $lastpayload_date_known);
            $days = floor(($datediff) / (24*60*60));

            if($value == null || $days > 2)
                $numberof_inactivedevices++;
        } 
        
        //var_dump($numberof_inactivedevices);           

    return view("index", ["total_device" => $total_device, "total_clients" => $total_clients, "total_capteurs_inactifs" => $numberof_inactivedevices]);
           
    }
}






           
                
    