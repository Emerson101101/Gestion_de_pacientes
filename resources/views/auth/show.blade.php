@extends('layouts.app')

@section('title', 'pacientes')

@section('content')


<div class="container">
    
<div class="card">
    <center><div class="card-body">
    <h5>Usuarios registrados</h5>
    </div></center>
    </div>
    <br>
    <a class="btn btn-primary" href="/auth/register">Añadir nuevo usuario</a>

 <table class="table table-hover table-bordered mt-2">
 <tr>
 <td class="p-3 mb-2 bg-success-subtle text-success-emphasis border border-secondary">Nombre</td>
 <td class="p-3 mb-2 bg-success-subtle text-success-emphasis border border-secondary">Correo</td>
 <td class="p-3 mb-2 bg-success-subtle text-success-emphasis border border-secondary">Contraseña</td>
 <td class="p-3 mb-2 bg-success-subtle text-success-emphasis border border-secondary"> Acciones</td>
 </tr>
 {{-- Listado de pacientes --}}

 @foreach ($user as $item) 
 <tr>
 <td class="border border-secondary">{{$item->name }}</td>
 <td class="border border-secondary">{{$item->email }}</td>
 <td class="border border-secondary">{{$item->password }}</td>
 <td class="border border-secondary">
 <a class="btn btn-primary btn-sm" href="/auth/edit/{{$item->id}}">Modificar</a>

<button class="btn btn-danger btn-sm" url="/auth/destroy/{{$item->id}}" onclick="destroy(this)" token="{{ csrf_token() }}">Eliminar</button>

 </td class="border border-secondary">
 </tr>

 @endforeach
 </table>
 
@endsection
@section('scripts') 
 {{-- SweetAlert --}}
 <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
 {{-- JS --}}
 <script src="{{ asset('js/pacientes.js') }}"></script>

@endsection