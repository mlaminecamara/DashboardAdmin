<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Console\Kernel;
use Carbon\Carbon;

class clients extends Model
{
    protected $fillable = ['date_client', 'nombre_client' ];

    public function store($total_clients)
    {
        foreach($total_clients as $val) 
        {
        
        $clients = new clients([
            'date_client' =>  new Carbon($val[1]),
            'nombre_client' => $val[0],
        ]);

         $clients->save();

        }

    }

}
