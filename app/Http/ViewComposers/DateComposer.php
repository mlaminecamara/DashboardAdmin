<?php

namespace App\Http\ViewComposers;

use Illuminate\Http\Request;
use GuzzleHttp\client;
use Carbon\Carbon;

use Illuminate\View\View;

class DateComposer
{
    protected $request; 

    public function __construct(Request $request) 
    {
        
        $this->request = $request;
    }

    public function compose(View $view)
    {
        $start = $this->request->input('start');
        $end = $this->request->input('end');
        if(!$start)
        {
            $start = new Carbon();
            $start->subDay(7);
        }
        if(!$end)
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
            //dd($resultat);
            return $view->with(["start_date" => $start_date, "end_date" =>$end_date, "start" => $start, "end" => $end, "dates" => $req_opt, "total_by_date" => $resultat]);

    }

}


