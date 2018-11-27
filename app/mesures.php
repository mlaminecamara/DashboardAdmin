<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Console\Kernel;
use Carbon\Carbon;

class mesures extends Model
{
    protected $fillable = ['date', 'nombre' ];

    public function store($resultat)
    {

        foreach( $resultat as $val) 
        {
            $mesure = new mesures([
                'date' =>  new Carbon($val[1]),
                'nombre' => $val[0],
            ]);
            $mesure->save();
        }
        
    
    }
   
}
