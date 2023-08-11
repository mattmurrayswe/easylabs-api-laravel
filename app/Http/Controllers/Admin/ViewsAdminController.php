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
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class ViewsAdminController extends Controller
{
    public function cadastroSintomas(Request $request)
    {
        $search = $request->input('search');
        $query = Symptoms::query();
    
        if ($search) {
            $query->where('name', 'like', '%' . $search . '%');
        }
    
        $symptoms = $query->paginate(30);
    
        return view('cadastro-sintomas', [ 
            'sintomas' => $symptoms,
            'search' => $search
        ]);
    }
    public function cadastroMedicamentos(Request $request)
    {
        $search = $request->input('search');
        $query = Medicine::query();        
    
        if ($search) {
            $query->where(function($subquery) use ($search) {
                $subquery->where('id', 'like', '%' . $search . '%')
                         ->orWhere('name', 'like', '%' . $search . '%')
                         ->orWhere('presentation', 'like', '%' . $search . '%')
                         ->orWhere('concentration', 'like', '%' . $search . '%')
                         ->orWhere('volume_flask', 'like', '%' . $search . '%')
                         ->orWhere('formulation', 'like', '%' . $search . '%')
                         ->orWhere('lab', 'like', '%' . $search . '%');
            });
        }
    
        $medicines = $query->paginate(30);
        
        return view('cadastro-medicamentos', [ 
            'medicamentos' => $medicines,
            'search' => $search
        ]);
    }
    
    public function cadastroDiagnosticos(Request $request)
    {
        $search = $request->input('search');
    
        // Query to fetch diagnoses with related data
        $query = Diagnoses::with(["hasSymptoms.symptom", "hasSuggestedMedicines.medicine"]);
    
        if ($search) {
            // Add a condition to search for diagnoses based on some criteria (e.g., id, name, symptoms, medicines, etc.)
            $query->where(function($subquery) use ($search) {
                $subquery->where('id', 'like', '%' . $search . '%') // Search by diagnosis id
                         ->orWhere('name', 'like', '%' . $search . '%'); // Search by diagnosis name
                // You can add more conditions here based on your needs, like symptoms, medicines, etc.
            });
        }
    
        $diagnosesPaginator = $query->paginate(30);
        $diagnoses = $diagnosesPaginator->items(); // Get the paginated items as an array
    
        // Your existing code to concatenate symptoms
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
            'medicines' => $medicines,
            'search' => $search // Pass the search term to the view
        ]);
    }

    public function validacaoDocumentos()
    {
        $prescribersPaginator = Prescriber::where([
            ["uploaded_crm_frente", "!=","false"],
            ["uploaded_crm_verso", "!=","false"],
            ["uploaded_selfie_com_doc", "!=","false"]
        ])->paginate(30);
        
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
        $clinics = Pharmacy::paginate(30);

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

    public function listarUsuarios(Request $request)
    {
        // Define the number of items per page
        $perPage = 15; // You can adjust this value as needed

        // Get the prescribers and patients separately with pagination
        $prescribers = Prescriber::with("permissao")->paginate($perPage);
        $patients = Patient::with("permissao")->paginate($perPage);

        // Add a user_type attribute to differentiate between prescribers and patients
        $prescribers->getCollection()->transform(function ($prescriber) {
            $prescriber['user_type'] = 'prescriber';
            return $prescriber;
        });

        $patients->getCollection()->transform(function ($patient) {
            $patient['user_type'] = 'patient';
            return $patient;
        });

        // Initialize a single counter for both prescribers and patients
        $userCounter = ($prescribers->currentPage() - 1) * $perPage + 1;

        // Add a unique numeric identifier to each user
        $prescribers->getCollection()->transform(function ($prescriber) use (&$userCounter) {
            $prescriber['unique_id'] = $userCounter;
            $userCounter++;
            return $prescriber;
        });

        $patients->getCollection()->transform(function ($patient) use (&$userCounter) {
            $patient['unique_id'] = $userCounter;
            $userCounter++;
            return $patient;
        });

        // Concatenate the prescribers and patients into a single collection
        $users = $prescribers->concat($patients);

        return view('listar-usuarios', [
            "users" => $users,
            "prescribers" => $prescribers,
            "patients" => $patients,
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
