<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\client;

class capteursInactifsController extends Controller
{
    public function __construct() 
    {

    }

    public function detail()
    {
            $client = new Client();

            $res_Detail_CapteursInactifs = $client->get('https://api.heyliot.com:3000/get-devices-id', ["headers" => ['x-access-token' => 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJGaXJzdE5hbWUiOiJTdGF0c1BhbmVsIiwiRW1haWwiOiJTdGF0c1BhbmVsQGhleWxpb3QuY29tIiwiUGFzc3dvcmQiOiI2MTQ1MDQ5Y2I5YTg2NzNlNjNjM2M4MzQzMDkzYTY4MSIsImlhdCI6MTU0MTY4OTY1NCwiZXhwIjoxNTY3NjA5NjU0fQ.hOOcQaEAAcs65jb6uZeA6HT1sdwJOb7MSAPr_mJ-FK4']]);
            $result = json_decode($res_Detail_CapteursInactifs->getBody());
            
            $items = array();

            foreach($result as $res) 
            {
                $now = time();
                $lastpayload_date_known = strtotime($res[3]->LastPayload_Date);
                $datediff= abs($now - $lastpayload_date_known);
                $days = floor(($datediff) / (24*60*60));
                //var_dump($days);
                if($res[3]->LastPayload_Date == null || $days > 2)
                    {
                        array_push($items,[$res[0]->Name, $res[0]->SigfoxId, $res[3]->LastPayload_Date]);
                    }
            }
            
            return view("capteurs-inactifs", ["deviceDetails" => $items]);
     
    }
}
