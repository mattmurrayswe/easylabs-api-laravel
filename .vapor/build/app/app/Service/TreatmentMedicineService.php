<?php

namespace App\Service;

use App\Http\Requests\Api\V1\Treatment\StoreTreatmentRequest;
use App\Models\Medicine;
use App\Models\Treatment;
use App\Models\TreatmentMedicine;
use Carbon\Carbon;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class TreatmentMedicineService
{
    public function store(array $request, int $treament_id = null):void
    {
        try {
            
            foreach ($request as $medicine) {
                
                if (array_key_exists('medicines_id', $medicine) == false)
                {
                    $newMedicineId = (new MedicineService())->storeAndGetId($medicine);
                    $medicine['medicines_id'] = $newMedicineId;
                }

                if ($treament_id) 
                {
                    $medicine['treatment_id'] = $treament_id;
                }
                
                TreatmentMedicine::create($medicine);
            }

        } catch (\Throwable $th) {
            throw $th;
        }
    
    }

    public function edit(array $request, int $treatment_id):void
    {

        TreatmentMedicine::where('treatment_id',$treatment_id)->delete();
        $this->store($request, $treatment_id);
    
    }

    
}
