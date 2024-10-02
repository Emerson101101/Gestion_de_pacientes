@extends('layouts.app')

@section('title', 'Actualizar')

@section('content')
<h1 class="text-center">Modificar</h1>
 <h5 class="text-center">Formulario para actualizar usuarios</h5>
<hr>

<div class="container">
 <form action="/auth/update/{{$user->id}}" method="POST">
@csrf
 @method('PUT') 
 <div class="row">
<div class="col-6">
Nombre 
 <input type="text" class="form-control" name="name"
value="{{$user->name}}"> @error('nombre') 
<span class="invalid-feedback d-block" role="alert">
<strong>{{$message}}</strong>

</span>  
 @enderror
 </div>

 <div class="col-6">
Email
 <input type="text" class="form-control" name="email"
value="{{$user->email}}"> @error('email') 
<span class="invalid-feedback d-block" role="alert">
<strong>{{$message}}</strong>

</span>  
 @enderror
 </div>

<div class="col-6">
Contraseña
 <input type="text" class="form-control" name="password"
value="{{$user->password}}"> @error('password') 
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