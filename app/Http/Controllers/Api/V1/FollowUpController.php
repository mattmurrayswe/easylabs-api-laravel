<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\V1\ErrorResource;
use App\Http\Resources\Api\V1\SuccessResource;
use App\Models\FollowUp;
use Illuminate\Http\Request;

class FollowUpController extends Controller
{


    public function store(Request $request)
    {
        try {
            $followup = FollowUp::create($request->all());
            return response()->json(new SuccessResource($followup), 200);
        } catch (\Throwable $th) {
            return response()->json(new ErrorResource($th), 422);
        }
    }

    
}
