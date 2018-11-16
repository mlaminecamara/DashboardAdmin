<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\client;
use Carbon\Carbon;

class PayloadChartController extends Controller
{
    public function __construct() 
    {

    }

    public function count(Request $request)
    {
        $client = new Client();
        
        $start = $request->input('start');
        $end   = $request->input('end');

        //var_dump($start);

        $req_opt = [];

        if(isset($start) && isset($end))
        {
            $res = $client->post('https://api.heyliot.com:3000/payloads/payload-dates', ['form_params' => $req_opt, "headers" => ['x-access-token' => 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJGaXJzdE5hbWUiOiJTdGF0c1BhbmVsIiwiRW1haWwiOiJTdGF0c1BhbmVsQGhleWxpb3QuY29tIiwiUGFzc3dvcmQiOiI2MTQ1MDQ5Y2I5YTg2NzNlNjNjM2M4MzQzMDkzYTY4MSIsImlhdCI6MTU0MTY4OTY1NCwiZXhwIjoxNTY3NjA5NjU0fQ.hOOcQaEAAcs65jb6uZeA6HT1sdwJOb7MSAPr_mJ-FK4']]);
            $resultat = (string) $res->getBody();
            //return view('charts', ["dates" => $req_opt, "total_by_date" => $resultat] );
        }
        
       
        //var_dump($resultat);

    }
}

    
