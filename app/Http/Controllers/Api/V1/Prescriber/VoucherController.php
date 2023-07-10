<?php

namespace App\Http\Controllers\Api\V1\Prescriber;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\V1\ErrorResource;
use App\Http\Resources\Api\V1\SuccessResource;
use App\Models\Patient;
use App\Models\Voucher;
use App\Models\VoucherLog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class VoucherController extends Controller
{

    public function getVoucher()
    {
        return response()->json(new SuccessResource(Auth::user()->vouchers), 200);

    }
    public function getVoucherPerId($id)
    {
        try {
            
            $voucher = Voucher::findOrFail($id);
            return response()->json(new SuccessResource($voucher), 200);

        } catch (\Throwable $th) {
            return response()->json(new ErrorResource('Voucher nao encontrado'), 422);

        }
    }

    public function createVoucher(Request $request)
    {
        try {

            Voucher::create($request->all());

            return response()->json(new SuccessResource('Voucher cadastrado com sucesso'), 200);

        } catch (\Throwable $th) {

            return response()->json(new ErrorResource($th->getMessage()), 422);

        }
    }

    public function updateVoucher($id, Request $request)
    {
        try {

            $voucher = Voucher::findOrFail($id);
            $voucher->update($request->all());

            return response()->json(new SuccessResource('Voucher editado com sucesso'), 200);

        } catch (\Throwable $th) {

            return response()->json(new ErrorResource($th->getMessage()), 422);

        }
    }

    public function deleteVoucher($id)
    {
        try {

            $voucher = Voucher::findOrFail($id);
            $voucher->delete();

            return response()->json(new SuccessResource('Voucher deletado com sucesso'), 200);

        } catch (\Throwable $th) {

            return response()->json(new ErrorResource($th->getMessage()), 422);

        }
    }

    public function useVoucher(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'voucher_code' => 'required',
            'patient_id' => 'required|exists:patients,id',
            'prescriber_id' => 'required|exists:prescribers,id',
        ]);
         
        if ($validator->fails()) {
            return response()->json(new ErrorResource($validator->messages()->first()), 422);
        }


        $voucherData = Voucher::where('code', $request->voucher_code)->get()->first(); 
        if ($voucherData == null) {
            return response()->json(new ErrorResource('Voucher nao encontrado'), 422);

        }
        // Validar se o voucher ja expirou
        if ($this->validateExpiredVoucher($voucherData->expiration)) {
            return response()->json(new ErrorResource('Voucher Expirado'), 422);
        }

        // Validar se tem como usos restantes no voucher
        if ($this->validateRemaingUses($voucherData)) {
            return response()->json(new ErrorResource('Voucher sem usos restantes'), 422);
        }

        // Validar se o voucher esta especifico para um paciente
        if ($this->validateSpecificVoucher($voucherData)) {
            // Codigo para validar se o pacient id tem o mesmo do que o do voucher
            // Voucher  especifico
            if ($this->validateIfIsSpecificClient($request->patient_id, $voucherData)) {
                return response()->json(new ErrorResource('Paciente nao pode usar este voucher. Voucher fora disponibilizado para um CPF distinto do paciente.'), 422);
            }
        }
        $uses = $voucherData->uses + 1;
        try {
            $voucherData->update([
                'uses' => $uses++
            ]);
            $voucherData->save();
    
            VoucherLog::create($request->all());

            return response()->json(new SuccessResource($voucherData), 200);


        } catch (\Throwable $th) {
            return response()->json(new ErrorResource($th->getMessage()), 422);

        }
        


        dd($voucherData);
    }
    private function validateIfIsSpecificClient($patient_id, $voucher){
        $patientCpf = Patient::find($patient_id);
        return $patientCpf->cpf != $voucher->cpf;
    }
    private function validateSpecificVoucher($voucher)
    {
        return $voucher->cpf != null ? true : false;
    }

    private function validateRemaingUses($voucher)
    {
        return $voucher->quantity == $voucher->uses ? true : false;
    }
    private function validateExpiredVoucher($expiration)
    {
        $today = date("Y-m-d");
        if ($expiration < $today) {
            return true;
        }
        return false;
    }
}
