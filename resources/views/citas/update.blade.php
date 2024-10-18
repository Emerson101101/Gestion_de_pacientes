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
    <h1>Actualizar Citas</h1>
    <h5>Formulario para actualizar citas médicas</h5>
</div>
<hr>
<div id="container">
    
    <form action="/citas/update/{{$citas->codigo_cita}}" method="POST">
        @csrf
        @method('PUT') 

        <div class="row mb-3">
            <div class="col-md-6">
                <label for="paciente" class="form-label">Nombre del paciente</label>
                <select name="paciente" class="form-control">
                    @foreach ($pacientes as $item) 
                        <option value="{{$item->codigo_paciente}}" {{(($item->codigo_paciente==$citas->paciente)?'selected':'')}}>{{$item->nombre}}</option>
                    @endforeach 
                </select>
                @error('paciente') 
                <div class="invalid-feedback d-block">
                    <strong>{{$message}}</strong>
                </div> 
                @enderror
            </div>

            <div class="col-md-6">
                <label for="medico" class="form-label">Médico</label>
                <select name="medico" class="form-control">
                    @foreach ($medicos as $item) 
                        <option value="{{$item->codigo_medico}}" {{(($item->codigo_medico==$citas->medico)?'selected':'')}}>{{$item->nombre}}</option>
                    @endforeach 
                </select>
                @error('medico') 
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
                        <option value="{{$item->codico_especialidad}}" {{(($item->codico_especialidad==$citas->especialidad)?'selected':'')}}>{{$item->nombre}}</option>
                    @endforeach 
                </select>
                @error('especialidad') 
                <div class="invalid-feedback d-block">
                    <strong>{{$message}}</strong>
                </div> 
                @enderror
            </div>

            <div class="col-md-6">
                <label for="fecha" class="form-label">Fecha</label>
                <input type="date" class="form-control" name="fecha" value="{{$citas->fecha}}">
                @error('fecha') 
                <div class="invalid-feedback d-block">
                    <strong>{{$message}}</strong>
                </div>  
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <label for="hora" class="form-label">Hora</label>
                <input type="time" class="form-control" name="hora" value="{{$citas->hora}}">
                @error('hora') 
                <div class="invalid-feedback d-block">
                    <strong>{{$message}}</strong>
                </div>  
                @enderror
            </div>

            <div class="col-md-6">
                <label for="motivo" class="form-label">Motivo</label>
                <input type="text" class="form-control" name="motivo" value="{{$citas->motivo}}">
                @error('motivo') 
                <div class="invalid-feedback d-block">
                    <strong>{{$message}}</strong>
                </div>  
                @enderror
            </div>
        </div>

        <div class="text-center mt-4">
            <button class="btn btn-primary">Guardar</button>
            <a class="btn btn-secondary" href="/citas/show" style="margin-left: 10px;">Volver</a>
        </div> 
    </form> 
</div>
<br>

@endsection
