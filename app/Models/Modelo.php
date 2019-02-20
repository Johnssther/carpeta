<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Modelo extends Model
{
     
    protected $table='modelos';
    public $timestamps = false;

    protected $fillable = [
        
        'name',	'active'
      
    ];

}
