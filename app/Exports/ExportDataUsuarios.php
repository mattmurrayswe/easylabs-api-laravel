<?php

namespace App\Exports;

use App\Models\Medicine;
use App\Models\Patient;
use App\Models\Pharmacy;
use App\Models\Prescriber;
use Maatwebsite\Excel\Concerns\FromCollection;

class ExportDataUsuarios implements FromCollection
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
        $prescribersQuery = Prescriber::with("permissao");
        $patientsQuery = Patient::with("permissao");     
        
        if ($this->search) {
            $search = $this->search;
            $lowerSearch = strtolower($search); // Convert the search term to lowercase

            if ($lowerSearch == 'prescritor') {
                $lowerSearch = 'prescriber';
            } elseif ($lowerSearch == 'paciente') {
                $lowerSearch = 'patient';
            }

            $prescribersQuery->where(function ($subquery) use ($lowerSearch) {
                $subquery->whereRaw('LOWER(name) like ?', ['%' . $lowerSearch . '%'])
                    ->orWhereHas('permissao', function ($query) use ($lowerSearch) {
                        $query->whereRaw('LOWER(name) like ?', ['%' . $lowerSearch . '%']);
                    })
                    ->orWhereRaw('LOWER(cpf) like ?', ['%' . $lowerSearch . '%'])
                    ->orWhereRaw('LOWER(email) like ?', ['%' . $lowerSearch . '%'])
                    ->orWhere('id_permissao', $lowerSearch);
            });

            $patientsQuery->where(function ($subquery) use ($lowerSearch) {
                $subquery->whereRaw('LOWER(name) like ?', ['%' . $lowerSearch . '%'])
                    ->orWhereHas('permissao', function ($query) use ($lowerSearch) {
                        $query->whereRaw('LOWER(name) like ?', ['%' . $lowerSearch . '%']);
                    })
                    ->orWhereRaw('LOWER(cpf) like ?', ['%' . $lowerSearch . '%'])
                    ->orWhereRaw('LOWER(email) like ?', ['%' . $lowerSearch . '%'])
                    ->orWhere('id_permissao', $lowerSearch);
            });
        }
    
        $prescribers = $prescribersQuery->get();
        $patients = $patientsQuery->get();
    
        $prescribers->transform(function ($prescriber) {
            $prescriber['user_type'] = 'prescriber';
            return $prescriber;
        });
    
        $patients->transform(function ($patient) {
            $patient['user_type'] = 'patient';
            return $patient;
        });
    
        $userCounter = 1;
    
        $prescribers->transform(function ($prescriber) use (&$userCounter) {
            $prescriber['unique_id'] = $userCounter;
            $userCounter++;
            return $prescriber;
        });
    
        $patients->transform(function ($patient) use (&$userCounter) {
            $patient['unique_id'] = $userCounter;
            $userCounter++;
            return $patient;
        });

        $users = $prescribers->concat($patients);

        return $users;
    }
}
