<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Console\Kernel;
use Carbon\Carbon;

class device extends Model
{
    protected $fillable = ['date_device', 'nombre_device' ];
    
    public function store($total_device)
    {
        foreach($total_device as $val) 
        {
        $device = new device([
            'date_device' =>  new Carbon($val[1]),
            'nombre_device' => $val[0],
        ]);

        $device->save();

        }
  
    }

}
