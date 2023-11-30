<?php

use App\Http\Controllers\Api\V1\FollowUpController;
use App\Http\Controllers\Api\V1\MedicineController;
use App\Http\Controllers\Api\V1\NewTreatmentController;
use App\Http\Controllers\Api\V1\Patient\AuthController;
use App\Http\Controllers\Api\V1\Patient\PatientController;
use App\Http\Controllers\Api\V1\Prescriber\PrescriberController;
use App\Http\Controllers\Api\V1\Patient\RecoverController;
use App\Http\Controllers\Api\V1\PatientInformTreatmentController;
use App\Http\Controllers\Api\V1\PatientUsesMedicineController;
use App\Http\Controllers\Api\V1\Prescriber\AppointmentController;
use App\Http\Controllers\Api\V1\Prescriber\AvailabilityController;
use App\Http\Controllers\Api\V1\Prescriber\ClinicAdressController;
use App\Http\Controllers\Api\V1\Prescriber\VoucherController;
use App\Http\Controllers\Api\V1\TreatmentController;
use App\Http\Controllers\Api\V1\PermissaoController;
use App\Http\Controllers\Api\V1\DiagnoseController;
use App\Http\Controllers\Api\V1\PharmacyController;
use App\Http\Controllers\Api\V1\StatisticsController;
use App\Http\Controllers\Api\V1\SymptomsController;
use App\Http\Controllers\Api\V1\ConfigsController;
use App\Http\Controllers\Admin\ExcelExportController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Admin
Route::post('presc/message/admin', [FollowUpController::class, 'prescriberMessagesAdmin']);
Route::post('patien/message/admin', [FollowUpController::class, 'patientMessagesAdmin']);

Route::get('/export-excel/medicines', [ExcelExportController::class, 'exportMedicamentos']);
Route::post('/import-excel/medicines', [ExcelExportController::class, 'importMedicamentos'])->name('medicine.import');;
Route::get('/export-excel/usuarios', [ExcelExportController::class, 'exportUsuarios']);
Route::get('/export-excel/farmacias', [ExcelExportController::class, 'exportFarmacias']);
Route::post('/import-excel/farmacias', [ExcelExportController::class, 'importFarmacias'])->name('farmacias.import');;

Route::get('/cep', [AuthController::class, 'cep']);
Route::post('/symptom', [SymptomsController::class, 'cadastreSymptom']);
Route::delete('/symptom/{id}', [SymptomsController::class, 'deleteSymptom']);
Route::put('/symptom/{id}', [SymptomsController::class, 'editSymptom']);

Route::post('/medicine', [MedicineController::class, 'store']);
Route::get('/medicine/{id}', [MedicineController::class, 'getMedicine']);
Route::get('/all-medicines', [MedicineController::class, 'getAllMedicine']);
Route::delete('/medicine/{id}', [MedicineController::class, 'deleteMedicine']);
Route::put('/medicine/{id}', [MedicineController::class, 'edit']);

Route::post('/diagnose', [DiagnoseController::class, 'store']);
Route::get('/diagnose', [DiagnoseController::class, 'getAllDiagnoses']);
Route::get('/diagnose/{id}', [DiagnoseController::class, 'getDiagnose']);
Route::delete('/diagnose/{id}', [DiagnoseController::class, 'deleteDiagnose']);
Route::put('/diagnose/{id}', [DiagnoseController::class, 'editDiagnose']);

Route::post('/pharmacy', [PharmacyController::class, 'store']);
Route::get('/pharmacy', [PharmacyController::class, 'getAllPharmacies']);
Route::get('/pharmacy/{id}', [PharmacyController::class, 'getPharmacy']);
Route::delete('/pharmacy/{id}', [PharmacyController::class, 'deletePharmacy']);
Route::post('/pharmacy/{id}', [PharmacyController::class, 'editPharmacy']);

Route::post('/treatment', [TreatmentController::class, 'store']);
Route::get('/treatment', [TreatmentController::class, 'getAllTreatments']);
Route::get('/treatment/{id}', [TreatmentController::class, 'getTreatment']);
Route::delete('/treatment/{id}', [TreatmentController::class, 'deleteTreatment']);
Route::put('/treatment/{id}', [TreatmentController::class, 'editTreatment']);

