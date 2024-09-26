<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PacientesController; 


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


//////////////////////////////////7

Route::get('/pacientes/show', [PacientesController::class, 'index']);


Route::get('/pacientes/create', [PacientesController::class, 'create']); 

Route::get('/pacientes/edit/{pacientes}', [PacientesController::class, 'edit']); 

Route::post('/pacientes/store', [PacientesController::class, 'store']); 
// Ruta para modificar producto

Route::put('/pacientes/update/{pacientes}', [PacientesController::class, 'update']); 
// Ruta para eliminar producto

Route::delete('/pacientes/destroy/{id}', [PacientesController::class, 'destroy']);

//////////////////////////////////////
Route::get('/medicos/views', function () {
    return view('medicos/views');
});

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
Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
