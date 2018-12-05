<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use GuzzleHttp\client;
use App\payload;
use Illuminate\Support\Facades\DB;

class GraphDataServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $payloads = DB::table('payloads')
                                    ->orderBy('created_at', 'desc')
                                    ->limit(1)
                                    ->get();
            $total_payloads = json_decode($payloads, true);

        View::share('total_payloads', $total_payloads);

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
