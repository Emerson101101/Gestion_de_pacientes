@extends('layouts.app')

@section('title', 'Medicamentos Registrados')

@section('content')

<style>
    .card {
        border: 3px solid #1111;
        border-radius: 8px;
        transition: transform 0.2s;
        height: auto; /* Permite que la tarjeta ajuste su altura automáticamente */
    }
    .card:hover {
        transform: scale(1.05);
    }
    .card img {
        max-height: 80px; /* Ajusta la altura máxima de la imagen */
        max-width: 100%; /* Asegura que la imagen ocupe todo el ancho de la tarjeta */
        object-fit: contain; /* Mantiene la proporción de la imagen */
    }
    .card-body {
        padding: 0.1rem; /* Espaciado interno reducido */
    }
    .action-buttons {
        justify-content: space-between;
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

<div id="container" class="container">
    <div class="text-center header">
        <h5 class="font-weight-bold">Medicamentos Registrados</h5>
        <p>Aquí puedes gestionar todos los medicamentos registrados en el sistema.</p>
    </div>

    <div class="text-center mb-3">
    <a class="btn btn-primary" href="/medicamento/create">
        <i class="fas fa-plus-circle"></i> Añadir Nuevo Medicamento
    </a>
    <a class="btn btn-danger" href="/reporteMedicamento">
        <i class="fas fa-file-pdf"></i> PDF
    </a>
</div>

    <div class="row">
        {{-- Listado de medicamentos --}}
        @foreach ($medicamento as $item)
            <div class="col-md-4 mb-4"> <!-- Columna de Bootstrap -->
                <div class="card text-center">
                    <img src="{{ asset('storage/' . $item->imagen) }}" alt="{{ $item->nombre }}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">{{ $item->nombre }}</h5>
                        <p class="card-text"><strong>Código:</strong> {{ $item->codigo_medicamento }}</p>
                        <p class="card-text"><strong>Fecha de Ingreso:</strong> {{ $item->fechaI }}</p>
                        <p class="card-text"><strong>Fecha de Vencimiento:</strong> {{ $item->fechaV }}</p>
                        <p class="card-text"><strong>Forma Farmacéutica:</strong> {{ $item->forma }}</p>
                        <div class="action-buttons">
                            <a class="btn btn-primary btn-sm" href="/medicamento/edit/{{ $item->codigo_medicamento }}" title="Modificar">
                                <i class="fas fa-edit"></i> Modificar
                            </a>
                            <button class="btn btn-danger btn-sm" data-id="{{ $item->codigo_medicamento }}" onclick="destroy(this)" title="Eliminar">
                                <i class="fas fa-trash-alt"></i> Eliminar
                            </button>

                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection

@section('scripts') 
{{-- SweetAlert --}}
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
{{-- JS --}}
<script src="{{ asset('js/medicamento.js') }}"></script>
@endsection
