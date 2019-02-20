<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    protected $table = 'marcas';

    public $timestamp =  false;


    protected $fillable = [
        'name',
        'active'
    ];
}
