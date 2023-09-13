<?php

namespace App\Exports;

use App\Models\Medicine;
use App\Models\Pharmacy;
use Maatwebsite\Excel\Concerns\FromCollection;

class ExportDataFarmacias implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $data = Pharmacy::all();
        return $data;
    }
}
