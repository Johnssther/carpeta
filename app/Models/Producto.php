<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'productos';
    public $timestamp = false;

    protected $fillable = [
        'producto','size','marca_id','modelo_id','fechaElaboracion','personaElaboro_id','estado','descripcion'

    ];


}
