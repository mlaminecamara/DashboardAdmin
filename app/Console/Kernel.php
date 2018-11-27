<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Illuminate\View\View;
use GuzzleHttp\client;
use Carbon\Carbon;
use App\mesures;
use App\clients;
use App\device;
use App\inactive_device;
use App\Http\ViewComposers\DateComposer;
use Illuminate\Http\Request;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //Register the cronApiCall command
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')
        //          ->hourly();

        $schedule->call(function() {
        
        // La requête pour l'obtention des mesures 
        $start = new Carbon();
        $start->subDay(7);
      
        $end = new Carbon();

        $req_opt = [];
        $client = new Client();

            $start_date  = new Carbon($start);
            $end_date  = new Carbon($end);
            $Nb_days =  $start_date->diffInDays($end_date);

            // push the first day in the array
            $counter = $start_date->subDay(1);
            for($i = 0; $i<$Nb_days; $i++)
            {
                $date = '';
                $date = $counter->addDays(1);
                array_push($req_opt, $date->format('Y-m-d'));
            }
            $res = $client->post('https://api.heyliot.com:3000/payloads/payload-dates', ['form_params' => $req_opt, "headers" => ['x-access-token' => 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJGaXJzdE5hbWUiOiJTdGF0c1BhbmVsIiwiRW1haWwiOiJTdGF0c1BhbmVsQGhleWxpb3QuY29tIiwiUGFzc3dvcmQiOiI2MTQ1MDQ5Y2I5YTg2NzNlNjNjM2M4MzQzMDkzYTY4MSIsImlhdCI6MTU0MTY4OTY1NCwiZXhwIjoxNTY3NjA5NjU0fQ.hOOcQaEAAcs65jb6uZeA6HT1sdwJOb7MSAPr_mJ-FK4']]);
            $resultat = json_decode((string) $res->getBody());
            $metrics = new mesures();
            $value1 = $metrics->store($resultat);
            //dd($value1);

        // La requête pour l'obtention du total clients

            $res_clients = $client->post('https://api.heyliot.com:3000/organisations/organisations-count', ['form_params' => $req_opt, "headers" => ['x-access-token' => 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJGaXJzdE5hbWUiOiJTdGF0c1BhbmVsIiwiRW1haWwiOiJTdGF0c1BhbmVsQGhleWxpb3QuY29tIiwiUGFzc3dvcmQiOiI2MTQ1MDQ5Y2I5YTg2NzNlNjNjM2M4MzQzMDkzYTY4MSIsImlhdCI6MTU0MTY4OTY1NCwiZXhwIjoxNTY3NjA5NjU0fQ.hOOcQaEAAcs65jb6uZeA6HT1sdwJOb7MSAPr_mJ-FK4']]);
            $total_clients = json_decode((string) $res_clients->getBody(),true);
            //dd($total_clients); 
            $customer = new clients();
            $value2 = $customer->store($total_clients);
            //dd($value2);

        // La requête pour l'obtention du total capteurs
            $res_device = $client->post('https://api.heyliot.com:3000/devices/device-count', ['form_params' => $req_opt, "headers" => ['x-access-token' => 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJGaXJzdE5hbWUiOiJTdGF0c1BhbmVsIiwiRW1haWwiOiJTdGF0c1BhbmVsQGhleWxpb3QuY29tIiwiUGFzc3dvcmQiOiI2MTQ1MDQ5Y2I5YTg2NzNlNjNjM2M4MzQzMDkzYTY4MSIsImlhdCI6MTU0MTY4OTY1NCwiZXhwIjoxNTY3NjA5NjU0fQ.hOOcQaEAAcs65jb6uZeA6HT1sdwJOb7MSAPr_mJ-FK4']]);
            $total_device = json_decode((string) $res_device->getBody());
            $hardware = new device();
            $value3 = $hardware->store($total_device);
            //dd($value3);

            //dd($req_opt);

        // La requête pour l'obtention des capteurs inactifs

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

            $inactive_hardware = new inactive_device();
            $value4 = $inactive_hardware->store($arr);
            //dd($value4);

        })->everyMinute();

    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
