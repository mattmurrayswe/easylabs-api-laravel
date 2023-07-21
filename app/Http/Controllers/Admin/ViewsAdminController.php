<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ClinicAdress;
use App\Models\Clinics;
use App\Models\Diagnoses;
use App\Models\Medicine;
use App\Models\Patient;
use App\Models\Permissao;
use App\Models\Pharmacy;
use App\Models\Prescriber;
use App\Models\Symptoms;
use App\Presenter\Diagnoses as PresenterDiagnoses;
use App\Presenter\Documents;

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
        $prescribers = Prescriber::where([
            "uploaded_crm_frente" => "true",
            "uploaded_crm_verso" => "true",
            "uploaded_selfie_com_doc" => "true",
            "uploaded_foto_perfil" => "true",
        ])->get([
            "id",
            "name",
            "ok_crm_frente",
            "ok_crm_verso",
            "ok_selfie_com_doc",
            "ok_foto_perfil",
        ]);
        
        $prescribers = Documents::concatDocumentosPendentes($prescribers);
        
        return view('validacao-documentos', [
            "prescribers" => $prescribers
        ]);
    }

    public function configPushs()
    {
        return view('config-pushs');
    }

    public function farmaciasParceiras()
    {
        $clinics = Pharmacy::all([
            "id",
            "cep",
            "street",
            "number",
            "complement",
            "neighboor",
            "city",
            "state",
            "name",
            "rede",
            "email"
        ]);

        return view('farmacias-parceiras', [
            "clinics" => $clinics
        ]);
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
        $prescribers = Prescriber::with("permissao")->get();
        $patients = Patient::with("permissao")->get();
    
        // Add a user_type attribute to differentiate between prescribers and patients
        $prescribers = $prescribers->map(function ($prescriber) {
            $prescriber['user_type'] = 'prescriber';
            return $prescriber;
        });
    
        $patients = $patients->map(function ($patient) {
            $patient['user_type'] = 'patient';
            return $patient;
        });
    
        // Add a unique numeric identifier to each user
        $prescribers = $prescribers->map(function ($prescriber) {
            $prescriber['unique_id'] = $prescriber->id; // Assuming 'id' is the auto-incrementing primary key for Prescriber model
            return $prescriber;
        });
    
        $patients = $patients->map(function ($patient) {
            $patient['unique_id'] = $patient->id; // Assuming 'id' is the auto-incrementing primary key for Patient model
            return $patient;
        });
    
        $users = $prescribers->concat($patients);

        $medicines = Medicine::all();

        $diagnoses = Diagnoses::all();


        return view('extracaodados', [
            "prescribers" => $prescribers->count(),
            "patients" => $patients->count(),
            "total" => $users->count(),
            "medicines" => $medicines->count(),
            "diagnoses" => $diagnoses->count(),
        ]);
    }
    
    public function listarUsuarios()
    {
        $prescribers = Prescriber::with("permissao")->get();
        $patients = Patient::with("permissao")->get();
    
        // Add a user_type attribute to differentiate between prescribers and patients
        $prescribers = $prescribers->map(function ($prescriber) {
            $prescriber['user_type'] = 'prescriber';
            return $prescriber;
        });
    
        $patients = $patients->map(function ($patient) {
            $patient['user_type'] = 'patient';
            return $patient;
        });
    
        // Add a unique numeric identifier to each user
        $prescribers = $prescribers->map(function ($prescriber) {
            $prescriber['unique_id'] = $prescriber->id; // Assuming 'id' is the auto-incrementing primary key for Prescriber model
            return $prescriber;
        });
    
        $patients = $patients->map(function ($patient) {
            $patient['unique_id'] = $patient->id; // Assuming 'id' is the auto-incrementing primary key for Patient model
            return $patient;
        });
    
        $users = $prescribers->concat($patients);
    
        return view('listar-usuarios', [
            "users" => $users
        ]);
    }
    
    public function permissoes()
    {
        $permissao = Permissao::all();

        return view('permissoes', [
            "permissao" => $permissao
        ]);
    }
}
