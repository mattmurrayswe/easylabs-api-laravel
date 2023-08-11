<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
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
        $symptoms = Symptoms::paginate(30);

        return view('cadastro-sintomas', [ 
            'sintomas' => $symptoms
        ]);
    }

    public function cadastroMedicamentos()
    {
        $medicines = Medicine::paginate(5);

        return view('cadastro-medicamentos', [ 
            'medicamentos' => $medicines
        ]);
    }

    public function cadastroDiagnosticos()
    {
        $diagnosesPaginator = Diagnoses::with(["hasSymptoms.symptom", "hasSuggestedMedicines.medicine"])->paginate(5);
    
        $diagnoses = $diagnosesPaginator->items(); // Get the paginated items as an array
    
        $diagnoses = PresenterDiagnoses::concatSymptoms($diagnoses);
    
        $symptoms = Symptoms::all([
            "id",
            "name"
        ]);
    
        $medicines = Medicine::all([
            "id",
            "name"
        ]);
    
        return view('cadastro-diagnosticos', [
            'diagnoses' => $diagnosesPaginator,
            'symptoms' => $symptoms,
            'medicines' => $medicines
        ]);
    }

    public function validacaoDocumentos()
    {
        $prescribersPaginator = Prescriber::where([
            ["uploaded_crm_frente", "!=","false"],
            ["uploaded_crm_verso", "!=","false"],
            ["uploaded_selfie_com_doc", "!=","false"]
        ])->paginate(5);
        
        $prescribers = Documents::concatDocumentosPendentes($prescribersPaginator);
        
        return view('validacao-documentos', [
            "prescribers" => $prescribers,
            "prescribersPaginator" => $prescribersPaginator
        ]);
    }

    public function configPushs()
    {
        return view('config-pushs');
    }

    public function farmaciasParceiras()
    {
        $clinics = Pharmacy::all();

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
        $admins = Admin::all();
    
        $users = $prescribers->concat($patients);
        $users = $users->concat($admins);

        $medicines = Medicine::all();

        $diagnoses = Diagnoses::all();



        return view('extracaodados', [
            "prescribers" => $prescribers->count(),
            "patients" => $patients->count(),
            "total" => $users->count(),
            "medicines" => $medicines->count(),
            "diagnoses" => $diagnoses->count(),
            "admins" => $admins->count(),
        ]);
    }
    
    public function listarUsuarios()
    {
        // Get the prescribers and patients separately
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
    
        // Initialize a single counter for both prescribers and patients
        $userCounter = 1;
    
        // Add a unique numeric identifier to each user
        $prescribers = $prescribers->map(function ($prescriber) use (&$userCounter) {
            $prescriber['unique_id'] = $userCounter;
            $userCounter++;
            return $prescriber;
        });
    
        $patients = $patients->map(function ($patient) use (&$userCounter) {
            $patient['unique_id'] = $userCounter;
            $userCounter++;
            return $patient;
        });
    
        // Concatenate the prescribers and patients into a single collection
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
