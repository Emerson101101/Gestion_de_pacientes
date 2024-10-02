@extends('layouts.app')

@section('title', 'pacientes')

@section('content')


<div class="container">
    
<div class="card">
    <center><div class="card-body">
    <h5>Pacientes registrados</h5>
    </div></center>
    </div>
    <br>
    <a class="btn btn-primary" href="/pacientes/create">Añadir nuevo paciente</a>
 <a class="btn btn-danger btn-sm" href="/products/create">PDF</a>

 <table class="table table-hover table-bordered mt-2">
 <tr>
 <td class="p-3 mb-2 bg-success-subtle text-success-emphasis border border-secondary">Código</td>
 <td class="p-3 mb-2 bg-success-subtle text-success-emphasis border border-secondary">Nombre</td>
 <td class="p-3 mb-2 bg-success-subtle text-success-emphasis border border-secondary">Edad</td>
 <td class="p-3 mb-2 bg-success-subtle text-success-emphasis border border-secondary">Telefono</td>
 <td class="p-3 mb-2 bg-success-subtle text-success-emphasis border border-secondary">Fecha de Consulta</td>
 <td class="p-3 mb-2 bg-success-subtle text-success-emphasis border border-secondary">Direccion</td>
 <td class="p-3 mb-2 bg-success-subtle text-success-emphasis border border-secondary">Motivo de Consulta</td>

 <td class="p-3 mb-2 bg-success-subtle text-success-emphasis border border-secondary"> Acciones</td>
 </tr>
 {{-- Listado de pacientes --}}

 @foreach ($pacientes as $item) 
 <tr>
 <td class="border border-secondary">{{$item->codigo_paciente}}</td>
 <td class="border border-secondary">{{$item->nombre }}</td>
 <td class="border border-secondary">{{$item->edad }}</td>
 <td class="border border-secondary">{{$item->telefono }}</td>
 <td class="border border-secondary">{{$item->fecha }}</td>
 <td class="border border-secondary">{{$item->direccion }}</td>
 <td class="border border-secondary">{{$item->detallesconsulta }}</td>
 <td class="border border-secondary">
 <a class="btn btn-primary btn-sm" href="/pacientes/edit/{{$item->codigo_paciente}}">Modificar</a>

<button class="btn btn-danger btn-sm" url="/pacientes/destroy/{{$item->codigo_paciente}}" onclick="destroy(this)" token="{{ csrf_token() }}">Eliminar</button>

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