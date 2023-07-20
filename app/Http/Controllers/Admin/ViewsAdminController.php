<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Diagnoses;
use App\Models\Medicine;
use App\Models\Symptoms;
use App\Presenter\Diagnoses as PresenterDiagnoses;

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

    public function cadastroDiagnosticos()
    {
        $diagnoses = Diagnoses::with(["hasSymptoms.symptom", "hasSuggestedMedicines.medicine"])->get()->toArray();

        $diagnoses = PresenterDiagnoses::concatSymptoms($diagnoses);

        $symptoms = Symptoms::all(
            [
                "id",
                "name"
            ]
        );

        $medicines = Medicine::all(
            [
                "id",
                "name"
            ]
        );

        return view('cadastro-diagnosticos', [
            'diagnoses' => $diagnoses,
            'symptoms' => $symptoms,
            'medicines' => $medicines
        ]);
    }

    public function validacaoDocumentos()
    {
        return view('validacao-documentos');
    }

    public function configPushs()
    {
        return view('config-pushs');
    }

    public function farmaciasParceiras()
    {
        return view('farmacias-parceiras');
    }

    public function usuarios()
    {
        return view('usuarios');
    }

    public function descontoPromocao()
    {
        return view('desconto-promocao');
    }

    public function extracaoDados()
    {
        return view('extracaodados');
    }


    public function perfilUsuarios()
    {
        return view('perfilusuarios');
    }

    public function niveldePermicao()
    {
        return view('niveldepermicao');
    }
}
