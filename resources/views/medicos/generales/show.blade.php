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
    <h5>Medicos generales de nuestra clinica</h5>
    </div></center>
    </div>
    <br>
    <a class="btn btn-primary" href="/medicos/generales/create">Añadir nuevo doctor</a>
 <a class="btn btn-danger btn-sm" href="/products/create">PDF</a>

 <table class="table table-hover table-bordered mt-2">
 <tr>
 <td class="border border-secondary">Código</td>
 <td class="border border-secondary">Nombre</td>
 <td class="border border-secondary">Apellido</td>
 <td class="border border-secondary">Especialidad</td>
 <td class="border border-secondary">Telefono</td>

 <td class="border border-secondary">Acciones</td>
 </tr>
 {{-- Listado de categorias --}}
 <tr>
 <td class="border border-secondary">1</td>
 <td class="border border-secondary">Emerson</td>
 <td class="border border-secondary">Sanchez</td>
 <td class="border border-secondary">Generales</td>
 <td class="border border-secondary">7502-1867</td>
 <td class="border border-secondary">
 <a class="btn btn-primary btn-sm" href="/medicos/generales/update">Modificar</a>

<button class="btn btn-danger btn-sm" url="/clientes/destroy/" onclick="destroy(this)" token="{{ csrf_token() }}">Eliminar</button>

 <tr>
 </td>

 
 <td class="border border-secondary">2</td>
 <td class="border border-secondary">Lorena</td>
 <td class="border border-secondary">Sigaran</td>
 <td class="border border-secondary">Generales</td>
 <td class="border border-secondary">7502-1867</td>
 <td class="border border-secondary">
 <a class="btn btn-primary btn-sm" href="/medicos/pediatras/update">Modificar</a>

<button class="btn btn-danger btn-sm" url="/clientes/destroy/" onclick="destroy(this)" token="{{ csrf_token() }}">Eliminar</button>

 <tr>
 </td>

 <td class="border border-secondary">3</td>
 <td class="border border-secondary">Alberto</td>
 <td class="border border-secondary">Surio</td>
 <td class="border border-secondary">Generales</td>
 <td class="border border-secondary">7502-1867</td>
 <td class="border border-secondary">
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