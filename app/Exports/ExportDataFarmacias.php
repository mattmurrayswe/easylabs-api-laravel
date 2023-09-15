<?php

namespace App\Exports;

use App\Models\Medicine;
use App\Models\Pharmacy;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ExportDataFarmacias implements FromCollection, WithHeadings
{
    protected $search;

    public function __construct($search)
    {
        $this->search = $search;
    }

    public function headings(): array
    {
        return [
            "CEP",
            "Rua",
            "Número da Rua",
            "Complemento",
            "Bairro",
            "Cidade",
            "Estado",
            "Nome do Responsável",
            "Nome da Unidade",
            "Rede",
            "E-mail",
        ];
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
    
        $pharmacies = $query->get([
            "cep",
            "street",
            "number",
            "complement",
            "neighboor",
            "city",
            "state",
            "unidade",
            "name",
            "rede",
            "email",
        ]);
        return $pharmacies;
    }
}
