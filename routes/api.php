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
use App\Http\Controllers\Api\V1\TreatmentController;
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

// Patient
Route::get('/cep', [AuthController::class, 'cep']);

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
    Route::middleware('auth:sanctum')->group(function() {
        
        // Patient
        Route::post('/set-treatment', [PatientController::class, 'setTreatmentToPatient']);
        Route::get('/get-treatments/{id}', [PatientController::class, 'getPatientTreatments']);
        
        // Acount info
        Route::post('/logout', [AuthController::class, 'logout']);
        Route::get('/patient-info/{id}', [AuthController::class, 'patientInfo']);
        Route::put('/patient-info/{id}', [AuthController::class, 'editPatientInfo']);
        Route::put('/password', [AuthController::class, 'editPassword']);
        Route::post('/desativate-account/{id}', [PatientController::class, 'desativate']);
        Route::post('/delete-account/{id}', [PatientController::class, 'delete']);
        Route::post('/account-config/{id}', [PatientController::class, 'updateAccountConfig']);
        
        // Patient Uses Medicine
        Route::post('/inform-med', [PatientUsesMedicineController::class, 'informeMed']);
        Route::get('/inform-med', [PatientUsesMedicineController::class, 'listInformedMed']);
        
        Route::post('/inform-symptoms', [SymptomsController::class, 'informSymptoms']);
        Route::put('/informed-symptom', [SymptomsController::class, 'informedSymptomEdit']);
        Route::delete('/informed-symptom', [SymptomsController::class, 'informedSymptomDelete']);
        Route::get('/informed-symptoms', [SymptomsController::class, 'informedSymptoms']);
        
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
        
        // Treatment
        Route::post('/treatment', [TreatmentController::class, 'store']);
        Route::get('/all-treatments', [TreatmentController::class, 'getAllTreatment']);
        Route::get('/treatment/{id}', [TreatmentController::class, 'getTreatment']);
        Route::delete('/treatment/{id}', [TreatmentController::class, 'deleteTreatment']);
        Route::put('/treatment/{id}', [TreatmentController::class, 'editTreatment']);
        
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
    Route::middleware('auth:sanctum')->group(function() {
        Route::post('/documents', [AuthController::class, 'uploadDocs']);
        Route::get('/documents', [AuthController::class, 'getDocuments']);
        Route::post('/logout', [AuthController::class, 'logoutPresc']);
        Route::get('/prescriber-info/{id}', [AuthController::class, 'prescInfo']);
        Route::put('/prescriber-info/{id}', [AuthController::class, 'editPrescInfo']);
        Route::post('/desativate-account/{id}', [PrescriberController::class, 'desativate']);
        Route::post('/delete-account/{id}', [PrescriberController::class, 'delete']);
        
        // newTreatment
        Route::post('/new-treatment', [NewTreatmentController::class, 'storePresc']);
        Route::get('/all-newtreatments', [NewTreatmentController::class, 'getAllTreatmentPresc']);
        Route::get('/new-treatment/{id}', [NewTreatmentController::class, 'showPresc']);
        Route::delete('/new-treatment/{id}', [NewTreatmentController::class, 'destroyPresc']);
        Route::put('/new-treatment/{id}', [NewTreatmentController::class, 'updatePresc']);
        
        
        // Create Patient Using Prescriber
        Route::post('/create-patient', [PatientController::class, 'createPatientUsingPrescriber']);
        
        
        // Connect Patient on Prescriber
        Route::post('/connect-patient', [PatientController::class, 'connectPrescriberToPatient']);
        Route::post('/erase-connected-patient/{id}', [PatientController::class, 'errasePrescriberInPatient']);
        Route::post('/get-pacient-treatment/{id}', [PatientController::class, 'getPacientTreatment']);
        
        
        // Get Prescriber Info with patients and treatments
        Route::get('/get-prescriber-patient/{id}', [PrescriberController::class, 'getConnectedPatients']);
        
        // Availability
        Route::get('/get-availability', [AvailabilityController::class, 'getAvailability']);
        Route::post('/create-availability', [AvailabilityController::class, 'store']);
        
        // ClinicAdress
        Route::get('/get-clinic-adress', [ClinicAdressController::class, 'getClinicAdress']);
        Route::post('/create-clinic-adress', [ClinicAdressController::class, 'createClinicAdress']);
        Route::put('/update-clinic-adress', [ClinicAdressController::class, 'updateClinicAdress']);
        
        // Appointment
        Route::post('/create-appointment', [AppointmentController::class, 'createAppointment']);
        
        // Appointment
        Route::get('/produto-indicado', [StatisticsController::class, 'showProdutoIndicadoPorDiagnostico']);
        
        /** id do diagnostico */
        Route::get('/percepcao-melhora/{id}', [StatisticsController::class, 'showPercepcaoDeMelhora']);

        Route::get('/symptoms', [SymptomsController::class, 'listSymptoms']);
        Route::post('/symptom', [SymptomsController::class, 'cadastreSymptom']);
    });
});
