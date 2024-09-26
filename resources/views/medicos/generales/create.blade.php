@extends('layouts.app')

@section('title', 'Añadir nuevo pediatra')

@section('content')


<style>
    #container{
        max-width: 70%;
    }
    
</style>

<h1 class="text-center">Crear</h1>
 <h5 class="text-center">Formulario para crear nuevos doctores generales</h5>
<hr>

<div id="container" class="container">
<form action="">

<div class="mb-3">
  <label for="formGroupExampleInput" class="form-label">Nombre</label>
  <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
</div>
<div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label">Apellidos</label>
  <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="">
</div>
<div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label">Especialidad</label>
  <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="">
</div><div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label">Telefono</label>
  <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="">
</div>
 <div class="col-12 mt-2">
<button class="btn btn-primary">Guardar</button>
<a class="btn btn-primary" href="/medicos/generales/show" style="margin-left:2%;">Volver</a>
 </div>
 </form>
</div>


@endsection
