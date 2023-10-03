<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Configs;
use App\Http\Controllers\Controller;
use App\Http\Resources\Api\V1\SuccessResource;
use Illuminate\Http\Request;

class ConfigsController extends Controller
{
    public function store(Request $request)
    {
        if ($request->has('prescriber_id')) {

            $data = $request->validate([
                'prescriber_id' => 'required|integer',
                'patient_id' => 'nullable|integer',
                'push_enabled' => 'required|boolean',
                'email_enabled' => 'required|boolean',
            ]);
            
        } elseif ($request->has('patient_id')) {
            
            $data = $request->validate([
                'prescriber_id' => 'nullable|integer',
                'patient_id' => 'required|integer',
                'push_enabled' => 'required|boolean',
                'email_enabled' => 'required|boolean',
            ]);

        }
        
        $config = Configs::create($data);

        return response()->json(new SuccessResource($config), 200);
    }

    public function show(Request $request)
    {
        if ($request->has('prescriber_id')) {

            $data = $request->validate([
                'prescriber_id' => 'required|integer',
            ]);

            $config = Configs::where("prescriber_id", $data["prescriber_id"]);

        } elseif ($request->has('patient_id')) {

            $data = $request->validate([
                'patient_id' => 'required|integer',
            ]);

            $config = Configs::where("patient_id", $data["patient_id"]);

        }

        return response()->json(new SuccessResource($config), 200);
    }

    public function update(Request $request)
    {
        $data = [];
    
        if ($request->has('prescriber_id')) {
            $data = $request->validate([
                'prescriber_id' => 'nullable|integer',
                'push_enabled' => 'required|boolean',
                'email_enabled' => 'required|boolean',
            ]);
            $config = Configs::where("prescriber_id", $data["prescriber_id"])->first();
        } elseif ($request->has('patient_id')) {
            $data = $request->validate([
                'patient_id' => 'nullable|integer',
                'push_enabled' => 'required|boolean',
                'email_enabled' => 'required|boolean',
            ]);
            $config = Configs::where("patient_id", $data["patient_id"])->first();
        }
    
        if (!$config) {
            return response()->json(['message' => 'Config not found'], 404);
        }
    
        $config->update($data);
    
        // Fetch the updated model from the database
        $updatedConfig = Configs::find($config->id);
    
        return response()->json(new SuccessResource($updatedConfig), 200);
    }
}
