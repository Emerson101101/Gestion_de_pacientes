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

    .is-invalid {
        border-color: #dc3545; /* Bootstrap danger color */
    }

    .invalid-feedback {
        display: block;
    }
</style>

<div class="header">
    <h1>Reporte Citas</h1>
    <h5>Formulario para reporte de citas por fecha</h5>
</div>

<hr>

<div id="container">
    <form action="/fechaCita" method="POST" id="form-id">
        @csrf

        <div class="row mb-3 justify-content-center">

        <div class="col-md-6">
                <label for="medico">Médico</label>
                <select name="medico" id="medico" class="form-control @error('medico') is-invalid @enderror">
                    <option value="">Seleccione un médico</option>
                    @foreach ($medico as $item)
                        <option value="{{ $item->codigo_medico }}">{{ $item->nombre }}</option>
                    @endforeach
                </select>
                @error('medico') 
                <div class="invalid-feedback">
                    <strong>{{ $message }}</strong>
                </div> 
                @enderror
            </div>


            <div class="col-md-6">
                <label for="fecha" class="form-label">Fecha de la cita</label>
                <input type="date" class="form-control @error('fecha') is-invalid @enderror" name="fecha" id="fecha" value="{{ old('fecha') }}">
                @error('fecha') 
                <div class="invalid-feedback">
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
