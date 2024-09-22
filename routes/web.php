<?php

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
    return view('login');
});

Route::get('/home', function () {
    return view('/home');
});

Route::get('/pacientes/show', function () {
    return view('pacientes/show');
});
Route::get('/pacientes/create', function () {
    return view('pacientes/create');
});
Route::get('/pacientes/update', function () {
    return view('pacientes/update');
});


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