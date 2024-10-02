
@extends('layouts.app')

@section('title', 'Añadir nuevo pediatra')

@section('content')


<style>
    #container{
        max-width: 70%;
    }
    
</style>

<h1 class="text-center">Crear</h1>
 <h5 class="text-center">Formulario para crear proximas citas</h5>
<hr>

<div  id="container" class="container">
<form action="">

<div class="col-12">
Paciente
<select name="marca" id="" class="form-control">

<option value="">Emerson</option>
<option value="">Lorena</option>
</select>

<span class="invalid-feedback d-block" role="alert">
<strong></strong>
</span> 

 </div>

 <div class="col-12">
Doctor
<select name="marca" id="" class="form-control">

<option value="">Victor</option>
<option value="">Alberto</option>
</select>

<span class="invalid-feedback d-block" role="alert">
<strong></strong>
</span> 

 </div>

 <div class="mb-3">
  <label for="formGroupExampleInput" class="form-label">Fecha de la cita</label>
  <input type="date" class="form-control" id="formGroupExampleInput" placeholder="">
</div>

<div class="mb-3">
  <label for="formGroupExampleInput" class="form-label">Hora</label>
  <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
</div>

<div class="mb-3">
  <label for="formGroupExampleInput" class="form-label">Motivo</label>
  <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
</div>

 <div class="col-12 mt-2">
<button class="btn btn-primary">Guardar</button>
<a class="btn btn-primary" href="/citas/show" style="margin-left:2%;">Volver</a>
 </div>
 </form>
</div>


@endsection

