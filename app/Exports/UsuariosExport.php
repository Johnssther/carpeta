<?php

namespace App\Exports;

use App\Models\Usuario;

use App\Invoice;

use DB;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;


class UsuariosExport implements FromView, ShouldAutoSize
{
    public function view(): View
    {

         $usuarios = DB::table('usuarios')->orderBy('age', 'asc')->get();
 
        return view('excel_generate.excel_usuarios', [
            'usuarios' => $usuarios
            
        ]);
    }
}

/*   return view('excel_generate.excel_usuarios', [
            'usuarios' => Usuario::get()->orderBy('name', 'desc')
            ]); */