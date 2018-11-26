<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Console\Kernel;

class mesures extends Model
{
    foreach($resultat as $val) 
    {
        $mesure = new mesures([
            'date' =>  new Carbon($val[1]),
            'nombre' => $val[0],
        ]);
        $mesure->save();
    }

    protected $fillable = ['date', 'nombre' ];
}
