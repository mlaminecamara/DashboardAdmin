<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Carbon\Carbon;

class DateServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        /*$date1 = 
        $req_opt = [];
        array_push($req_opt, "date1");
        array_push($req_opt, "date2");
        etc...*/

        //$res = $client->post('https://api.heyliot.com:3000/payloads/payload-count', ['form_params' => $req_opt]);
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
