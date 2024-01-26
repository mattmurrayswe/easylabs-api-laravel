<?php

namespace App\Http\Controllers\Api\V1;

use App\Events\MessagesEvent;
use App\Events\MyEvent;
use App\Events\SininhoEvent;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
    
    public function testSininho(Request $request)
    {
        try {
            
            event(new MessagesEvent(
                "Bom dia! Consegue confirmar minha consulta?",
                true,
                3,
                3
            ));

            return response()->json(
                "Teste de sininho realizado com sucesso",
                200
            );

        } catch (\Throwable $th) {

            return response()->json($th->getMessage(), 422);

        }
    } 
}
