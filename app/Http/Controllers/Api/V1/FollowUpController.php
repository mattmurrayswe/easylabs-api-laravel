<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\V1\ErrorResource;
use App\Http\Resources\Api\V1\SuccessResource;
use App\Models\FollowUp;
use App\Models\Messages;
use App\Models\MessagesToPrescriber;
use App\Models\PatientMessagesAdmin;
use App\Models\PrescriberMessagesAdmin;
use App\Models\PrescriberMessagesPatient;
use Illuminate\Http\Request;

class FollowUpController extends Controller
{


    public function store(Request $request)
    {
        try {
            $followup = FollowUp::create($request->all());
            return response()->json(new SuccessResource($followup), 200);
        } catch (\Throwable $th) {
            return response()->json(new ErrorResource($th->getMessage()), 422);
        }
    }

    public function prescriberMessagesAdmin(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'prescriber_id' => 'required|integer',
            'prescriber_name' => 'required|string',
            'message' => 'required|string',
        ]);

        // Create a new message record in the database
        $message = PrescriberMessagesAdmin::create($validatedData);

        // Return a response indicating success
        return response()->json(['message' => 'Message created successfully', 'data' => $message], 201);
    }    

    public function patientMessagesAdmin(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'patient_id' => 'required|integer',
            'patient_name' => 'required|string',
            'is_replying' => 'nullable|bool',
            'message' => 'required|string',
        ]);

        // Create a new message record in the database
        $message = PatientMessagesAdmin::create($validatedData);

        // Return a response indicating success
        return response()->json(['message' => 'Message created successfully', 'data' => $message], 201);
    }    

    public function prescriberMessagesPatient(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'prescriber_id' => 'required|integer',
            'prescriber_name' => 'required|string',
            'patient_id' => 'required|integer',
            'patient_name' => 'required|string',
            'is_replying' => 'nullable|bool',
            'message' => 'required|string',
        ]);

        // Create a new message record in the database
        $message = PrescriberMessagesPatient::create($validatedData);

        // Return a response indicating success
        return response()->json(['message' => 'Message created successfully', 'data' => $message], 201);
    }    

    public function readMessages(Request $request)
    {
        try {
            $messages = Messages::all();
            return response()->json(new SuccessResource($messages), 200);
        } catch (\Throwable $th) {
            return response()->json(new ErrorResource($th->getMessage()), 422);
        }
    }    
}
