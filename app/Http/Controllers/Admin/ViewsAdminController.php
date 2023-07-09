<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Medicine;
use App\Models\Symptoms;

class ViewsAdminController extends Controller
{
    public function cadastroSintomas()
    {
        $symptoms = Symptoms::all(
            [
                "id",
                "name"
            ]
        );

        return view('cadastro-sintomas', [ 
            'sintomas' => $symptoms
        ]);
    }

    public function cadastroMedicamentos()
    {
        $medicines = Medicine::all(
            [
                "id",
                "name",
                "presentation",
                "concentration",
                "volume_flask",
                "formulation",
                "lab",
            ]
        );

        return view('cadastro-medicamentos', [ 
            'medicamentos' => $medicines
        ]);
    }
}