Route::post('/permissao', [PermissaoController::class, 'store']);
Route::get('/permissao', [PermissaoController::class, 'getAllPermissaos']);
Route::get('/permissao/{id}', [PermissaoController::class, 'getPermissao']);
Route::delete('/permissao/{id}', [PermissaoController::class, 'deletePermissao']);
Route::put('/permissao/{id}', [PermissaoController::class, 'editPermissao']);

Route::put('/permissao-user', [PermissaoController::class, 'editPermissaoUser']);

Route::post('/documents', [AuthController::class, 'uploadDocs']);
Route::get('/documents', [AuthController::class, 'getDocuments']);
Route::get('/documents/status/cpf', [AuthController::class, 'docsStatusCpf']);
Route::get('/crm-frente/{id}', [AuthController::class, 'downloadCRMFrente']);
Route::get('/crm-verso/{id}', [AuthController::class, 'downloadCRMVerso']);
Route::get('/selfie-com-doc/{id}', [AuthController::class, 'downloadSelfieComDoc']);
Route::get('/foto-perfil/{id}', [AuthController::class, 'getFotoPerfil']);
Route::put('/valide/crm-frente/{id}', [AuthController::class, 'editCRMFrente']);
Route::put('/valide/crm-verso/{id}', [AuthController::class, 'editCRMVerso']);
Route::put('/valide/selfie-com-doc/{id}', [AuthController::class, 'editSelfieComDoc']);
Route::put('/valide/foto-perfil/{id}', [AuthController::class, 'editFotoPerfil']);

Route::post('/foto-perfil', [AuthController::class, 'uploadFotoPerfil']);
Route::get('/foto-perfil', [AuthController::class, 'getFotoPerfilPatient']);

