<?php

namespace App\Http\Controllers\Api\V1;

use App\Events\MyEvent;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    
    public function testChat(Request $request)
    {
        try {

            event(new MyEvent('hello world'));

            return response()->json(
                "Teste realizado com sucesso",
                200
            );

        } catch (\Throwable $th) {

            return response()->json($th->getMessage(), 422);

        }
    } 
}
