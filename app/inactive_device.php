<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class inactive_device extends Model
{
    protected $fillable = ['date_inactive', 'nombre_inactive' ];
    
    public function store($arr)
    {

        foreach( $arr as $val) 
        {
            $inactive = new inactive_device([
                'date_inactive' => $val[0],
                'nombre_inactive' => $val[1],
            ]);
            $inactive->save();
        }
        
    
    }
}
