<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use GuzzleHttp\client;
use Carbon\Carbon;
use App\mesures;
use App\clients;
use App\device;

class HomeController extends Controller
{
    public function __construct() 
    {

    }

    public function count()
    {

            // Client count
            $clients = DB::table('clients')
                                    ->orderBy('created_at', 'desc')
                                    ->limit(7)
                                    ->get();
            $total_clients = json_decode($clients, true);
            
        
        
            // Device count
            $devices = DB::table('devices')
                                    ->orderBy('created_at', 'desc')
                                    ->limit(7)
                                    ->get();
            $total_device = json_decode($devices, true);

            //dd($total_device);

        //count des capteurs inactifs: capteurs avec une date de dernier payload = null ou n'ayant pas eu de payload depuis plus de 2jours(48h)
            $CapteursInactifs = DB::table('inactive_devices')
                                                    ->orderBy('created_at', 'desc')
                                                    ->limit(8)
                                                    ->get();
            $result = json_decode($CapteursInactifs, true);
            
       
            return view("index", ["total_device" => $total_device, "total_clients" => $total_clients, "total_capteurs_inactifs" => $result]);
    
    }
           
}







           
                
    