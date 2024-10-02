@extends('layouts.app')

@section('title', 'pacientes')

@section('content')


<div class="container">
    
<div class="card">
    <center><div class="card-body">
    <h5>Odontologos registrados</h5>
    </div></center>
    </div>
    <br>
    <a class="btn btn-primary" href="/medicos/odontologos/create">Añadir nuevo paciente</a>
 <a class="btn btn-danger btn-sm" href="/products/create">PDF</a>

 <table class="table table-hover table-bordered mt-2">
 <tr>
 <td class="p-3 mb-2 bg-success-subtle text-success-emphasis border border-secondary">Código</td>
 <td class="p-3 mb-2 bg-success-subtle text-success-emphasis border border-secondary">Nombre</td>
 <td class="p-3 mb-2 bg-success-subtle text-success-emphasis border border-secondary">Apellido</td>
 <td class="p-3 mb-2 bg-success-subtle text-success-emphasis border border-secondary">Especialidad</td>
 <td class="p-3 mb-2 bg-success-subtle text-success-emphasis border border-secondary">Telefono</td>


 <td class="p-3 mb-2 bg-success-subtle text-success-emphasis border border-secondary"> Acciones</td>
 </tr>
 {{-- Listado de pacientes --}}

 <tr>
 <td class="border border-secondary">1</td>
 <td class="border border-secondary">Emerson</td>
 <td class="border border-secondary">Sanchez</td>
 <td class="border border-secondary">Odontologo</td>
 <td class="border border-secondary">999999</td>


 <td class="border border-secondary">
 <a class="btn btn-primary btn-sm" href="/pacientes/edit/">Modificar</a>

<button class="btn btn-danger btn-sm" url="/pacientes/destroy/" onclick="destroy(this)" token="{{ csrf_token() }}">Eliminar</button>

 </td class="border border-secondary">
 </tr>

 </table>
 
@endsection
@section('scripts') 
 {{-- SweetAlert --}}
 <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
 {{-- JS --}}
 <script src="{{ asset('js/pacientes.js') }}"></script>

@endsection