Route::prefix('patient')->group(function(){
    
    
    // Google Login Routes
    Route::get('/auth/google', [AuthController::class, 'redirectToGoogle'])->name('auth.google');
    Route::get('/auth/google/callback', [AuthController::class, 'handleGoogleCallback']);
    
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/signup', [AuthController::class, 'signup']);
    
    Route::post('/recover-password', [RecoverController::class, 'recoverPassword']);
    Route::post('/confirm-recovery-code', [RecoverController::class, 'confirmCode']);
    Route::post('/new-password', [RecoverController::class, 'newPassword']);
    Route::post('/new-code', [RecoverController::class, 'sendNewCode']);
    
    Route::middleware('auth:webPatient')->group(function() {

        Route::post('configs', [ConfigsController::class, 'store']);
        Route::get('configs', [ConfigsController::class, 'show']);
        Route::put('configs', [ConfigsController::class, 'update']);
        
        // Patient
        Route::post('/set-treatment', [PatientController::class, 'setTreatmentToPatient']);
        Route::get('/get-treatments/{id}', [PatientController::class, 'getPatientTreatments']);
        
        // Acount info
        Route::post('/logout', [AuthController::class, 'logout']);
        Route::post('/foto-perfil', [AuthController::class, 'uploadFotoPerfilPatient']);
        Route::get('/foto-perfil', [AuthController::class, 'getFotoPerfilPatient']);
        Route::delete('/foto-perfil', [AuthController::class, 'deleteFotoPerfilPatient']);

        Route::post('/documents', [AuthController::class, 'uploadDocsNamed']);
        Route::get('/documents', [AuthController::class, 'uploadedDocsNamed']);
        Route::post('/documents/delete', [AuthController::class, 'uploadedDocsNamedDelete']);

        Route::get('/patient-info/{id}', [AuthController::class, 'patientInfo']);
        Route::put('/patient-info/{id}', [AuthController::class, 'editPatientInfo']);
        Route::put('/password', [AuthController::class, 'editPassword']);
        Route::post('/desativate-account/{id}', [PatientController::class, 'desativate']);
        Route::post('/delete-account/{id}', [PatientController::class, 'delete']);
        Route::post('/account-config/{id}', [PatientController::class, 'updateAccountConfig']);
        Route::post('/apn-token', [PatientController::class, 'storeApnToken']);
        
        // Patient Uses Medicine
        Route::post('/inform-med', [PatientUsesMedicineController::class, 'informMed']);
        Route::get('/inform-med', [PatientUsesMedicineController::class, 'listInformedMed']);
        Route::get('/inform-med/period', [PatientUsesMedicineController::class, 'informedMedPeriod']);
        
        Route::post('/inform-symptoms', [SymptomsController::class, 'informSymptoms']);
        Route::put('/informed-symptom', [SymptomsController::class, 'informedSymptomEdit']);
        Route::delete('/informed-symptom', [SymptomsController::class, 'informedSymptomDelete']);
        Route::get('/informed-symptoms', [SymptomsController::class, 'informedSymptoms']);
        Route::get('/informed-symptoms/week', [SymptomsController::class, 'informedSymptomsLastWeek']);
        Route::get('/informed-symptoms/month', [SymptomsController::class, 'informedSymptomsLastMonth']);
        Route::get('/informed-symptoms-count', [SymptomsController::class, 'informedSymptomsCount']);
        
        // Patient inform me
        Route::post('/inform-treatment', [PatientInformTreatmentController::class, 'informTreatment']);
        
        // Follow Up Treatment
        Route::post('/follow-up', [FollowUpController::class, 'store']);
        Route::post('/message', [FollowUpController::class, 'message']);
        Route::get('/message', [FollowUpController::class, 'readMessages']);
        Route::post('/message/admin', [FollowUpController::class, 'patientMessagesAdmin']);
        Route::post('/message/patient', [FollowUpController::class, 'patientMessagesPrescriber']);
        
        // Medicine
        Route::post('/medicine', [MedicineController::class, 'store']);
        Route::get('/medicine/{id}', [MedicineController::class, 'getMedicine']);
        Route::get('/all-medicines', [MedicineController::class, 'getAllMedicine']);
        Route::delete('/medicine/{id}', [MedicineController::class, 'deleteMedicine']);
        Route::put('/medicine/{id}', [MedicineController::class, 'edit']);

        Route::post('/reminder/medicine', [MedicineController::class, 'storeReminder']);
        Route::get('/reminder/medicine', [MedicineController::class, 'indexReminder']);
        Route::get('/reminder/medicine/{id}', [MedicineController::class, 'showReminder']);
        Route::put('/reminder/medicine/{id}', [MedicineController::class, 'updateReminder']);
        Route::delete('/reminder/medicine/{id}', [MedicineController::class, 'destroyReminder']);
        
        Route::post('/treatment', [TreatmentController::class, 'store']);
        Route::get('/treatment', [TreatmentController::class, 'getAllTreatments']);
        Route::get('/treatment/{id}', [TreatmentController::class, 'getTreatment']);
        Route::delete('/treatment/{id}', [TreatmentController::class, 'deleteTreatment']);
        Route::put('/treatment/{id}', [TreatmentController::class, 'editTreatment']);

        Route::post('/pharmacy', [PharmacyController::class, 'store']);
        Route::get('/pharmacy', [PharmacyController::class, 'getAllPharmacies']);
        Route::get('/pharmacy/{id}', [PharmacyController::class, 'getPharmacy']);
        Route::delete('/pharmacy/{id}', [PharmacyController::class, 'deletePharmacy']);
        Route::post('/pharmacy/{id}', [PharmacyController::class, 'editPharmacy']);

        Route::post('/diagnose', [DiagnoseController::class, 'store']);
        Route::get('/diagnose', [DiagnoseController::class, 'getAllDiagnoses']);
        Route::get('/diagnose/{id}', [DiagnoseController::class, 'getDiagnose']);
        Route::delete('/diagnose/{id}', [DiagnoseController::class, 'deleteDiagnose']);
        Route::put('/diagnose/{id}', [DiagnoseController::class, 'editDiagnose']);
        
        // newTreatment
        Route::post('/new-treatment', [NewTreatmentController::class, 'store']);
        Route::get('/all-newtreatments', [NewTreatmentController::class, 'getAllTreatment']);
        Route::get('/new-treatment/{id}', [NewTreatmentController::class, 'show']);
        Route::delete('/new-treatment/{id}', [NewTreatmentController::class, 'destroy']);
        Route::put('/new-treatment/{id}', [NewTreatmentController::class, 'update']);

        Route::get('/agenda/disponibilidade/datas', [AvailabilityController::class, 'getDisponibilidadeDatas']);
        Route::get('/agenda/horarios', [AvailabilityController::class, 'getHorarios']);
        
        Route::post('/consulta/marcar', [AppointmentController::class, 'marcarConsulta']);
        Route::delete('/consulta/desmarcar/{id}', [AppointmentController::class, 'desmarcarConsulta']);
        Route::get('/consulta/proxima', [AppointmentController::class, 'nextAppointments']);
        Route::get('/consulta/ultima', [AppointmentController::class, 'pastAppointments']);
    });
    
});


