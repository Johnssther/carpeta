<?php

namespace App\Exports;

use App\Models\Modelo;

use Maatwebsite\Excel\Concerns\FromCollection;

class ModelosExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Modelo::all();
    }
}
