<?php

namespace App\Exports;

use App\Voters;
use Maatwebsite\Excel\Concerns\FromCollection;

class PemilihExport implements FromCollection
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        //
        return Voters::all();
    }
}
