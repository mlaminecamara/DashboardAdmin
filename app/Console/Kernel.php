<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

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

        $res = $client->post('https://api.heyliot.com:3000/payloads/payload-dates', ['form_params' => $req_opt, "headers" => ['x-access-token' => 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJGaXJzdE5hbWUiOiJTdGF0c1BhbmVsIiwiRW1haWwiOiJTdGF0c1BhbmVsQGhleWxpb3QuY29tIiwiUGFzc3dvcmQiOiI2MTQ1MDQ5Y2I5YTg2NzNlNjNjM2M4MzQzMDkzYTY4MSIsImlhdCI6MTU0MTY4OTY1NCwiZXhwIjoxNTY3NjA5NjU0fQ.hOOcQaEAAcs65jb6uZeA6HT1sdwJOb7MSAPr_mJ-FK4']]);
        $resultat = json_decode((string) $res->getBody());
        dd($resulat);
        $mesure = new mesures([
            'date' =>  $resultat->get($resultat[0]),
            'nombre de mesures' => $resulta->get($resulat[1]),
        ]);
        $mesure->save();

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
