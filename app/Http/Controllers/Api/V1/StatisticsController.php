<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\V1\ErrorResource;
use App\Http\Resources\Api\V1\SuccessResource;
use App\Models\FollowUp;
use Illuminate\Http\Request;

class StatisticsController extends Controller
{

    public function showProdutoIndicadoPorDiagnostico(Request $request)
    {
        try {
            $data = [
                "Epilepsia" => [
                    "Produto 1" => 10,
                    "Produto 2" => 35
                ],
                "Ansiedade" => [
                    "Produto 1" => 20,
                    "Produto 2" => 40
                ],
                "Parkinson" => [
                    "Produto 1" => 40,
                    "Produto 2" => 10
                ],
                "Alzheimer" => [
                    "Produto 1" => 20,
                    "Produto 2" => 60
                ]
            ];

            return response()->json(new SuccessResource($data), 200);

        } catch (\Throwable $th) {

            return response()->json(new ErrorResource($th->getMessage()), 422);
            
        }
    }    

    public function showPercepcaoDeMelhora($id, Request $request)
    {
        try {

            var_dump($id);die;
            var_dump($request->all());die;

            return response()->json(new SuccessResource('teste'), 200);

        } catch (\Throwable $th) {
            
            return response()->json(new ErrorResource($th->getMessage()), 422);

        }
    }    
}
