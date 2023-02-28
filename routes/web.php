<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\DocumentoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Persona
Route::get('/', [PersonaController::class, 'index']);

Route::resource('/persona', PersonaController::class);

Route::get('/persona_agregar_1', [PersonaController::class, 'create']);
Route::post('/persona_agregar_2', [PersonaController::class, 'store']);

//Documento

Route::get('/listar_documento', [DocumentoController::class,'show']);
Route::resource('/documento',DocumentoController::class);

Route::get('/documento_agregar_1',[DocumentoController::class,'create']);
Route::post('/documento_agregar_2',[DocumentoController::class,'store']);
