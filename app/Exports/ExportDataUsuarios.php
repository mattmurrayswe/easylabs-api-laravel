<?php

namespace App\Exports;

use App\Models\Medicine;
use App\Models\Patient;
use App\Models\Pharmacy;
use App\Models\Prescriber;
use Maatwebsite\Excel\Concerns\FromCollection;

class ExportDataUsuarios implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $prescribersQuery = Prescriber::with("permissao");
        $patientsQuery = Patient::with("permissao");

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
