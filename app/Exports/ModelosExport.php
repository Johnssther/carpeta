<?php

namespace App\Exports;

use App\Models\Modelo;

use App\Invoice;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;


class ModelosExport implements FromView, ShouldAutoSize
{
    public function view(): View
    {
        return view('excel_generate.excel_modelos', [
            'modelos' => Modelo::all()
        ]);
    }
}