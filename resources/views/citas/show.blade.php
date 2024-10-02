@extends('layouts.app')

@section('title', 'Inicio')

@section('content')

<style>
    #container{
        margin-top:3%;
    }
</style>
<div id="container" class="container">
<div id="titulo"  class="card">
    <center><div class="card-body">
    <h5>Citas registradas</h5>
    </div></center>
    </div>
    <br>
    <a class="btn btn-primary" href="/citas/create">Añadir nuevas citas</a>
 <a class="btn btn-danger btn-sm" href="/products/create">PDF</a>

 <table class="table table-hover table-bordered mt-2">
 <tr>
 <td class="p-3 mb-2 bg-success-subtle text-success-emphasis border border-secondary">Código</td>
 <td class="p-3 mb-2 bg-success-subtle text-success-emphasis border border-secondary">Nombre del paciente</td>
 <td class="p-3 mb-2 bg-success-subtle text-success-emphasis border border-secondary">Medico</td>
 <td class="p-3 mb-2 bg-success-subtle text-success-emphasis border border-secondary">Especialidad</td>
 <td class="p-3 mb-2 bg-success-subtle text-success-emphasis border border-secondary">Fecha de la cita</td>
 <td class="p-3 mb-2 bg-success-subtle text-success-emphasis border border-secondary">Hora</td>
 <td class="p-3 mb-2 bg-success-subtle text-success-emphasis border border-secondary">Motivo</td>

 <td class="p-3 mb-2 bg-success-subtle text-success-emphasis border border-secondary">Acciones</td>
 </tr>
 {{-- Listado de categorias --}}
 <tr>
 <td class="border border-secondary">1</td>
 <td class="border border-secondary">Emerson</td>
 <td class="border border-secondary">Alberto</td>
 <td class="border border-secondary">General</td>
 <td class="border border-secondary">20-10-24</td>
 <td class="border border-secondary">7:00 AM</td>
 <td class="border border-secondary">Control de la tos</td>
 <td class="border border-secondary">
 <a class="btn btn-primary btn-sm" href="/citas/update">Modificar</a>

<button class="btn btn-danger btn-sm" url="/clientes/destroy/" onclick="destroy(this)" token="{{ csrf_token() }}">Eliminar</button>

 <tr>
 </td>

 <td class="border border-secondary">1</td>
 <td class="border border-secondary">Emerson</td>
 <td class="border border-secondary">Alberto</td>
 <td class="border border-secondary">General</td>
 <td class="border border-secondary">20-10-24</td>
 <td class="border border-secondary">7:00 AM</td>
 <td class="border border-secondary">Control de la tos</td>
 <td class="border border-secondary">
 <a class="btn btn-primary btn-sm" href="/citas/update">Modificar</a>

<button class="btn btn-danger btn-sm" url="/clientes/destroy/" onclick="destroy(this)" token="{{ csrf_token() }}">Eliminar</button>

 <tr>
 </td>

 <td class="border border-secondary">1</td>
 <td class="border border-secondary">Emerson</td>
 <td class="border border-secondary">Alberto</td>
 <td class="border border-secondary">General</td>
 <td class="border border-secondary">20-10-24</td>
 <td class="border border-secondary">7:00 AM</td>
 <td class="border border-secondary">Control de la tos</td>
 <td class="border border-secondary">
<a class="btn btn-primary btn-sm" href="/citas/update/">Modificar</a>

<button class="btn btn-danger btn-sm" url="/clientes/destroy/" onclick="destroy(this)" token="{{ csrf_token() }}">Eliminar</button>

</td>
 </tr> 
 </table>
 
@endsection
@section('scripts') 
 {{-- SweetAlert --}}
 <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
 {{-- JS --}}
 <script src="{{ asset('js/product.js') }}"></script>
 </div>
@endsection