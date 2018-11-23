<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\client;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function __construct() 
    {

    }

    public function count()
    {
       
        $client = new Client();
        
    
        // client count

            $start = new Carbon();
            $start->subDay(7);

            $end = new Carbon();

            $req_opt = [];
             //var_dump($start);

            //dd('test');
            $start_date  = new Carbon($start);
            $end_date  = new Carbon($end);
            $Nb_days =  $start_date->diffInDays($end_date);

            //var_dump($start_date);
            //var_dump($end_date);
            //var_dump($Nb_days);

            // push the first day in the array
            $counter = $start_date->subDay(1);
            for($i = 0; $i<=$Nb_days; $i++)
            {
                $date = '';
                $date = $counter->addDays(1);
                array_push($req_opt, $date->format('Y-m-d'));
            }

            $res_clients = $client->post('https://api.heyliot.com:3000/organisations/organisations-count', ['form_params' => $req_opt, "headers" => ['x-access-token' => 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJGaXJzdE5hbWUiOiJTdGF0c1BhbmVsIiwiRW1haWwiOiJTdGF0c1BhbmVsQGhleWxpb3QuY29tIiwiUGFzc3dvcmQiOiI2MTQ1MDQ5Y2I5YTg2NzNlNjNjM2M4MzQzMDkzYTY4MSIsImlhdCI6MTU0MTY4OTY1NCwiZXhwIjoxNTY3NjA5NjU0fQ.hOOcQaEAAcs65jb6uZeA6HT1sdwJOb7MSAPr_mJ-FK4']]);
            $total_clients = json_decode((string) $res_clients->getBody()); 
            
            //dd($total_clients);
        
        // Device count
            $res_device = $client->post('https://api.heyliot.com:3000/devices/device-count', ['form_params' => $req_opt, "headers" => ['x-access-token' => 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJGaXJzdE5hbWUiOiJTdGF0c1BhbmVsIiwiRW1haWwiOiJTdGF0c1BhbmVsQGhleWxpb3QuY29tIiwiUGFzc3dvcmQiOiI2MTQ1MDQ5Y2I5YTg2NzNlNjNjM2M4MzQzMDkzYTY4MSIsImlhdCI6MTU0MTY4OTY1NCwiZXhwIjoxNTY3NjA5NjU0fQ.hOOcQaEAAcs65jb6uZeA6HT1sdwJOb7MSAPr_mJ-FK4']]);
            $total_device = json_decode((string) $res_device->getBody());

            //dd($total_device);

        //count des capteurs inactifs: capteurs avec une date de dernier payload = null ou n'ayant pas eu de payload depuis plus de 2jours(48h)
            $res_CapteursInactifs = $client->get('https://api.heyliot.com:3000/get-devices-id', ["headers" => ['x-access-token' => 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJGaXJzdE5hbWUiOiJTdGF0c1BhbmVsIiwiRW1haWwiOiJTdGF0c1BhbmVsQGhleWxpb3QuY29tIiwiUGFzc3dvcmQiOiI2MTQ1MDQ5Y2I5YTg2NzNlNjNjM2M4MzQzMDkzYTY4MSIsImlhdCI6MTU0MTY4OTY1NCwiZXhwIjoxNTY3NjA5NjU0fQ.hOOcQaEAAcs65jb6uZeA6HT1sdwJOb7MSAPr_mJ-FK4']]);
            $result = json_decode($res_CapteursInactifs->getBody());
            
            $arr = array();
            $new_array = array();
            $mstart = new Carbon();

            foreach($result as $res)
            {
                $lastpayload = $res[3]->LastPayload_Date;
                array_push($new_array, $lastpayload);
            }

            //var_dump($new_array);

            $mstart->subDay(8);

            for($i=0; $i <= 7; $i++)
            {
                $mstart->addDays(1);
                
                $numberof_inactivedevices = 0;

                // 48h sans payload ou payload null
                foreach($new_array as $value)
                {   
                    if($mstart > $value)
                    {
                        //var_dump($value);
                        $datediff= $mstart->diffInDays($value);
                        //dd($datediff);
                            if($value == null || $datediff > 2)
                            {    
                                $numberof_inactivedevices++;
                            }
                    }
                }
                array_push($arr, [$mstart->format('Y-m-d'), $numberof_inactivedevices]);   
            }

            //dd($arr);

            return view("index", ["total_device" => $total_device, "total_clients" => $total_clients, "total_capteurs_inactifs" => $arr]);
           
            //dd($new_array);
            //dd($numberof_inactivedevices); 

    }
                 

        
           
}







           
                
    