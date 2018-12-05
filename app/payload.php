<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Console\Kernel;

class payload extends Model
{
    protected $fillable = ['nombre_payloads'];

    public function store($total_payloads)
    {      
            $total = new payload([
                'nombre_payloads' => $total_payloads
            ]);
            $total->save();
      
    }

}
