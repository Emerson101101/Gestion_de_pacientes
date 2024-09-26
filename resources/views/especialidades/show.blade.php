@extends('layouts.app')

@section('title', 'Inicio')

@section('content')

<style>
   
</style>
<div class="container">
<div id="titulo"  class="card">
    <center><div class="card-body">
    <h5>Pacientes registrados</h5>
    </div></center>
    </div>
    <br>
    <a class="btn btn-primary" href="/especialidades/create">Añadir nueva especialidad</a>
 <a class="btn btn-danger btn-sm" href="/products/create">PDF</a>

 <table class="table table-hover table-bordered mt-2">
 <tr>
 <td>Código</td>
 <td>Nombre</td>


 <td>Acciones</td>
 </tr>
 {{-- Listado de categorias --}}
 <tr>
 <td>1</td>
 <td>Odontologo</td>
 <td>
 <a class="btn btn-primary btn-sm" href="/especialidades/update">Modificar</a>

<button class="btn btn-danger btn-sm" url="/clientes/destroy/" onclick="destroy(this)" token="{{ csrf_token() }}">Eliminar</button>

 <tr>
 </td>

 
 <td>2</td>
 <td>Pediatra</td>

 <td>
 <a class="btn btn-primary btn-sm" href="/medicos/pediatras/update">Modificar</a>

<button class="btn btn-danger btn-sm" url="/clientes/destroy/" onclick="destroy(this)" token="{{ csrf_token() }}">Eliminar</button>

 <tr>
 </td>

 <td>3</td>
 <td>Doctor general</td>

 <td>
<a class="btn btn-primary btn-sm" href="/categorias/edit/">Modificar</a>

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