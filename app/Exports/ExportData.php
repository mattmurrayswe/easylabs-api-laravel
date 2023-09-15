<?php

namespace App\Exports;

use App\Models\Medicine;
use Illuminate\Contracts\Support\Responsable;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ExportData implements FromCollection, WithHeadings, Responsable
{
    use Exportable;

    protected $search;

    public function __construct($search)
    {
        $this->search = $search;
    }

    public function headings(): array
    {
        return [
            'id',
            'Nome Medicamento',
            'Apresentação',
            'Concentração',
            'Volume Frasco',
            'Formulação',
            'Laboratório',
        ];
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $query = Medicine::query();        
        

        if ($this->search) {
            $search = $this->search;
            $query->where(function($subquery) use ($search) {
                $subquery->where('id', 'like', '%' . $search . '%')
                         ->orWhere('name', 'like', '%' . $search . '%')
                         ->orWhere('presentation', 'like', '%' . $search . '%')
                         ->orWhere('concentration', 'like', '%' . $search . '%')
                         ->orWhere('volume_flask', 'like', '%' . $search . '%')
                         ->orWhere('formulation', 'like', '%' . $search . '%')
                         ->orWhere('lab', 'like', '%' . $search . '%');
            });
        }
    
        $medicines = $query->get([
            'id',
            'name',
            'presentation',
            'concentration',
            'volume_flask',
            'formulation',
            'lab',
        ]);
        return $medicines;
    }
}
