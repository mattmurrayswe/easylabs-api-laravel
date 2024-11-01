<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\ClinicAdress;
use App\Models\Clinics;
use App\Models\Diagnoses;
use App\Models\Medicine;
use App\Models\Messages;
use App\Models\Patient;
use App\Models\PatientMessagesAdmin;
use App\Models\Permissao;
use App\Models\Pharmacy;
use App\Models\Prescriber;
use App\Models\PrescriberMessagesAdmin;
use App\Models\Symptoms;
use App\Presenter\Diagnoses as PresenterDiagnoses;
use App\Presenter\Documents;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;

class ViewsAdminController extends Controller
{
    public function testWebsocket(Request $request)
    {
        return view('test-websocket'); 
    }

    public function cadastroSintomas(Request $request)
    {
        $search = $request->input('search');
        $query = Symptoms::query();
    
        if ($search) {
            $query->where(function($subquery) use ($search) {
                $subquery->where('name', 'like', '%' . $search . '%') // Search by symptom name
                         ->orWhere('id', $search); // Search by symptom id
            });
        }
    
        $symptoms = $query->paginate(10);
    
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
    
        $medicines = $query->paginate(10);
        
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
    
        $diagnosesPaginator = $query->paginate(10);
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
            'diagnosesPresenter' => $diagnoses,
            'diagnoses' => $diagnosesPaginator,
            'symptoms' => $symptoms,
            'medicines' => $medicines,
            'search' => $search // Pass the search term to the view
        ]);
    }

    public function validacaoDocumentos(Request $request)
    {
        $search = $request->input('search');
    
        $query = Prescriber::where(function ($query) {
            $query->where(function ($query) {
                $query->where([
                    ["uploaded_crm_frente", "!=", "false"],
                    ["uploaded_crm_verso", "!=", "false"],
                    ["uploaded_selfie_com_doc", "!=", "false"],
                ]);
            })->where(function ($query) {
                $query->orWhere([
                    ["ok_crm_frente", "=", ""]
                ])->orWhere([
                    ["ok_crm_verso", "=", ""]
                ])->orWhere([
                    ["ok_selfie_com_doc", "=", ""]
                ]);
            });
        });
    
        if ($search) {
            $query->where(function($subquery) use ($search) {
                $subquery->where('id', 'like', '%' . $search . '%')
                         ->orWhere('name', 'like', '%' . $search . '%');
            });
        }
    
        $prescribersPaginator = $query->paginate(10);
        $prescribers = Documents::concatDocumentosPendentes($prescribersPaginator);
    
        return view('validacao-documentos', [
            "prescribers" => $prescribers,
            "prescribersPaginator" => $prescribersPaginator,
            "search" => $search
        ]);
    }

    public function configPushs()
    {
        return view('config-pushs');
    }

    public function farmaciasParceiras(Request $request)
    {
        $search = $request->input('search');
    
        $query = Pharmacy::query();
    
        if ($search) {
            $query->where(function($subquery) use ($search) {
                $subquery->where('id', 'like', '%' . $search . '%') // Search by pharmacy id
                         ->orWhere('unidade', 'like', '%' . $search . '%') // Search by pharmacy unidade
                         ->orWhere('rede', 'like', '%' . $search . '%') // Search by pharmacy rede
                         ->orWhere('email', 'like', '%' . $search . '%') // Search by pharmacy email
                         ->orWhere('cep', 'like', '%' . $search . '%'); // Search by pharmacy cep
                // You can add more conditions here based on your needs
            });
        }
    
        $clinics = $query->paginate(10);
    
        return view('farmacias-parceiras', [
            "clinics" => $clinics,
            "search" => $search
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
        $search = $request->input('search');
    
        $prescribersQuery = Prescriber::with("permissao");
        $patientsQuery = Patient::with("permissao");

        if ($search) {
            $lowerSearch = strtolower($search); // Convert the search term to lowercase

            if ($lowerSearch == 'prescritor') {
                $lowerSearch = 'prescriber';
            } elseif ($lowerSearch == 'paciente') {
                $lowerSearch = 'patient';
            }

            $prescribersQuery->where(function ($subquery) use ($lowerSearch) {
                $subquery->whereRaw('LOWER(name) like ?', ['%' . $lowerSearch . '%'])
                    ->orWhereHas('permissao', function ($query) use ($lowerSearch) {
                        $query->whereRaw('LOWER(name) like ?', ['%' . $lowerSearch . '%']);
                    })
                    ->orWhereRaw('LOWER(cpf) like ?', ['%' . $lowerSearch . '%'])
                    ->orWhereRaw('LOWER(email) like ?', ['%' . $lowerSearch . '%'])
                    ->orWhere('id_permissao', $lowerSearch);
            });

            $patientsQuery->where(function ($subquery) use ($lowerSearch) {
                $subquery->whereRaw('LOWER(name) like ?', ['%' . $lowerSearch . '%'])
                    ->orWhereHas('permissao', function ($query) use ($lowerSearch) {
                        $query->whereRaw('LOWER(name) like ?', ['%' . $lowerSearch . '%']);
                    })
                    ->orWhereRaw('LOWER(cpf) like ?', ['%' . $lowerSearch . '%'])
                    ->orWhereRaw('LOWER(email) like ?', ['%' . $lowerSearch . '%'])
                    ->orWhere('id_permissao', $lowerSearch);
            });
        }

        $prescribers = $prescribersQuery->get();
        $patients = $patientsQuery->get();
    
        $prescribers->transform(function ($prescriber) {
            $prescriber['user_type'] = 'prescriber';
            return $prescriber;
        });
    
        $patients->transform(function ($patient) {
            $patient['user_type'] = 'patient';
            return $patient;
        });
    
        $userCounter = 1;
    
        $prescribers->transform(function ($prescriber) use (&$userCounter) {
            $prescriber['unique_id'] = $userCounter;
            $userCounter++;
            return $prescriber;
        });
    
        $patients->transform(function ($patient) use (&$userCounter) {
            $patient['unique_id'] = $userCounter;
            $userCounter++;
            return $patient;
        });

        $users = $prescribers->concat($patients);

        // Manual Pagination Logic
        $perPage = 10; // You can adjust the number of users per page
        $currentPage = $request->input('page', 1); // Get the current page from the query parameter
        $offset = ($currentPage - 1) * $perPage;

        $usersPaginated = $users->slice($offset, $perPage);

        $totalItems = $users->count();
        $lastPage = ceil($totalItems / $perPage);

        $paginatorLinks = []; // Initialize an array to store paginator links

        // Construct paginator links using a loop
        for ($i = 1; $i <= $lastPage; $i++) {
            $paginatorLinks[] = [
                'page' => $i,
                'url' => request()->fullUrlWithQuery(['page' => $i, 'search' => $search]),
                'isCurrent' => $i == $currentPage,
            ];
        }
        // Include the new code snippet here
        $paginationInfo = [
            'startItem' => $offset + 1,
            'endItem' => $offset + $usersPaginated->count(),
            'totalItems' => $totalItems,
        ];

        return view('listar-usuarios', [
            "users" => $usersPaginated,
            "search" => $search,
            "currentPage" => $currentPage,
            "perPage" => $perPage,
            "totalItems" => $totalItems,
            "lastPage" => $lastPage,
            "paginatorLinks" => $paginatorLinks, // Pass the paginator links to the view
            "paginationInfo" => $paginationInfo, // Pass the pagination info to the view
        ]);
    }

    public function permissoes()
    {
        $permissao = Permissao::all();

        return view('permissoes', [
            "permissao" => $permissao
        ]);
    }

    public function mensagens(Request $request)
    {
        $search = $request->input('search');
    
        // Get the latest messages for each patient
        $latestPatientMessages = PatientMessagesAdmin::groupBy('patient_id')
            ->selectRaw('MAX(id) as max_id')
            ->pluck('max_id');
    
        // Get the latest messages for each prescriber
        $latestPrescriberMessages = PrescriberMessagesAdmin::groupBy('prescriber_id')
            ->selectRaw('MAX(id) as max_id')
            ->pluck('max_id');
    
        // Initialize query objects for the latest messages
        $latestMessagesToPatientsQuery = PatientMessagesAdmin::whereIn('id', $latestPatientMessages);
        $latestMessagesToPrescribersQuery = PrescriberMessagesAdmin::whereIn('id', $latestPrescriberMessages);
    
        if ($search) {
            // If there's a search query, filter the messages
            $latestMessagesToPatientsQuery->where(function ($query) use ($search) {
                $query->where('patient_name', 'LIKE', '%' . $search . '%')
                    ->orWhere('message', 'LIKE', '%' . $search . '%');
            });
    
            $latestMessagesToPrescribersQuery->where(function ($query) use ($search) {
                $query->where('prescriber_name', 'LIKE', '%' . $search . '%')
                    ->orWhere('message', 'LIKE', '%' . $search . '%');
            });
        }
    
        // Get the latest messages for patients and prescribers based on the query
        $latestMessagesToPatients = $latestMessagesToPatientsQuery->get();
        $latestMessagesToPrescribers = $latestMessagesToPrescribersQuery->get();
    
        // Create an incremental chat ID variable
        $chatId = 1;
    
        // Add 'name' and 'entity' fields to each message for Patient Messages
        $latestMessagesToPatients = $latestMessagesToPatients->map(function ($message) use (&$chatId) {
            $message->name = $message->patient_name;
            $message->entity = 'Paciente';
            $message->entity_original = 'patient';
            $message->chat_id = $chatId; // Unique incremental chat ID
            $message->chat = PatientMessagesAdmin::where('patient_id', $message->patient_id)->get(); // Unique incremental chat ID
            $chatId++; // Increment the chat ID
            return $message;
        });
    
        // Add 'name' and 'entity' fields to each message for Prescriber Messages
        $latestMessagesToPrescribers = $latestMessagesToPrescribers->map(function ($message) use (&$chatId) {
            $message->name = $message->prescriber_name;
            $message->entity = 'Prescritor';
            $message->entity_original = 'prescriber';
            $message->chat_id = $chatId; // Unique incremental chat ID
            $message->chat = PrescriberMessagesAdmin::where('prescriber_id', $message->prescriber_id)->get(); // Unique incremental chat ID
            $chatId++; // Increment the chat ID
            return $message;
        });
    
        // Merge the two collections
        $messages = $latestMessagesToPatients->concat($latestMessagesToPrescribers);
    
        return view('mensagens', [
            'messages' => $messages,
            'search' => $search,
        ]);
    }
}
