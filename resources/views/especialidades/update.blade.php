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
    <h1>Modificar Especialidad</h1>
    <h5>Formulario para actualizar especialidades</h5>
</div>
<hr>

<div id="container">
    <form action="/especialidades/update/{{$especialidad->codico_especialidad}}" method="POST">
        @csrf
        @method('PUT') 

        <div class="row mb-3">
            <div class="col-12">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" name="nombre" value="{{$especialidad->nombre}}">
                @error('nombre') 
                <span class="invalid-feedback d-block" role="alert">
                    <strong>{{$message}}</strong>
                </span>  
                @enderror
            </div>
        </div>

        <div class="text-center mt-4">
            <button class="btn btn-primary">Guardar</button>
        </div> 
    </form> 
</div>

@endsection
