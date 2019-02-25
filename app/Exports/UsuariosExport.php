<?php

namespace App\Exports;

use App\Models\Usuario;

use App\Invoice;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;


class UsuariosExport implements FromView, ShouldAutoSize
{
    public function view(): View
    {
        return view('excel_generate.excel_usuarios', [
            'usuarios' => Usuario::all()
        ]);
    }
}