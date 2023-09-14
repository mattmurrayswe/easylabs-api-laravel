<?php

namespace App\Exports;

use App\Models\Medicine;
use App\Models\Pharmacy;
use Maatwebsite\Excel\Concerns\FromCollection;

class ExportDataFarmacias implements FromCollection
{
    protected $search;

    public function __construct($search)
    {
        $this->search = $search;
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $query = Pharmacy::query();        
        
        if ($this->search) {
            $search = $this->search;
            $query->where(function($subquery) use ($search) {
                $subquery->where('id', 'like', '%' . $search . '%') // Search by pharmacy id
                         ->orWhere('unidade', 'like', '%' . $search . '%') // Search by pharmacy unidade
                         ->orWhere('rede', 'like', '%' . $search . '%') // Search by pharmacy rede
                         ->orWhere('email', 'like', '%' . $search . '%') // Search by pharmacy email
                         ->orWhere('cep', 'like', '%' . $search . '%'); // Search by pharmacy cep
                // You can add more conditions here based on your needs
            });
        }
    
        $pharmacies = $query->get();
        return $pharmacies;
    }
}
