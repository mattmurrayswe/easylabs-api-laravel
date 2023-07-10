<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\V1\ErrorResource;
use App\Http\Resources\Api\V1\SuccessResource;
use App\Models\FollowUp;
use App\Models\MessagesToPrescriber;
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

    public function messageToPrescriber(Request $request)
    {
        try {
            $message = MessagesToPrescriber::create($request->all());
            return response()->json(new SuccessResource($message), 200);
        } catch (\Throwable $th) {
            return response()->json(new ErrorResource($th->getMessage()), 422);
        }
    }    

    public function readMessagesToPrescriber(Request $request)
    {
        try {
            $messages = MessagesToPrescriber::
                where('patient_id', $request['patient_id'])->get()->toArray();
            return response()->json(new SuccessResource($messages), 200);
        } catch (\Throwable $th) {
            return response()->json(new ErrorResource($th->getMessage()), 422);
        }
    }    
}
