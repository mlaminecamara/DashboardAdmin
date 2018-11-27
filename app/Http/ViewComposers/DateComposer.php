<?php

namespace App\Http\ViewComposers;

use Illuminate\Http\Request;
use GuzzleHttp\client;
use Carbon\Carbon;
use App\mesures;

use Illuminate\View\View;
use Illuminate\Support\Facades\DB;

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

            $mesures = DB::table('mesures')
                                    ->orderBy('created_at', 'desc')
                                    ->limit(7)
                                    ->get();
            $mesures = json_decode($mesures, true);
            //dd($mesures);
            
            return $view->with(["start_date" => $start_date, "end_date" =>$end_date, "start" => $start, "end" => $end, "dates" => $req_opt, "total_by_date" => $mesures]);

    }

}


