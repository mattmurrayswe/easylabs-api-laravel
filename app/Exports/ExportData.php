<?php

namespace App\Exports;

use App\Models\Medicine;
use Maatwebsite\Excel\Concerns\FromCollection;

class ExportData implements FromCollection
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
