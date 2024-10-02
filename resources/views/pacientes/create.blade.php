@extends('layouts.app')

@section('title', 'Añadir nuevo pediatra')

@section('content')


<style>
    #container{
        max-width: 70%;
    }
    
</style>

<h1  class="text-center">Crear</h1>
 <h5 class="text-center">Formulario para crear nuevos pacientes</h5>
<hr>

<div id="container"class="container">
<form action="/pacientes/store" method="POST">
@csrf
<div class="row">

<div class="col-6">
Nombre 
<input type="text" class="form-control" name="nombre">
@error('nombre') 
<span class="invalid-feedback d-block" role="alert">
<strong>{{$message}}</strong>
</span> 
@enderror 
</div>

<div class="col-6">
Edad
<input type="text" class="form-control" name="edad">
@error('edad') 
<span class="invalid-feedback d-block" role="alert">
<strong>{{$message}}</strong>
</span> 
@enderror 
</div>

<div class="col-6">
Telefono
<input type="number" class="form-control" name="telefono">
@error('telefono') 
<span class="invalid-feedback d-block" role="alert">
<strong>{{$message}}</strong>
</span> 
@enderror 
</div>

<div class="col-6">
Fecha
<input type="date" class="form-control" name="fecha">
@error('fecha') 
<span class="invalid-feedback d-block" role="alert">
<strong>{{$message}}</strong>
</span> 
@enderror 
</div>


<div class="col-6">
Direccion
<input type="text" class="form-control" name="direccion">
@error('direccion') 
<span class="invalid-feedback d-block" role="alert">
<strong>{{$message}}</strong>
</span> 
@enderror 
</div>

<div class="col-6">
Motivo de consulta
<input type="text" class="form-control" name="detallesconsulta">
@error('detallesconsulta') 
<span class="invalid-feedback d-block" role="alert">
<strong>{{$message}}</strong>
</span> 
@enderror 
</div>


</div>


 <div class="col-12 mt-2">
<button class="btn btn-primary">Guardar</button>
<a class="btn btn-primary" href="/pacientes/show" style="margin-left:2%;">Volver</a>
 </div>
 </form>
</div>


@endsection
