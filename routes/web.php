<?php

use App\Http\Controllers\PacienteController;
use App\Models\Doctore;
use App\Models\Especialidade;
use App\Models\Estudio;
use App\Models\Sexo;
use App\Models\Tipos_sangre;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    $especialidades = Especialidade::all()->take(6);
    $estudios= Estudio::all()->take(8);
    return view('welcome', compact('estudios','especialidades'));
})->name('index');
Route::get('/pacientes/create',[PacienteController::class,'create'])->name('pacientes.create');
Route::get('/pacientes/{paciente}',[PacienteController::class,'show'])->name('pacientes.show');
Route::post('/pacientes',[PacienteController::class,'store'])->name('pacientes.store');
Route::get('/pacientes/{paciente}/edit/',[PacienteController::class,'edit'])->name('pacientes.edit');