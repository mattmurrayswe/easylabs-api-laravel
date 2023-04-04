<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\V1\PatientUsesMedicineRequest;
use App\Models\PatientUsesMedicine;
use Illuminate\Http\Request;

class PatientUsesMedicineController extends Controller
{
    public function informeMed(Request $request)
    {
        try {
            PatientUsesMedicine::create($request->all());
            return response([
                'message' => 'Medicine use recorded.'
            ], 200);

        } catch (\Throwable $th) {
            return response([
                'message' => $th
            ], 200);
        }
    }
}
