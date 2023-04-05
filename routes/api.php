<?php

use App\Http\Controllers\Api\V1\MedicineController;
use App\Http\Controllers\Api\V1\Patient\AuthController;
use App\Http\Controllers\Api\V1\Patient\PatientController;
use App\Http\Controllers\Api\V1\Patient\RecoverController;
use App\Http\Controllers\Api\V1\PatientUsesMedicineController;
use Illuminate\Http\Request;
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
Route::prefix('patient')->group(function(){

    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/signup', [AuthController::class, 'signup']);

    Route::post('/recover-password', [RecoverController::class, 'recoverPassword']);
    Route::post('/confirm-recovery-code', [RecoverController::class, 'confirmCode']);
    Route::post('/new-password', [RecoverController::class, 'newPassword']);
    Route::post('/new-code', [RecoverController::class, 'sendNewCode']);

    // Route::post('/approbation', [RecoverController::class, 'approbation']);

    // Authenticated Routes for Patient
    Route::middleware('auth:sanctum')->group(function() {

        Route::post('/logout', [AuthController::class, 'logout']);
        Route::get('/patient-info/{id}', [AuthController::class, 'patientInfo']);
        Route::post('/desativate-account/{id}', [PatientController::class, 'desativate']);
        Route::post('/delete-account/{id}', [PatientController::class, 'delete']);
        
        Route::post('/inform-med', [PatientUsesMedicineController::class, 'informeMed']);
    });

});


// Prescriber
// Route::prefix('prescriber')->group(function(){

//     Route::post('/login', [AuthController::class, 'login']);
//     Route::post('/signup', [AuthController::class, 'signup']);
//     Route::post('/recover-password', [RecoverController::class, 'recoverPassword']);
//     Route::post('/confirm-recovery-code', [RecoverController::class, 'confirmCode']);
//     Route::post('/new-password', [RecoverController::class, 'newPassword']);
//     Route::post('/approbation', [RecoverController::class, 'approbation']);

//     // Authenticated Routes for Prescriber
//     Route::middleware('auth:sanctum')->group(function() {
//         Route::get('/user', function (Request $request) {
//             return $request->user();
//         });

//         Route::post('/logout', [AuthController::class, 'logout']);
//         Route::get('/user-info/{id}', [AuthController::class, 'userInfo']);
//     });

// });






