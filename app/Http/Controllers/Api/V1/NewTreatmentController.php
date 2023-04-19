<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\NewTreatment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\V1\Treatment\StoreNewTreatmentRequest;
use App\Http\Resources\Api\V1\ErrorResource;
use App\Http\Resources\Api\V1\SuccessResource;

class NewTreatmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreNewTreatmentRequest $request)
    {
        try {
            $treatment = NewTreatment::create($request->all());
            return response()->json(new SuccessResource($treatment), 200);
        } catch (\Throwable $th) {
            return response()->json(new ErrorResource($th), 422);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storePresc(StoreNewTreatmentRequest $request)
    {
        try {
            $treatment = NewTreatment::create($request->all());
            return response()->json(new SuccessResource($treatment), 200);
        } catch (\Throwable $th) {
            return response()->json(new ErrorResource($th), 422);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        try {
            $treatment = NewTreatment::with('patient')->where('id', $id)->get()->first();
            return response()->json(new SuccessResource($treatment), 200);
        } catch (\Throwable $th) {
            return response()->json(new ErrorResource('Nenhum tratamento encontrado'), 422);
        }
    }

    /**
     * Display the specified resource.
     */
    public function showPresc($id)
    {
        try {
            $treatment = NewTreatment::with('patient')->where('id', $id)->get()->first();
            return response()->json(new SuccessResource($treatment), 200);
        } catch (\Throwable $th) {
            return response()->json(new ErrorResource('Nenhum tratamento encontrado'), 422);
        }
    }

    /**
     * Display all resources.
     */
    public function getAllTreatment()
    {
        try {
            $treatment = NewTreatment::with('patient')->get();
            return response()->json(new SuccessResource($treatment), 200);
        } catch (\Throwable $th) {
            return response()->json(new ErrorResource($th), 422);
        }
        
    }

    /**
     * Display all resources.
     */
    public function getAllTreatmentPresc()
    {
        try {
            $treatment = NewTreatment::with('patient')->get();
            return response()->json(new SuccessResource($treatment), 200);
        } catch (\Throwable $th) {
            return response()->json(new ErrorResource($th), 422);
        }
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(NewTreatment $newTreatment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreNewTreatmentRequest $request, $id)
    {
        try {
            
            $treatment = NewTreatment::findOrFail($id);
            $treatment->update($request->all()); 
            return response()->json(new SuccessResource($treatment), 200);

        } catch (\Throwable $th) {
            return response()->json(new ErrorResource('Paciente ou tratamento nao encontrado'), 422);

        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function updatePresc(StoreNewTreatmentRequest $request, $id)
    {
        try {
            
            $treatment = NewTreatment::findOrFail($id);
            $treatment->update($request->all()); 
            return response()->json(new SuccessResource($treatment), 200);

        } catch (\Throwable $th) {
            return response()->json(new ErrorResource('Paciente ou tratamento nao encontrado'), 422);

        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $treament = NewTreatment::findOrFail($id)->delete();
            return response()->json(new SuccessResource($treament), 200);
        } catch (\Throwable $th) {
            return response()->json(new ErrorResource('Nenhum tratamento encontrado'), 422);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroyPresc($id)
    {
        try {
            $treament = NewTreatment::findOrFail($id)->delete();
            return response()->json(new SuccessResource($treament), 200);
        } catch (\Throwable $th) {
            return response()->json(new ErrorResource('Nenhum tratamento encontrado'), 422);
        }
    }
}
