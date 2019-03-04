<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

use App\Models\Usuario;
use App\Models\Marca;
use App\Models\Modelo;
use App\Models\Producto;


use DB;



class ConsultasController extends Controller
{
    public function consultas() {

        return 'desde el controlador de consultas';

    }
}
