@extends('layouts.app')

@section('title', 'Crear Médico')

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

    .is-invalid {
        border-color: #dc3545;
    }

    .invalid-feedback {
        display: block;
    }
</style>

<div class="header">
    <h1>Reporte PDF</h1>
    <h5>Formulario para hacer PDF de médico por medio de especialidad</h5>
</div>
<hr>

<div id="container">
    <form action="/EspecialidadMedico" method="POST">
        @csrf

        <div class="row mb-3 justify-content-center">
            <div class="col-md-6">
                <label for="especialidad">Especialidad</label>
                <select name="especialidad" id="especialidad" class="form-control @error('especialidad') is-invalid @enderror">
                <option value="">Seleccione una especialidad</option>
                    @foreach ($especialidad as $item) 
                        <option value="{{ $item->codico_especialidad }}">{{ $item->nombre }}</option>
                    @endforeach 
                </select>
                @error('especialidad') 
                <div class="invalid-feedback">
                    <strong>{{ $message }}</strong>
                </div> 
                @enderror
            </div>
        </div>

        <div class="text-center mt-4">
            <button class="btn btn-primary">Guardar</button>
            <a class="btn btn-secondary" href="/medicos/views" style="margin-left: 10px;">Volver</a>
        </div>
    </form>
</div>

@endsection
