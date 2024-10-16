<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PacientesController; 
use App\Http\Controllers\MedicosController; 
use App\Http\Controllers\EspecialidadesController;
use App\Http\Controllers\CitaController; 
use App\Http\Controllers\ReportController; 
use App\Http\Controllers\RecetaController; 
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
Route::get('/reporteUsuarios', [ReportController::class,'reporteSeis']);

//////////////////Usuario///////////////

Route::get('/auth/show', [App\Http\Controllers\Auth\RegisterController::class, 'index']);

Route::get('/auth/register', [App\Http\Controllers\Auth\RegisterController::class, 'creates']); 

Route::get('/auth/edit/{user}', [App\Http\Controllers\Auth\RegisterController::class, 'edit']); 

Route::post('/auth/store', [App\Http\Controllers\Auth\RegisterController::class, 'store']); 
// Ruta para modificar producto

Route::put('/auth/update/{user}', [App\Http\Controllers\Auth\RegisterController::class, 'update']); 
// Ruta para eliminar producto

Route::delete('/auth/destroy/{id}', [App\Http\Controllers\Auth\RegisterController::class, 'destroy']);

///////////////////especialidades///////////////

Route::get('/especialidades/show', [EspecialidadesController::class, 'index']);

Route::get('/especialidades/create', [EspecialidadesController::class, 'create']); 

Route::get('/especialidades/edit/{especialidad}', [EspecialidadesController::class, 'edit']); 

Route::post('/especialidades/store', [EspecialidadesController::class, 'store']); 
// Ruta para modificar producto

Route::put('/especialidades/update/{especialidad}', [EspecialidadesController::class, 'update']); 
// Ruta para eliminar producto

Route::delete('/especialidades/destroy/{id}', [EspecialidadesController::class, 'destroy']);

///////////////////pacientes///////////////


Route::get('/pacientes/show', [PacientesController::class, 'index']);


Route::get('/pacientes/create', [PacientesController::class, 'create']); 

Route::get('/pacientes/edit/{pacientes}', [PacientesController::class, 'edit']); 

Route::post('/pacientes/store', [PacientesController::class, 'store']); 
// Ruta para modificar producto

Route::put('/pacientes/update/{pacientes}', [PacientesController::class, 'update']); 
// Ruta para eliminar producto

Route::delete('/pacientes/destroy/{id}', [PacientesController::class, 'destroy']);

////////////////////medicos//////////////////

Route::get('/medicos/views', function () {
    return view('medicos/views');
});
Route::get('/medicos/show', [MedicosController::class, 'index']);

Route::get('/medicos/create', [MedicosController::class, 'create']); 

Route::get('/medicos/edit/{medico}', [MedicosController::class, 'edit']); 

Route::post('/medicos/store', [MedicosController::class, 'store']); 
// Ruta para modificar producto

Route::put('/medicos/update/{medico}', [MedicosController::class, 'update']); 


Route::delete('/medicos/destroy/{id}', [MedicosController::class, 'destroy']);

///////////////////////////////////777

Route::get('/citas/show', [CitaController::class, 'index']);

Route::get('/citas/create', [CitaController::class, 'create']); 

Route::get('/citas/edit/{citas}', [CitaController::class, 'edit']);

Route::post('/citas/store', [CitaController::class, 'store']); 
// Ruta para modificar producto

Route::put('/citas/update/{citas}', [CitaController::class, 'update']); 


Route::delete('/citas/destroy/{id}', [CitaController::class, 'destroy']);

////////

Route::get('/recetas/show', [RecetaController::class, 'index']);

Route::get('/recetas/create', [RecetaController::class, 'create']); 

Route::get('/recetas/edit/{receta}', [RecetaController::class, 'edit']);

Route::post('/recetas/store', [RecetaController::class, 'store']); 
// Ruta para modificar producto

Route::put('/recetas/update/{receta}', [RecetaController::class, 'update']); 


Route::delete('/recetas/destroy/{id}', [RecetaController::class, 'destroy']);


Auth::routes();


Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
