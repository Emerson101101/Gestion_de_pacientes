@extends('layout.app')

@section('title', 'actualizar')

@section('content')


<style>
    .container{
        max-width: 70%;
    }
    
</style>

<h1 class="text-center">Actualizar</h1>
 <h5 class="text-center">Formulario para actualizar pacientes</h5>
<hr>

<div class="container">
<form action="">

<div class="mb-3">
  <label for="formGroupExampleInput" class="form-label">Nombre</label>
  <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
</div>
<div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label">Edad</label>
  <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="">
</div>
<div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label">Telefono</label>
  <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="">
</div>
<div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label">Direccion</label>
  <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="">
</div>
<div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label">Detalles de consulta</label>
  <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="">
</div>
 <div class="col-12 mt-2">
<button class="btn btn-primary">Actualizar</button>
<a class="btn btn-primary" href="/medicos/pediatras/show" style="margin-left:2%;">Volver</a>
 </div>
 </form>
</div>


@endsection