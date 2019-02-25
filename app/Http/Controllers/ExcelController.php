<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Marca;
use App\Models\Modelo;
use App\Models\Usuario;
use App\Models\Producto;
use DB;

use App\Exports\UsersExport;
use App\Exports\ModelosExport;
use App\Exports\UsuariosExport;
use App\Exports\ProductosExport;

use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;



class ExcelController extends Controller
{
  

    public function Generate_excel_marcas() {

        return Excel::download(new UsersExport, 'Marcas.xlsx');

    }

    public function Generate_excel_modelos() {

        return Excel::download(new ModelosExport, 'Modelos.xlsx');
        
        
    }
    
    public function Generate_excel_usuarios() {
        
        
        
        return Excel::download(new UsuariosExport, 'Usuarios.xlsx');
        return view('excel_generate.excel_usuarios', ['usuarios' => Usuario::get()]);

    }

    public function Generate_excel_productos() {

        return Excel::download(new ProductosExport, 'Productos.xlsx');


    }
}

