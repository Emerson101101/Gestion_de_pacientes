<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PacientesController; 
use App\Http\Controllers\MedicosController; 
use App\Http\Controllers\EspecialidadesController; 
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

Route::get('/especialidades/edit/{especialidades}', [EspecialidadesController::class, 'edit']); 

Route::post('/especialidades/store', [EspecialidadesController::class, 'store']); 
// Ruta para modificar producto

Route::put('/especialidades/update/{especialidades}', [EspecialidadesController::class, 'update']); 
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
Route::get('/medicos/odontologos/show', [MedicosController::class, 'index']);

Route::get('/medicos/pediatras/show', function () {
    return view('medicos/pediatras/show');
});

Route::get('/medicos/pediatras/create', function () {
    return view('/medicos/pediatras/create');
});

Route::get('/medicos/pediatras/update', function () {
    return view('/medicos/pediatras/update');
});

Route::get('/medicos/odontologos/show', function () {
    return view('medicos/odontologos/show');
});

Route::get('/medicos/odontologos/create', function () {
    return view('/medicos/odontologos/create');
});

Route::get('/medicos/odontologos/update', function () {
    return view('/medicos/odontologos/update');
});

Route::get('/medicos/generales/show', function () {
    return view('medicos/generales/show');
});

Route::get('/medicos/generales/create', function () {
    return view('/medicos/generales/create');
});

Route::get('/medicos/generales/update', function () {
    return view('/medicos/generales/update');
});

Route::get('/especialidades/show', function () {
    return view('especialidades/show');
});
Route::get('/especialidades/create', function () {
    return view('especialidades/create');
});
Route::get('/especialidades/update', function () {
    return view('especialidades/update');
});
///////////////////////////////////777

Route::get('/citas/show', function () {
    return view('citas/show');
});
Route::get('/citas/create', function () {
    return view('citas/create');
});
Route::get('/citas/update', function () {
    return view('citas/update');
});




Auth::routes();


Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
