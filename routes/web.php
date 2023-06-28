<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/cadastro-sintomas', function () {
    return view('cadastro-sintomas');
});

Route::get('/cadastro-medicamentos', function () {
    return view('cadastro-medicamentos');
});

Route::get('/validacao-documentos', function () {
    return view('validacao-documentos');
});

Route::get('/config-pushs', function () {
    return view('config-pushs');
});


// Route::prefix('docs')->group(function () {
//     Route::get('/', function () {
//         return redirect('/docs/' . config('larecipe.versions.default') . '/introduction');
//     });
//     Route::get('/{version}/{page?}', 'BinaryTorch\LaRecipe\Http\Controllers\DocumentationController@show')->name('larecipe.show');
// });