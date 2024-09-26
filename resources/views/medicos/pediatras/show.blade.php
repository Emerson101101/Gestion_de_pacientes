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
    <h5>Pediatras de nuestra clinica</h5>
    </div></center>
    </div>
    <br>
    <a class="btn btn-primary" href="/medicos/pediatras/create">Añadir nuevo pediatra</a>
 <a class="btn btn-danger btn-sm" href="/products/create">PDF</a>

 <table class="table table-hover table-bordered mt-2">
 <tr>
 <td class="p-3 mb-2 bg-success-subtle text-success-emphasis border border-secondary">Código</td>
 <td class="p-3 mb-2 bg-success-subtle text-success-emphasis border border-secondary">Nombre</td>
 <td class="p-3 mb-2 bg-success-subtle text-success-emphasis border border-secondary">Apellido</td>
 <td class="p-3 mb-2 bg-success-subtle text-success-emphasis border border-secondary">Especialidad</td>
 <td class="p-3 mb-2 bg-success-subtle text-success-emphasis border border-secondary">Telefono</td>

 <td class="p-3 mb-2 bg-success-subtle text-success-emphasis border border-secondary">Acciones</td>
 </tr>
 {{-- Listado de categorias --}}
 <tr>
 <td>1</td>
 <td>Emerson</td>
 <td>Sanchez</td>
 <td>Pediatra</td>
 <td>7502-1867</td>
 <td>
 <a class="btn btn-primary btn-sm" href="/medicos/pediatras/update">Modificar</a>

<button class="btn btn-danger btn-sm" url="/clientes/destroy/" onclick="destroy(this)" token="{{ csrf_token() }}">Eliminar</button>

 <tr>
 </td>

 
 <td>2</td>
 <td>Lorena</td>
 <td>Sigaran</td>
 <td>Pediatra</td>
 <td>7502-1867</td>
 <td>
 <a class="btn btn-primary btn-sm" href="/medicos/pediatras/update">Modificar</a>

<button class="btn btn-danger btn-sm" url="/clientes/destroy/" onclick="destroy(this)" token="{{ csrf_token() }}">Eliminar</button>

 <tr>
 </td>

 <td>3</td>
 <td>Alberto</td>
 <td>Surio</td>
 <td>Pediatra</td>
 <td>7502-1867</td>
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