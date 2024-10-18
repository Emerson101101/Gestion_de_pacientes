<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PacientesController; 
use App\Http\Controllers\MedicosController; 
use App\Http\Controllers\EspecialidadesController;
use App\Http\Controllers\CitaController; 
use App\Http\Controllers\ReportController; 
use App\Http\Controllers\RecetaController; 
use App\Http\Controllers\MedicamentoController; 
use App\Models\pacientes;
use App\Models\cita;
use App\Models\medico;
use App\Models\especialidad;
use App\Models\medicamento;
use App\Http\Controllers\Auth\RegisterController; 




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

Route::get('/home', function () {  return view('home');
})->middleware('auth');

Route::get('/reportes/show', function () {  return view('/reportes/show');
});

Route::get('/reportePacientes', [ReportController::class,'reporteUno']);
Route::get('/reporteMedicos', [ReportController::class,'reporteDos']);

Route::get('/reporteEspecialidades', [ReportController::class,'reporteTres']);

Route::get('/reporteCitas', [ReportController::class,'reporteCuatro']);

Route::get('/reporteRecetas', [ReportController::class,'reportecinco']);

Route::get('/reporteUsuarios', [ReportController::class,'reporteSeis']);

Route::get('/reporteMedicamento', [ReportController::class,'reportesiete']);
//////////////
Route::get('/fechaPaciente', [ReportController::class,'reporteFecha']);

Route::get('/SeleccionarFecha',function(){
    $pacientes = pacientes::All();
    return view('reports.fechaPaciente', compact('pacientes'));
});
//////////////

Route::post('/fechaCita', [ReportController::class,'reporteCitaPorFechaYMedico']);
Route::get('/SeleccionarCita',function(){
    $cita = cita::All();
    $medico = medico::all();
    return view('reports.fechaCita', compact('medico'));
 
});
//////
Route::post('/EspecialidadMedico', [ReportController::class,'reporteMedicoEspecialidad']);

Route::get('/SeleccionarEspecialidad',function(){
    $medico = medico::All();
    $especialidad = especialidad::All();
    return view('reports.EspecialidadMedico', compact('especialidad'));
});

//////////

Route::get('/medicamento/show', [MedicamentoController::class, 'index']);

Route::get('/medicamento/create', [MedicamentoController::class, 'create']); 

Route::get('/medicamento/edit/{medicamento}', [MedicamentoController::class, 'edit']); 

Route::post('/medicamento/store', [MedicamentoController::class, 'store']); 


Route::put('/medicamento/update/{medicamento}', [MedicamentoController::class, 'update']); 


Route::delete('/medicamento/destroy/{id}', [MedicamentoController::class, 'destroy']);

//////////////////Usuario///////////////

Route::get('/auth/show', [App\Http\Controllers\Auth\RegisterController::class, 'index']);

Route::get('/auth/register', [App\Http\Controllers\Auth\RegisterController::class, 'creates']); 

Route::get('/auth/edit/{user}', [App\Http\Controllers\Auth\RegisterController::class, 'edit']); 

Route::post('/auth/store', [App\Http\Controllers\Auth\RegisterController::class, 'store']); 


Route::put('/auth/update/{user}', [App\Http\Controllers\Auth\RegisterController::class, 'update']); 

Route::delete('/auth/destroy/{id}', [App\Http\Controllers\Auth\RegisterController::class, 'destroy']);

///////////////////especialidades///////////////

Route::get('/especialidades/show', [EspecialidadesController::class, 'index']);

Route::get('/especialidades/create', [EspecialidadesController::class, 'create']); 

Route::get('/especialidades/edit/{especialidad}', [EspecialidadesController::class, 'edit']); 

Route::post('/especialidades/store', [EspecialidadesController::class, 'store']); 


Route::put('/especialidades/update/{especialidad}', [EspecialidadesController::class, 'update']); 


Route::delete('/especialidades/destroy/{id}', [EspecialidadesController::class, 'destroy']);

///////////////////pacientes///////////////


Route::get('/pacientes/show', [PacientesController::class, 'index']);


Route::get('/pacientes/create', [PacientesController::class, 'create']); 

Route::get('/pacientes/edit/{pacientes}', [PacientesController::class, 'edit']); 

Route::post('/pacientes/store', [PacientesController::class, 'store']); 


Route::put('/pacientes/update/{pacientes}', [PacientesController::class, 'update']); 

Route::delete('/pacientes/destroy/{id}', [PacientesController::class, 'destroy']);

////////////////////medicos//////////////////

Route::get('/medicos/views', function () {
    return view('medicos/views');
});

// Rutas para las especialidades de médicos
Route::get('/medicos/especialidad/{id}', [MedicosController::class, 'index']);


Route::get('/medicos/create', [MedicosController::class, 'create']); 

Route::get('/medicos/edit/{medico}', [MedicosController::class, 'edit']); 

Route::post('/medicos/store', [MedicosController::class, 'store']); 


Route::put('/medicos/update/{medico}', [MedicosController::class, 'update']); 


Route::delete('/medicos/destroy/{id}', [MedicosController::class, 'destroy']);

///////////////////////////////////

Route::get('/citas/show', [CitaController::class, 'index']);

Route::get('/citas/create', [CitaController::class, 'create']); 

Route::get('/citas/edit/{citas}', [CitaController::class, 'edit']);

Route::post('/citas/store', [CitaController::class, 'store']); 


Route::put('/citas/update/{citas}', [CitaController::class, 'update']); 


Route::delete('/citas/destroy/{id}', [CitaController::class, 'destroy']);

////////

Route::get('/recetas/show', [RecetaController::class, 'index']);

Route::get('/recetas/create', [RecetaController::class, 'create']); 

Route::get('/recetas/edit/{receta}', [RecetaController::class, 'edit']);

Route::post('/recetas/store', [RecetaController::class, 'store']); 


Route::put('/recetas/update/{receta}', [RecetaController::class, 'update']); 


Route::delete('/recetas/destroy/{id}', [RecetaController::class, 'destroy']);


Auth::routes();


Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
