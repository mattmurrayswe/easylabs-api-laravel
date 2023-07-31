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
Route::put('/pharmacy/{id}', [PharmacyController::class, 'editPharmacy']);

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
Route::get('/crm-frente/{id}', [AuthController::class, 'getCRMFrente']);
Route::get('/crm-verso/{id}', [AuthController::class, 'getCRMVerso']);
Route::get('/selfie-com-doc/{id}', [AuthController::class, 'getSelfieComDoc']);
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
    
    // Route::post('/approbation', [RecoverController::class, 'approbation']);
    
    // Authenticated Routes for Patient
    Route::middleware('auth:webPatient')->group(function() {
        
        // Patient
        Route::post('/set-treatment', [PatientController::class, 'setTreatmentToPatient']);
        Route::get('/get-treatments/{id}', [PatientController::class, 'getPatientTreatments']);
        
        // Acount info
        Route::post('/logout', [AuthController::class, 'logout']);
        Route::post('/foto-perfil', [AuthController::class, 'uploadFotoPerfil']);
        Route::get('/foto-perfil', [AuthController::class, 'getFotoPerfilPatient']);
        Route::get('/patient-info/{id}', [AuthController::class, 'patientInfo']);
        Route::put('/patient-info/{id}', [AuthController::class, 'editPatientInfo']);
        Route::put('/password', [AuthController::class, 'editPassword']);
        Route::post('/desativate-account/{id}', [PatientController::class, 'desativate']);
        Route::post('/delete-account/{id}', [PatientController::class, 'delete']);
        Route::post('/account-config/{id}', [PatientController::class, 'updateAccountConfig']);
        
        // Patient Uses Medicine
        Route::post('/inform-med', [PatientUsesMedicineController::class, 'informMed']);
        Route::get('/inform-med', [PatientUsesMedicineController::class, 'listInformedMed']);
        
        Route::post('/inform-symptoms', [SymptomsController::class, 'informSymptoms']);
        Route::put('/informed-symptom', [SymptomsController::class, 'informedSymptomEdit']);
        Route::delete('/informed-symptom', [SymptomsController::class, 'informedSymptomDelete']);
        Route::get('/informed-symptoms', [SymptomsController::class, 'informedSymptoms']);
        Route::get('/informed-symptoms-count', [SymptomsController::class, 'informedSymptomsCount']);
        
        // Patient inform me
        Route::post('/inform-treatment', [PatientInformTreatmentController::class, 'informTreatment']);
        
        // Follow Up Treatment
        Route::post('/follow-up', [FollowUpController::class, 'store']);
        Route::post('/message', [FollowUpController::class, 'messageToPrescriber']);
        Route::get('/message', [FollowUpController::class, 'readMessagesToPrescriber']);
        
        
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
        Route::post('/documents', [AuthController::class, 'uploadDocs']);
        Route::get('/documents', [AuthController::class, 'getDocuments']);
        Route::post('/logout', [AuthController::class, 'logoutPresc']);
        Route::get('/prescriber-info/{id}', [AuthController::class, 'prescInfo']);
        Route::put('/prescriber-info/{id}', [AuthController::class, 'editPrescInfo']);
        Route::post('/desativate-account/{id}', [PrescriberController::class, 'desativate']);
        Route::post('/delete-account/{id}', [PrescriberController::class, 'delete']);
        
        Route::post('/treatment', [TreatmentController::class, 'store']);
        Route::get('/treatment', [TreatmentController::class, 'getAllTreatments']);
        Route::get('/treatment/{id}', [TreatmentController::class, 'getTreatment']);
        Route::delete('/treatment/{id}', [TreatmentController::class, 'deleteTreatment']);
        Route::put('/treatment/{id}', [TreatmentController::class, 'editTreatment']);

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
        
        
        // Create Patient Using Prescriber
        Route::post('/create-patient', [PatientController::class, 'createPatientUsingPrescriber']);
        Route::post('/find-patient', [PatientController::class, 'findPatientByCpf']);
        
        
        // Connect Patient on Prescriber
        Route::post('/connect-patient', [PatientController::class, 'connectPrescriberToPatient']);
        Route::post('/erase-connected-patient/{id}', [PatientController::class, 'errasePrescriberInPatient']);
        Route::post('/get-pacient-treatment/{id}', [PatientController::class, 'getPacientTreatment']);
        
        
        // Get Prescriber Info with patients and treatments
        Route::get('/get-prescriber-patient/{id}', [PrescriberController::class, 'getConnectedPatients']);
        
        // Availability
        Route::get('/get-availability', [AvailabilityController::class, 'getAvailability']);
        Route::post('/create-availability', [AvailabilityController::class, 'store']);

        //Voucher
        Route::get('/vouchers', [VoucherController::class, 'getVoucher']);
        Route::get('/voucher/{id}', [VoucherController::class, 'getVoucherPerId']);
        Route::post('/voucher', [VoucherController::class, 'createVoucher']);
        Route::put('/voucher/{id}', [VoucherController::class, 'updateVoucher']);
        Route::delete('/voucher/{id}', [VoucherController::class, 'deleteVoucher']);
        Route::post('/use-voucher', [VoucherController::class, 'useVoucher']);


        // ClinicAdress
        Route::get('/get-clinic-adress', [ClinicAdressController::class, 'getClinicAdress']);
        Route::post('/create-clinic-adress', [ClinicAdressController::class, 'createClinicAdress']);
        Route::put('/update-clinic-adress', [ClinicAdressController::class, 'updateClinicAdress']);
        
        // Appointment
        Route::post('/create-appointment', [AppointmentController::class, 'createAppointment']);
        Route::delete('/drop-appointment/{id}', [AppointmentController::class, 'dropAppointment']);

        Route::get('/next-appointments', [AppointmentController::class, 'nextAppointments']);
        Route::get('/past-appointments', [AppointmentController::class, 'pastAppointments']);

        Route::post('/end-appointment/{id}', [AppointmentController::class, 'endAppointment']);

        // Appointment
        Route::get('/produto-indicado', [StatisticsController::class, 'showProdutoIndicadoPorDiagnostico']);
        
        /** id do diagnostico */
        Route::get('/percepcao-melhora/{id}', [StatisticsController::class, 'showPercepcaoDeMelhora']);

        Route::get('/symptoms', [SymptomsController::class, 'listSymptoms']);
        Route::post('/symptom', [SymptomsController::class, 'cadastreSymptom']);
    });
});
