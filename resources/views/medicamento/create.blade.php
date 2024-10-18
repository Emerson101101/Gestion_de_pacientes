@extends('layouts.app')

@section('title', 'Añadir nuevo medicamento')

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
    <h1>Crear Medicamento</h1>
    <h5>Formulario para añadir nuevos medicamentos</h5>
</div>
<hr>

<div id="container">
    <form action="/medicamento/store" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="row mb-3">
            <div class="col-md-6">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" name="nombre" id="nombre" required>
                @error('nombre') 
                <div class="invalid-feedback d-block">
                    <strong>{{ $message }}</strong>
                </div> 
                @enderror 
            </div>

            <div class="col-md-6">
                <label for="fechaI" class="form-label">Fecha de ingreso</label>
                <input type="date" class="form-control" name="fechaI" id="fechaI" required>
                @error('fechaI') 
                <div class="invalid-feedback d-block">
                    <strong>{{ $message }}</strong>
                </div> 
                @enderror 
            </div>

            <div class="col-md-6">
                <label for="fechaV" class="form-label">Fecha de vencimiento</label>
                <input type="date" class="form-control" name="fechaV" id="fechaV" required>
                @error('fechaV') 
                <div class="invalid-feedback d-block">
                    <strong>{{ $message }}</strong>
                </div> 
                @enderror 
            </div>
        
            <div class="col-md-6">
                <label for="forma" class="form-label">Forma farmaceutica</label>
                <input type="text" class="form-control" name="forma" id="forma" required>
                @error('forma') 
                <div class="invalid-feedback d-block">
                    <strong>{{ $message }}</strong>
                </div> 
                @enderror 
            </div>

            <div class="col-md-6">
                <label for="imagen" class="form-label">Imagen</label>
                <input type="file" class="form-control" name="imagen" id="imagen" accept="image/*"> <!-- Agrega accept para restringir tipos de archivo -->
                @error('imagen') 
                <div class="invalid-feedback d-block">
                    <strong>{{ $message }}</strong>
                </div> 
                @enderror 
            </div>
        </div>

        <div class="text-center mt-4">
            <button class="btn btn-primary">Guardar</button>
            <a class="btn btn-secondary" href="/medicamento/show" style="margin-left: 10px;">Volver</a>
        </div>
    </form>
</div>

@endsection
