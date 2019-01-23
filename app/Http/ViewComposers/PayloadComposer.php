<?php 

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use Illuminate\Support\Facades\DB;
use App\payload;

class PayloadComposer 
{

    public function __construct() 
    {  
    }

    public function compose(View $view)
    {
        $payloads = DB::table('payloads')
                                    ->orderBy('created_at', 'desc')
                                    ->limit(1)
                                    ->get();
            $total_payloads = json_decode($payloads, true);

            return $view->with(['total_payloads' => $total_payloads]);
    }



}