@extends('layouts.app')

@section('title', 'Pacientes')

@section('content')
<style>
    #container {
        max-width: 99%;
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
    .btn-container {
        display: flex;
        justify-content: center;
        margin-bottom: 20px;
    }
    .table-responsive {
        border-radius: 0.5rem;
        overflow: hidden; /* Para redondear las esquinas */
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.1); /* Sombra más intensa */
    }
    .table thead {
        background-color: #007bff; /* Azul de encabezado */
        color: white; /* Texto blanco en encabezado */
    }
    .table tbody tr:hover {
        background-color: #f1f1f1; /* Color de fila al pasar el mouse */
    }
    .action-buttons {
        display: flex;
        gap: 5px; /* Espacio entre los botones */
    }
</style>

<div id="container" class="container">
    <div class="header">
        <h5>Pacientes Registrados</h5>
        <p>Aquí puedes gestionar todos los pacientes registrados en el sistema.</p>
    </div>

    <div class="btn-container">
        <a class="btn btn-primary me-2" href="/pacientes/create">
            <i class="fas fa-plus-circle"></i> Añadir Nuevo Paciente
        </a>
        <a class="btn btn-danger" href="/reportePacientes">
            <i class="fas fa-file-pdf"></i> PDF
        </a>
    </div>

    <div class="table-responsive">
        <table class="table table-striped table-bordered mt-2">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Nombre</th>
                    <th>Edad</th>
                    <th>Teléfono</th>
                    <th>Fecha de Consulta</th>
                    <th>Dirección</th>
                    <th>Motivo de Consulta</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                {{-- Listado de pacientes --}}
                @foreach ($pacientes as $item)
                    <tr>
                        <td>{{ $item->codigo_paciente }}</td>
                        <td>{{ $item->nombre }}</td>
                        <td>{{ $item->edad }}</td>
                        <td>{{ $item->telefono }}</td>
                        <td>{{ $item->fecha }}</td>
                        <td>{{ $item->direccion }}</td>
                        <td>{{ $item->detallesconsulta }}</td>
                        <td class="action-buttons">
                            <a class="btn btn-primary btn-sm" href="/pacientes/edit/{{ $item->codigo_paciente }}" title="Modificar">
                                <i class="fas fa-edit"></i> Modificar
                            </a>
                            <button class="btn btn-danger btn-sm" url="/pacientes/destroy/{{ $item->codigo_paciente }}" onclick="destroy(this)" token="{{ csrf_token() }}" title="Eliminar">
                                <i class="fas fa-trash-alt"></i> Eliminar
                            </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection

@section('scripts') 
{{-- SweetAlert --}}
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
{{-- JS --}}
<script src="{{ asset('js/pacientes.js') }}"></script>
@endsection
