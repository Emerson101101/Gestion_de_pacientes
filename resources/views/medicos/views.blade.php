@extends('layouts.app')

@section('title', 'Inicio')

@section('content')

<style>
    .container-custom {
        max-width: 100%;
        margin: 3% auto; /* Centrar horizontalmente el contenedor */
        margin-top: -2.5%;
    }
   
    .tarjetas {
        display: flex;
        justify-content: center; /* Centrar las tarjetas */
        align-items: center;
        flex-wrap: wrap; /* Permite que las tarjetas se ajusten en varias filas si es necesario */
    }
    .card {
        margin: 1rem; /* Añadir margen para separar las tarjetas */
    }
    .blockquote {
        margin-top: -1%;
    }
    .header {
        text-align: center;
        margin-bottom: 30px;
    }
    .header h5 {
        font-size: 2rem;
        font-weight: 700;
        color: #007bff; /* Azul primario */
    }
    .header p {
        color: #6c757d; /* Texto secundario */
        font-size: 1.1rem;
    }
</style>

<div class="container-custom p-3 mb-2 bg-body-secondar rounded shadow-sm text-center">
    <div class="header">
        <h5>Especialidades</h5>
    </div>

    <figure>
        <blockquote class="blockquote"></blockquote>
        <figcaption class="blockquote-footer">
            Selecciona <cite title="Source Title">la tabla de los médicos que quieres ver</cite>
        </figcaption>
    </figure>

    <div class="tarjetas">
        <div class="card shadow" style="width: 18rem; height:22rem;">
            <img src="{{ asset('img/dentista.jpg') }}" class="card-img-top" alt="Odontólogos">
            <div class="card-body">
                <h5 class="card-title">Odontólogos</h5>
                <p class="card-text">Encargados del tratamiento de enfermedades que se dan en la boca.</p>
                <a href="{{ url('/medicos/especialidad/6') }}" class="btn btn-primary">Ver</a> <!-- ID 6 para Odontólogos -->
            </div>
        </div>

        <div class="card shadow" style="width: 18rem; height:22rem;">
            <img src="{{ asset('img/pediatras.jpg') }}" class="card-img-top" alt="Pediatras">
            <div class="card-body">
                <h5 class="card-title">Pediatras</h5>
                <p class="card-text">El encargado del cuidado de los niños desde su nacimiento.</p>
                <a href="{{ url('/medicos/especialidad/1') }}" class="btn btn-primary">Ver</a> <!-- ID 1 para Pediatras -->
            </div>
        </div>

        <div class="card shadow" style="width: 18rem; height:22rem;">
            <img src="{{ asset('img/general.jpg') }}" class="card-img-top" alt="Médicos Generales">
            <div class="card-body">
                <h5 class="card-title">Médicos Generales</h5>
                <p class="card-text">Especialistas encargados de brindar una revisión general.</p>
                <a href="{{ url('/medicos/especialidad/3') }}" class="btn btn-primary">Ver</a> <!-- ID 3 para Médicos Generales -->
            </div>
        </div>

        <div class="card shadow" style="width: 18rem; height:22rem;">
            <img src="{{ asset('img/derma.jpg') }}" class="card-img-top" alt="Médicos Dermatólogos">
            <div class="card-body">
                <h5 class="card-title">Dermatólogos</h5>
                <p class="card-text">Especialistas encargados de brindar una revisión dermatológica.</p>
                <a href="{{ url('/medicos/especialidad/9') }}" class="btn btn-primary">Ver</a> <!-- ID 9 para Dermatólogos -->
            </div>
        </div>
    </div>
</div>

@endsection
