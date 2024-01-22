<?php

namespace App\Http\Controllers\Api\V1;

use App\Events\ChatEvent;
use App\Http\Controllers\Controller;
use App\Http\Resources\Api\V1\ErrorResource;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    
    public function testChat(Request $request)
    {
        try {

            event(new ChatEvent("Healthcheck de WS feito com sucesso."));

            return response()->json(
                "Teste realizado com sucesso",
                200
            );

        } catch (\Throwable $th) {

            return response()->json($th->getMessage(), 422);

        }
    } 
}
