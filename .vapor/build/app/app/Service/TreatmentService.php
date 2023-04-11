<?php

namespace App\Service;

use App\Http\Requests\Api\V1\Treatment\StoreTreatmentRequest;
use App\Models\Treatment;
use Carbon\Carbon;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class TreatmentService
{
    public function store(StoreTreatmentRequest $request){

        try {
            $treatment = Treatment::create($request->all());
            if ($request->has('medicine')) {
                (new TreatmentMedicineService())->store($request->medicine, $treatment->id);
            }
            return $treatment;
        } catch (\Throwable $th) {
            return  $th;
        }
    }

    public function getAllTreament()
    {
        return Treatment::all();
    }
    public function getTreatment($id)
    {
        return Treatment::findOrFail($id);
    }
    public function deleteTreatment($id)
    {
        $treatment = Treatment::find($id);
        return $treatment->delete();
    }

    public function edit(StoreTreatmentRequest $request, $id){

        try {
            
            $treatment = $this->getTreatment($id);

            if ($request->has('medicine')) {
                (new TreatmentMedicineService())->edit($request->medicine, $treatment->id);
            }

            $treatment->update($request->all()); 
            return $treatment;

        } catch (\Throwable $th) {
            return  $th;
        }
    }
    
}
