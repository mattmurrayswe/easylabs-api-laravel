<?php

namespace App\Http\Controllers\Api\V1\Patient;

use App\Http\Controllers\Controller;
use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function desativate($id)
    {
        $patient = Patient::find($id);

        try {
            $patient->update([
                'active' => false
            ]);

            return response([
                'message' => 'Patient disabled with success.'
            ], 200);
        } catch (\Throwable $th) {

            return response([
                'message' => $th
            ], 422);
        }
    }
}
