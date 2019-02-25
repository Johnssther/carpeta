<?php

namespace App\Exports;

use App\Models\Usuario;

use App\Invoice;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class UsuariosExport implements FromView
{
    public function view(): View
    {
        return view('excel_generate.excel_usuarios', [
            'usuarios' => Usuario::all()
        ]);
    }
}