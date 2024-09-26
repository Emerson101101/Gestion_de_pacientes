@extends('layouts.app')

@section('title', 'Actualizar')

@section('content')
<h1 class="text-center">Modificar</h1>
 <h5 class="text-center">Formulario para actualizar pacientes</h5>
<hr>

<div class="container">
 <form action="/pacientes/update/{{$pacientes->codigo_paciente}}" method="POST">
@csrf
 @method('PUT') 
 <div class="row">
<div class="col-6">
Nombre 
 <input type="text" class="form-control" name="nombre"
value="{{$pacientes->nombre}}"> @error('nombre') 
<span class="invalid-feedback d-block" role="alert">
<strong>{{$message}}</strong>

</span>  
 @enderror
 </div>

 <div class="col-6">
Edad
 <input type="text" class="form-control" name="edad"
value="{{$pacientes->edad}}"> @error('edad') 
<span class="invalid-feedback d-block" role="alert">
<strong>{{$message}}</strong>

</span>  
 @enderror
 </div>

<div class="col-6">
Telefono
 <input type="number" class="form-control" name="telefono"
value="{{$pacientes->telefono}}"> @error('telefono') 
<span class="invalid-feedback d-block" role="alert">
<strong>{{$message}}</strong>

</span>  
 @enderror
 </div>

<div class="col-6">
Direccion
 <input type="text" class="form-control" name="direccion"
value="{{$pacientes->direccion}}"> @error('direccion') 
<span class="invalid-feedback d-block" role="alert">
<strong>{{$message}}</strong>

</span>  
 @enderror
 </div>


<div class="col-6">
Motivo de Consulta
 <input type="text" class="form-control" name="detallesconsulta"
value="{{$pacientes->detallesconsulta}}"> @error('detallesconsulta') 
<span class="invalid-feedback d-block" role="alert">
<strong>{{$message}}</strong>

</span>  
 @enderror
 </div>

 <div class="col-12 mt-2">
 <button class="btn btn-primary">Guardar</button>
 </div> 
 </form> 
 </div>
 <br>
@endsection