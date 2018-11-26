<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Console\Kernel;

class client extends Model
{
    foreach($total_clients as $val) 
    {
        $client = new client([
            'date_client' =>  new Carbon($val[1]),
            'nombre_client' => $val[0],
        ]);
        $client->save();
    }
    protected $fillable = ['date_client', 'nombre_client' ];
}