Route::prefix('prescriber')->group(function(){
    
    Route::post('/login', [AuthController::class, 'loginPrescriber']);
    Route::post('/signup', [AuthController::class, 'signupPrescriber']);
    Route::post('/recover-password', [RecoverController::class, 'recoverPasswordPresc']);
    Route::post('/confirm-recovery-code', [RecoverController::class, 'confirmCodePresc']);
    Route::post('/new-password', [RecoverController::class, 'newPasswordPresc']);
    // Route::post('/approbation', [RecoverController::class, 'approbation']);
    
    // // Authenticated Routes for Prescriber
    Route::middleware('auth:webPresc')->group(function() {
        
        Route::post('configs', [ConfigsController::class, 'store']);
        Route::get('configs', [ConfigsController::class, 'show']);
        Route::put('configs', [ConfigsController::class, 'update']);

        Route::post('/documents', [AuthController::class, 'uploadDocs']);
        Route::get('/documents', [AuthController::class, 'getDocuments']);
        Route::post('/foto-perfil', [AuthController::class, 'uploadFotoPerfilPresc']);
        Route::get('/foto-perfil', [AuthController::class, 'getFotoPerfilPrescriber']);
        Route::delete('/foto-perfil', [AuthController::class, 'deleteFotoPerfilPrescriber']);

        Route::post('/logout', [AuthController::class, 'logoutPresc']);
        Route::get('/prescriber-info/{id}', [AuthController::class, 'prescInfo']);
        Route::put('/prescriber-info/{id}', [AuthController::class, 'editPrescInfo']);
        Route::put('/patient-info/{id}', [AuthController::class, 'editPatientInfo']);
        Route::post('/desativate-account/{id}', [PrescriberController::class, 'desativate']);
        Route::post('/delete-account/{id}', [PrescriberController::class, 'delete']);
        Route::post('/apn-token', [PrescriberController::class, 'storeApnToken']);
        Route::get('/all-medicines', [MedicineController::class, 'getAllMedicine']);
        
        // Medicine
        Route::post('/medicine', [MedicineController::class, 'store']);
        Route::get('/medicine/{id}', [MedicineController::class, 'getMedicine']);
        Route::get('/all-medicines', [MedicineController::class, 'getAllMedicine']);
        Route::delete('/medicine/{id}', [MedicineController::class, 'deleteMedicine']);
        Route::put('/medicine/{id}', [MedicineController::class, 'edit']);
        
        Route::post('/treatment', [TreatmentController::class, 'store']);
        Route::get('/treatment', [TreatmentController::class, 'getAllTreatments']);
        Route::get('/treatment/{id}', [TreatmentController::class, 'getTreatment']);
        Route::delete('/treatment/{id}', [TreatmentController::class, 'deleteTreatment']);
        Route::put('/treatment/{id}', [TreatmentController::class, 'editTreatment']);

        Route::post('/pharmacy', [PharmacyController::class, 'store']);
        Route::get('/pharmacy', [PharmacyController::class, 'getAllPharmacies']);
        Route::get('/pharmacy/{id}', [PharmacyController::class, 'getPharmacy']);
        Route::delete('/pharmacy/{id}', [PharmacyController::class, 'deletePharmacy']);
        Route::post('/pharmacy/{id}', [PharmacyController::class, 'editPharmacy']);
        
        // newTreatment
        Route::post('/new-treatment', [NewTreatmentController::class, 'storePresc']);
        Route::get('/all-newtreatments', [NewTreatmentController::class, 'getAllTreatmentPresc']);
        Route::get('/new-treatment/{id}', [NewTreatmentController::class, 'showPresc']);
        Route::delete('/new-treatment/{id}', [NewTreatmentController::class, 'destroyPresc']);
        Route::put('/new-treatment/{id}', [NewTreatmentController::class, 'updatePresc']);

        Route::post('/diagnose', [DiagnoseController::class, 'store']);
        Route::get('/diagnose', [DiagnoseController::class, 'getAllDiagnoses']);
        Route::get('/diagnose/{id}', [DiagnoseController::class, 'getDiagnose']);
        Route::delete('/diagnose/{id}', [DiagnoseController::class, 'deleteDiagnose']);
        Route::put('/diagnose/{id}', [DiagnoseController::class, 'editDiagnose']);
        
        Route::get('/inform-med', [PatientUsesMedicineController::class, 'listInformedMedPresc']);
        Route::get('/inform-med/period', [PatientUsesMedicineController::class, 'informedMedPeriod']);
        Route::get('/informed-symptoms', [SymptomsController::class, 'informedSymptomsPresc']);
        Route::get('/informed-symptoms/period', [SymptomsController::class, 'informedSymptomsPrescPeriod']);
        Route::get('/informed-symptoms/week', [SymptomsController::class, 'informedSymptomsPrescLastWeek']);
        Route::post('/message/admin', [FollowUpController::class, 'prescriberMessagesAdmin']);
        Route::post('/message/patient', [FollowUpController::class, 'prescriberMessagesPatient']);
        Route::get('/message', [FollowUpController::class, 'readMessages']);
        
        
        // Create Patient Using Prescriber
        Route::post('/create-patient', [PatientController::class, 'createPatientUsingPrescriber']);
        Route::get('/find-patient', [PatientController::class, 'findPatientByCpf']);
        
        
        // Connect Patient on Prescriber
        Route::post('/connect-patient', [PatientController::class, 'connectPrescriberToPatient']);
        Route::post('/erase-connected-patient/{id}', [PatientController::class, 'errasePrescriberInPatient']);
        Route::get('/treatment-with-patient', [PatientController::class, 'treatmentWithPatient']);
        Route::get('/patients-with-treatments', [PrescriberController::class, 'getPrescriberPatientsWithTreatments']);
        Route::get('/count/patients', [PrescriberController::class, 'countPatients']);
        
        Route::get('/agenda/disponibilidade/datas', [AvailabilityController::class, 'getDisponibilidadeDatas']);
        Route::post('/agenda/disponibilidade/datas', [AvailabilityController::class, 'storeDisponibilidadeDatas']);
        Route::get('/agenda/horarios', [AvailabilityController::class, 'getHorarios']);
        Route::post('/agenda/horarios', [AvailabilityController::class, 'storeHorarios']);
        
        Route::post('/consulta/marcar', [AppointmentController::class, 'marcarConsulta']);
        Route::post('/consulta/finalizar/{id}', [AppointmentController::class, 'finalizarConsulta']);
        Route::delete('/consulta/desmarcar/{id}', [AppointmentController::class, 'desmarcarConsulta']);
        Route::get('/consulta/proxima', [AppointmentController::class, 'nextAppointments']);
        Route::get('/consulta/ultima', [AppointmentController::class, 'pastAppointments']);
        
        Route::get('/vouchers', [VoucherController::class, 'getVoucher']);
        Route::get('/voucher/{id}', [VoucherController::class, 'getVoucherPerId']);
        Route::post('/voucher', [VoucherController::class, 'createVoucher']);
        Route::put('/voucher/{id}', [VoucherController::class, 'updateVoucher']);
        Route::delete('/voucher/{id}', [VoucherController::class, 'deleteVoucher']);
        Route::post('/use-voucher', [VoucherController::class, 'useVoucher']);
        
        Route::get('/clinic-adress', [ClinicAdressController::class, 'getClinicAdress']);
        Route::post('/clinic-adress', [ClinicAdressController::class, 'createClinicAdress']);
        Route::put('/clinic-adress', [ClinicAdressController::class, 'updateClinicAdress']);
        
        Route::get('/produto-indicado', [StatisticsController::class, 'showProdutoIndicadoPorDiagnostico']);
        
        Route::get('/percepcao-melhora/{id}', [StatisticsController::class, 'showPercepcaoDeMelhora']);
        
        Route::get('/symptoms', [SymptomsController::class, 'listSymptoms']);
        Route::post('/symptom', [SymptomsController::class, 'cadastreSymptom']);
    });
});
