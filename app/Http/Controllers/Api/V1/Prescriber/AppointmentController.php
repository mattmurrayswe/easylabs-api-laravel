<?php

namespace App\Http\Controllers\Api\V1\Prescriber;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\V1\ErrorResource;
use App\Http\Resources\Api\V1\SuccessResource;
use App\Models\Appointment;
use App\Models\Availability;
use App\Models\ClinicAdress;
use App\Models\Patient;
use App\Notifications\SendPatientScheduledAppointment;
use App\Notifications\SendPatientUncheckedAppointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class AppointmentController extends Controller
{
    public function createAppointment(Request $request)
    {
        $request->validate([
            'patient_id' => "required|exists:patients,id",
            'appointment_date' => "required|date_format:Y-m-d|after:today",
            'appointment_time' => 'required' 
        ]);
        
        $appointmentTime = 60*60; // Configuracao de tempo de consulta ( 1 hora )

        // Funcao para pegar o horario de finalizacao da consulta
        $timestamp = strtotime($request->appointment_time) + $appointmentTime;
        $endAppointmentTime = date('H:i', $timestamp);
        // echo $endAppointmentTime;//11:09

        // funcao para pegar o dia da semana 
        $carbonDate = Carbon::parse($request->appointment_date);
        $desiredWeekDay = $carbonDate->dayOfWeek; 

        // Se for domingo ( 0 ) atribuir valor 7
        if ($desiredWeekDay == 0) {
            $desiredWeekDay = 7;
        }

        // funcao para validar se o horario é PM ou AM
        if (Carbon::parse($request->appointment_time)->format('a') === 'am') {
            $period = 1; // 1 se for AM
        } else {
            $period = 2; // 2 se for PM
        }

        // funcao para pegar qual range de horario que o medico atende de acordo com o dia 
        $availabilityDates = Availability::where('prescriber_id', Auth::guard("webPresc")->user()->id)->where('day_id', $desiredWeekDay)->where('period_id', $period)->first();

        // Valida se tem Availaiblity cadastrado
        if (!$availabilityDates) {
            return response()->json(new ErrorResource('Necessario configurar datas de atentimento'), 422);
        }

        // Valida se a consulta e presencial x telemedicina e se tem endereco de clinica cadastrado
        if ($request->type == 'presencial' && !Auth::guard("webPresc")->user()->clinic_address) {
            return response()->json(new ErrorResource('Necessario configurar endereco de clinica para atentimento'), 422);

        }

        // Valida se o horario desejado para consulta entre dentro dos parametros que o doutor atende
        if  (
            Carbon::parse($request->appointment_time)->gte(Carbon::parse($availabilityDates['start_time'])) &&
            Carbon::parse($request->appointment_time)->lte(Carbon::parse($availabilityDates['end_time'])) &&
            Carbon::parse($endAppointmentTime)->lte(Carbon::parse($availabilityDates['end_time']))
        ) {

            if (
                Appointment::where('prescriber_id', Auth::guard("webPresc")->user()->id)
                    ->where('patient_id', $request->patient_id)
                    ->where('appointment_date', $request->appointment_date)
                    ->where('appointment_time', $request->appointment_time)
                    ->first()
            ) {
                return response()->json(new ErrorResource('Ja existe consulta nesse dia/horario'), 422);
            }

            
            try {
                $createdAppointment = Appointment::create([
                    'patient_id' => $request->patient_id,
                    'prescriber_id' => Auth::guard("webPresc")->user()->id,
                    'description' => $request->description,
                    'appointment_date' => $request->appointment_date,
                    'appointment_time' => $request->appointment_time,
                    'type' => $request->type
                ]);

                $patient = Patient::where('id', $request->patient_id)->get('email')->first();
                $patient->notify(new SendPatientScheduledAppointment($createdAppointment));

                return response()->json(new SuccessResource($createdAppointment), 200);

            } catch (\Throwable $th) {
                return response()->json(new ErrorResource($th->getMessage()), 422);

            }
        }else{
            return response()->json(new ErrorResource('Doutor(a) nao atende nos horarios informados'), 422);

        }

    }


    public function dropAppointment($id)
    {
        $appointment = Appointment::find($id);
        $patient = Patient::where('id', $appointment->patient_id)->get('email')->first();

        try {

            $patient->notify(new SendPatientUncheckedAppointment($appointment));
            $appointment->delete();
            return response()->json(new SuccessResource('Consulta desmarcada com sucesso!'), 200);

        } catch (\Throwable $th) {
            return response()->json(new ErrorResource($th->getMessage()), 422);
        }
    }


    public function nextAppointments()
    {
        $dataAtual = Carbon::now();
        $horaAtual = Carbon::now()->format('H:i:s');

        $appointments = Appointment::where('prescriber_id', Auth::user()->id)
            ->whereDate('appointment_date', '>=', $dataAtual )
            ->get();


        if (count($appointments) == 0) {
            return response()->json(new SuccessResource('Sem consultas futuras'), 200);
        }

        foreach ($appointments as $appointment) {
            $response[] = [
                'id' => $appointment->id,
                'description' => $appointment->description,
                'appointment_date' => $appointment->appointment_date,
                'appointment_time' => $appointment->appointment_time,
                'patient' => $appointment->patient,
                'prescriber' => $appointment->prescritor,
                'type' => $appointment->type,
                'address' => $appointment->type == 'presencial' ? Auth::user()->clinic_address : 'Telemedicina',
            ];
        }

        return response()->json(new SuccessResource($response), 200);

    }

    public function pastAppointments()
    {
        $dataAtual = Carbon::now();

        $appointments = Appointment::where('prescriber_id', Auth::user()->id)
            ->whereDate('appointment_date', '<=', $dataAtual )
            ->orWhere('appointment_done', 1)
            ->get();

        if (count($appointments) == 0) {
            return response()->json(new SuccessResource('Sem consultas realizadas'), 200);
        }

        foreach ($appointments as $appointment) {
            $response[] = [
                'id' => $appointment->id,
                'description' => $appointment->description,
                'appointment_date' => $appointment->appointment_date,
                'appointment_time' => $appointment->appointment_time,
                'patient' => $appointment->patient,
                'prescriber' => $appointment->prescritor,
                'type' => $appointment->type,
                'address' => $appointment->type == 'presencial' ? Auth::user()->clinic_address : 'Telemedicina',
            ];
        }

        return response()->json(new SuccessResource($response), 200);

    }


    public function endAppointment( $id)
    {
        try {

            $appointment = Appointment::find($id);
            $appointment->update([
                'appointment_done' => 1
            ]);
            return response()->json(new SuccessResource('Consulta encerrada'), 200);

        } catch (\Throwable $th) {

            return response()->json(new ErrorResource($th->getMessage()), 422);

        }
    }

}

