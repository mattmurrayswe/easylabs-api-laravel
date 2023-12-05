<?php

namespace App\Http\Controllers\Api\V1\Prescriber;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\V1\ErrorResource;
use App\Http\Resources\Api\V1\SuccessResource;
use App\Models\Appointment;
use App\Models\Availability;
use App\Models\Prescriber;
use Carbon\Carbon;
use DateInterval;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AvailabilityController extends Controller
{
    public function getDisponibilidadeDatas(Request $request)
    {   
        $request->validate(["prescriber_id" => "required|integer"]);
        
        try {

            $prescriber = Prescriber::findOrFail($request->input("prescriber_id"));

            $availability = Availability::with('diaSemana')
                ->with('period')
                ->where('prescriber_id', $request->input("prescriber_id"))
                ->orderBy('day_id')
                ->get();
            
            $response = [
                'id' => $request->input('prescriber_id'),
                'name_prescriber' => $prescriber->name,
                'dates' => []
            ];
    
            foreach ($availability as $item) {
                $dates = [
                    'day' => $item->diaSemana->day,
                    'start_time' => $item->start_time,
                    'end_time' => $item->end_time,
                    'period' => $item->period->period,
                ];
                $response['dates'][] = $dates;
    
            }

            return response()->json($response, 200);

        } catch (\Throwable $th) {

            return response()->json($th->getMessage(), 500);

        }
    }

    public function getDisponibilidadeHorarios(Request $request)
    {
        $request->validate(["data" => "required|date"]);
       
        $dia = $request->input("dia");
        $horas = $request->input("horas");

        $disponibilidades = Availability::whereDate('data', $dia) 
        ->where('hora', $horas) 
        ->get(); 
    
        return response()->json(['data' => $disponibilidades], 200);
    }

    public function getHorarios(Request $request)
    {
        try {

            $request->validate([
                "prescriber_id" => "required|exists:prescribers,id",
                "data" => "required|date"
            ]);
    
            $idWeekDay = Carbon::parse($request->input("data"))->dayOfWeek;

            $availability = Availability::where(
                [
                    'prescriber_id' => $request->input("prescriber_id"),
                    'day_id' => $idWeekDay
                ]
            )->get();

            if ($availability->isEmpty()) {

                return response()->json([
                    "error" => "No availability found for the given prescriber"
                ], 404);
            }

            $appointments = Appointment::where('prescriber_id', $request->input("prescriber_id"))
                ->whereDate('appointment_date', $request->input("data"))
                ->pluck('appointment_time')
                ->toArray();
    
            $start = Carbon::parse($availability[0]->start_time);
            $end = Carbon::parse($availability[0]->end_time);
    
            $slots = [];
    
            while ($start < $end) {
                $slots[] = $start->format('H:i:s');
                $start->add(new DateInterval('PT30M'));
            }
    
            $start = Carbon::parse($availability[1]->start_time);
            $end = Carbon::parse($availability[1]->end_time);
    
            while ($start < $end) {
                $slots[] = $start->format('H:i:s');
                $start->add(new DateInterval('PT30M'));
            }

            $slots = array_diff($slots, $appointments);

            return response()->json($slots, 200);

        } catch (\Throwable $th) {

            return response()->json(["error" => $th->getMessage()], 500);

        }
    }

    public function getDisponibilidadeMedico()
    {
        $availability = Availability::with('diaSemana')
            ->with('period')
            ->where('prescriber_id', Auth::guard("webPresc")->user()->id)
            ->orderBy('day_id')
            ->get();
        
        $response = [
            'id' => Auth::guard("webPresc")->user()->id,
            'name_prescriber' => Auth::guard("webPresc")->user()->name,
            'dates' => []
        ];

        foreach ($availability as $item) {
            $dates = [
                'day' => $item->diaSemana->day,
                'start_time' => $item->start_time,
                'end_time' => $item->end_time,
                'period' => $item->period->period,
            ];
            $response['dates'][] = $dates;

        }
        return response()->json(new SuccessResource($response), 200);
    }

    public function storeDisponibilidadeDatas(Request $request)
    {
        $userId = Auth::guard("webPresc")->user()->id;
        
        try {
            
            foreach ($request['available_dates'] as $dates) {

                $results = Availability::where('prescriber_id', '=', $userId)
                    ->where('day_id', '=', $dates['day_id'])
                    ->where('period_id', '=', $dates['period_id'])
                    ->get('id')->first();

                if ($results) {
                    $available = Availability::find($results['id']);

                    $available->update(
                            [
                                'start_time' => $dates['start_time'],
                                'end_time' => $dates['end_time']
                            ]
                        );

                    }else{

                        Availability::create($dates);
                    }
            }
            
            return response()->json(new SuccessResource('Sucesso!'), 200);

        } catch (\Throwable $th) {

            return response()->json(new ErrorResource($th->getMessage()), 422);
        }
        
    }
}
