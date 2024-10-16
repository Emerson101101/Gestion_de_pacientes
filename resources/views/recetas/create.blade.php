@extends('layouts.app')

@section('title', 'Añadir nueva receta')

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
    <h1>Crear Receta</h1>
    <h5>Formulario para añadir nuevas recetas</h5>
</div>
<hr>

<div id="container">
    <form action="/recetas/store" method="POST">
        @csrf

        <div class="row mb-3">
            <div class="col-md-6">
                <label for="nombre" class="form-label">Nombre del medicamento</label>
                <input type="text" class="form-control" name="nombre" id="nombre">
                @error('nombre') 
                <div class="invalid-feedback d-block">
                    <strong>{{ $message }}</strong>
                </div> 
                @enderror 
            </div>

            <div class="col-md-6">
                <label for="horario" class="form-label">Horario</label>
                <input type="text" class="form-control" name="horario" id="horario">
                @error('horario') 
                <div class="invalid-feedback d-block">
                    <strong>{{ $message }}</strong>
                </div> 
                @enderror 
            </div>

            <div class="col-md-6">
                <label for="fecha" class="form-label">Fecha de inicio</label>
                <input type="date" class="form-control" name="fecha" id="fecha">
                @error('fecha') 
                <div class="invalid-feedback d-block">
                    <strong>{{ $message }}</strong>
                </div> 
                @enderror 
            </div>


            <div class="col-md-6">
                <label for="dias" class="form-label">Dias de uso</label>
                <input type="text" class="form-control" name="dias" id="dias">
                @error('dias') 
                <div class="invalid-feedback d-block">
                    <strong>{{ $message }}</strong>
                </div> 
                @enderror 
            </div>

            <div class="col-md-6">
                <label for="dosis" class="form-label">Dosis</label>
                <input type="text" class="form-control" name="dosis" id="dosis">
                @error('dosis') 
                <div class="invalid-feedback d-block">
                    <strong>{{ $message }}</strong>
                </div> 
                @enderror 
            </div>

        </div>
        <div class="text-center mt-4">
            <button class="btn btn-primary">Guardar</button>
            <a class="btn btn-secondary" href="/recetas/show" style="margin-left: 10px;">Volver</a>
        </div>
    </form>
</div>

@endsection
