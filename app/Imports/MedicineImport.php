<?php

namespace App\Imports;

use App\Models\Medicine;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class MedicineImport implements ToCollection
{
    public function collection(Collection $collection)
    {
        foreach ($collection as $row) {
            
            Medicine::create([
                'name' => $row[1],
                'presentation' => $row[2],
                'concentration' => $row[3],
                'volume_flask' => $row[4],
                'formulation' => $row[5],
                'lab' => $row[6],
            ]);
        }
    }
}
