<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ViewsAdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware('auth')->group(function() {

    Route::get('/cadastro-sintomas', [ViewsAdminController::class, 'cadastroSintomas']);
    
    Route::get('/cadastro-medicamentos', [ViewsAdminController::class, 'cadastroMedicamentos']);
    
    Route::get('/cadastro-diagnosticos', [ViewsAdminController::class, 'cadastroDiagnosticos']);
    
    Route::get('/validacao-documentos', [ViewsAdminController::class, 'validacaoDocumentos']);
    
    Route::get('/config-pushs', [ViewsAdminController::class, 'configPushs']);
    
    Route::get('/farmacias-parceiras', [ViewsAdminController::class, 'farmaciasParceiras']);
    
    Route::get('/usuarios', [ViewsAdminController::class, 'usuarios']);
    
    Route::get('/desconto-promocao', [ViewsAdminController::class, 'descontoPromocao']);
    
    Route::get('/extracaodados', [ViewsAdminController::class, 'extracaoDados']);
    
    Route::get('/permissoes', [ViewsAdminController::class, 'permissoes']);
    
    Route::get('/listar-usuarios', [ViewsAdminController::class, 'listarUsuarios']);
    
    Route::get('/', function () {
        return view('login');
    });

});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
