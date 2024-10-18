@extends('layouts.app')

@section('title', 'Actualizar')

@section('content')

<style>
    #container {
        max-width: 70%;
        margin: auto; /* Centra el contenedor */
        background-color: #fff; /* Fondo blanco */
        padding: 20px; /* Espaciado interno */
        border-radius: 8px; /* Bordes redondeados */
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1); /* Sombra suave */
        margin-top: 20px; /* Espacio superior */
    }

    .header {
        text-align: center; /* Centrar texto */
        margin-bottom: 20px; /* Espaciado inferior */
    }

    .header h1 {
        font-size: 2rem; /* Tamaño de fuente más grande */
        font-weight: 600; /* Peso de fuente más fuerte */
        margin: 0; /* Elimina margen */
    }

    .header h5 {
        margin: 5px 0 0; /* Espaciado del subtítulo */
        font-weight: 400; /* Peso de fuente más ligero */
    }

    hr {
        border: 1px solid #0056b3; /* Línea horizontal azul más oscura */
    }

    .btn-primary {
        border-radius: 5px; /* Bordes redondeados para botones */
    }
</style>

<div class="header">
    <h1>Actualizar Médico</h1>
    <h5>Formulario para actualizar médicos</h5>
</div>
<hr>
<div id="container">
    <form action="/medicos/update/{{$medico->codigo_medico}}" method="POST">
        @csrf
        @method('PUT') 

        <div class="row mb-3">
            <div class="col-md-6">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" name="nombre" value="{{$medico->nombre}}">
                @error('nombre') 
                <div class="invalid-feedback d-block">
                    <strong>{{$message}}</strong>
                </div>  
                @enderror
            </div>

            <div class="col-md-6">
                <label for="apellido" class="form-label">Apellido</label>
                <input type="text" class="form-control" name="apellido" value="{{$medico->apellido}}">
                @error('apellido') 
                <div class="invalid-feedback d-block">
                    <strong>{{$message}}</strong>
                </div>  
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <label for="especialidad" class="form-label">Especialidad</label>
                <select name="especialidad" class="form-control">
                    @foreach ($especialidad as $item) 
                        <option value="{{$item->codico_especialidad}}" {{(($item->codigo==$medico->especialidad)?'selected':'')}}>{{$item->nombre}}</option>
                    @endforeach 
                </select>
                @error('especialidad') 
                <div class="invalid-feedback d-block">
                    <strong>{{$message}}</strong>
                </div> 
                @enderror
            </div>

            <div class="col-md-6">
                <label for="telefono" class="form-label">Teléfono</label>
                <input type="text" class="form-control" name="telefono" value="{{$medico->telefono}}">
                @error('telefono') 
                <div class="invalid-feedback d-block">
                    <strong>{{$message}}</strong>
                </div>  
                @enderror
            </div>
        </div>

        <div class="text-center mt-4">
            <button class="btn btn-primary">Guardar</button>
            <a class="btn btn-secondary" href="/medicos/show" style="margin-left: 10px;">Volver</a>
        </div> 
    </form> 
</div>
<br>

@endsection
