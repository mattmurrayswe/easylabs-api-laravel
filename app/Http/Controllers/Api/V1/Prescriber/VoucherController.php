<?php

namespace App\Http\Controllers\Api\V1\Prescriber;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\V1\ErrorResource;
use App\Http\Resources\Api\V1\SuccessResource;
use App\Models\ClinicAdress;
use App\Models\Voucher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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


}
