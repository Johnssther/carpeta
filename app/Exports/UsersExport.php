<?php

namespace App\Exports;

use App\User;
use App\Models\Marca;
use Maatwebsite\Excel\Concerns\FromCollection;

class UsersExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Marca::all();
    }
}
