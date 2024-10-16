@extends('layouts.app')

@section('title', 'Crear Cita')

@section('content')

<style>
    #container {
        max-width: 70%;
        margin: auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        margin-top: 20px;
    }

    .header {
        text-align: center;
        margin-bottom: 20px;
    }

    .header h1 {
        font-size: 2rem;
        font-weight: 600;
        margin: 0;
    }

    .header h5 {
        margin: 5px 0 0;
        font-weight: 400;
    }

    hr {
        border: 1px solid #0056b3;
    }

    .btn-primary {
        border-radius: 5px;
    }
</style>

<div class="header">
    <h1>Crear Cita Medica</h1>
    <h5>Formulario para crear citas</h5>
</div>
<hr>

<div id="container">
    <form action="/citas/store" method="POST" id="form-id">
        @csrf

        <div class="row mb-3">
            <div class="col-md-6">
                <label>Nombre del paciente</label>
                <select name="paciente" class="form-control">
                    @foreach ($pacientes as $item)
                        <option value="{{ $item->codigo_paciente }}">{{ $item->nombre }}</option>
                    @endforeach
                </select>
                @error('paciente') 
                <div class="invalid-feedback d-block">
                    <strong>{{ $message }}</strong>
                </div> 
                @enderror
            </div>

            <div class="col-md-6">
                <label>Medico</label>
                <select name="medico" class="form-control">
                    @foreach ($medico as $item)
                        <option value="{{ $item->codigo_medico }}">{{ $item->nombre }}</option>
                    @endforeach
                </select>
                @error('medico') 
                <div class="invalid-feedback d-block">
                    <strong>{{ $message }}</strong>
                </div> 
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <label>Especialidad</label>
                <select name="especialidad" class="form-control">
                    @foreach ($especialidad as $item)
                        <option value="{{ $item->codico_especialidad }}">{{ $item->nombre }}</option>
                    @endforeach
                </select>
                @error('especialidad') 
                <div class="invalid-feedback d-block">
                    <strong>{{ $message }}</strong>
                </div> 
                @enderror
            </div>

            <div class="col-md-6">
                <label for="fecha" class="form-label">Fecha de la cita</label>
                <input type="date" class="form-control @error('fecha') is-invalid @enderror" name="fecha" id="fecha" value="{{ old('fecha') }}"> 
                @error('fecha') 
                <div class="invalid-feedback d-block">
                    <strong>{{ $message }}</strong>
                </div> 
                @enderror 
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <label for="hora" class="form-label">Hora</label>
                <input type="time" class="form-control @error('hora') is-invalid @enderror" name="hora" id="hora" value="{{ old('hora') }}"> 
                @error('hora') 
                <div class="invalid-feedback d-block">
                    <strong>{{ $message }}</strong>
                </div> 
                @enderror 
            </div>

            <div class="col-md-6">
                <label for="motivo" class="form-label">Motivo</label>
                <input type="text" class="form-control @error('motivo') is-invalid @enderror" name="motivo" id="motivo" value="{{ old('motivo') }}"> 
                @error('motivo') 
                <div class="invalid-feedback d-block">
                    <strong>{{ $message }}</strong>
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

@endsection
