@extends('layout.app')

@section('title', 'Añadir nuevo pediatra')

@section('content')


<style>
    .container{
        max-width: 70%;
    }
    
</style>

<h1 class="text-center">Crear</h1>
 <h5 class="text-center">Formulario para crear nuevas especialidades</h5>
<hr>

<div class="container">
<form action="">

<div class="mb-3">
  <label for="formGroupExampleInput" class="form-label">Nombre</label>
  <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
</div>
 <div class="col-12 mt-2">
<button class="btn btn-primary">Guardar</button>
<a class="btn btn-primary" href="/especialidades/show" style="margin-left:2%;">Volver</a>
 </div>
 </form>
</div>


@endsection
