<?php

namespace App\Imports;

use App\Models\Pharmacy;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class FarmaciasImport implements ToCollection
{
    public function collection(Collection $collection)
    {
        foreach ($collection as $row) {
            
            Pharmacy::create([
                "cep" => $row[0],
                "street" => $row[1],
                "number" => $row[2],
                "complement" => $row[3],
                "neighboor" => $row[4],
                "city" => $row[5],
                "state" => $row[6],
                "unidade" => $row[7],
                "name" => $row[8],
                "rede" => $row[9],
                "email" => $row[10],
            ]);
        }
    }
}
