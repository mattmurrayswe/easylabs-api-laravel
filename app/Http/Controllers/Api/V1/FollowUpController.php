<?php

namespace App\Http\Controllers\Api\V1;

use App\Events\MessagesEvent;
use App\Events\SininhoEvent;
use App\Http\Controllers\Controller;
use App\Http\Resources\Api\V1\ErrorResource;
use App\Http\Resources\Api\V1\SuccessResource;
use App\Models\FollowUp;
use App\Models\Messages;
use App\Models\MessagesToPrescriber;
use App\Models\Patient;
use App\Models\PatientMessagesAdmin;
use App\Models\PatientMessagesPrescriber;
use App\Models\PrescriberMessagesAdmin;
use App\Models\PrescriberMessagesPatient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $validatedData = $request->validate([
            'message' => 'required',
            'patient_id' => 'required|exists:patients,id'
        ]);

        $message = PatientMessagesPrescriber::create(array_merge($validatedData, [
            'prescriber_id' => Auth::guard("webPresc")->id(),
            'sentby' => 'presc'
        ]));

        return response()->json(
            ['message' => 'Mensagem enviada com sucesso', 'data' => $message],
            201
        );
    }    

    public function patientMessagesPrescriber(Request $request)
    {
        $validatedData = $request->validate([
            'message' => 'required',
            'prescriber_id' => 'required|exists:prescribers,id'
        ]);

        $message = PatientMessagesPrescriber::create(array_merge($validatedData, [
            'patient_id' => Auth::guard("webPatient")->id(),
            'sentby' => 'patient'
        ]));

        $patient = Patient::where("id", Auth::guard('webPatient')->id())->first();

        event(new SininhoEvent(
            [
                'message' => "Nova mensagem do paciente {$patient->name}",
            ],
        ));

        event(new MessagesEvent(
            $request->message,
            true,
            Auth::guard('webPatient')->id(),
            $patient->room_id
        ));

        return response()->json(
            ['message' => 'Mensagem enviada com sucesso', 'data' => $message],
            201
        );
    }

    public function listMessagesForPrescriber(Request $request)
    {
        $messages = PatientMessagesPrescriber::where([
            'prescriber_id' => Auth::guard('webPresc')->id(),
            'patient_id' => $request->patient_id
        ])->get();

        return response()->json(['data' => $messages]);
    }

    public function listMessagesForPatient()
    {
        $messages = PatientMessagesPrescriber::where('patient_id', Auth::guard('webPatient')->id())->get();

        return response()->json(['data' => $messages]);
    }

    public function markAsRead(Request $request)
    {
        try {
            
            $request->validate([
                "messages_ids" => "required|array",
                "messages_ids.*" => ["required", "integer"],
            ]);
    
            PatientMessagesPrescriber::whereIn("id", $request->messages_ids)->update(['status' => 'read']);
    
            $messages = PatientMessagesPrescriber::whereIn("id", $request->messages_ids)->get();
    
            return response()->json(['messages' => 'Messages marked as read', 'updated' => $messages]);

        } catch (\Throwable $th) {
            
            return response()->json($th->getMessage(), 500);
        }
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
