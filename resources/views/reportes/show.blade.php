@extends('layouts.app')

@section('title', 'Pacientes')

@section('content')

<style>
    .header {
        margin-top:-4%;
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
<div id="container" class="container my-5">
<div class="header">
        <h5>Reportes PDF</h5>
        <p>Aquí puedes ver todos los reportes guardados del sistema.</p>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card border-light rounded-lg shadow">
                <div class="card-body text-center">
                    <div class="mb-3">
                        <i class="fas fa-user fa-2x text-primary"></i>
                    </div>
                    <h5 class="card-title">Reporte de Pacientes</h5>
                    <p class="card-text text-muted">PDF de todos los pacientes registrados en el sistema.</p>
                    <a class="btn btn-primary" href="/reportePacientes">
                        <i class="fas fa-file-pdf"></i>PDF
                    </a>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card border-light rounded-lg shadow">
                <div class="card-body text-center">
                    <div class="mb-3">
                        <i class="fas fa-calendar-check fa-2x text-primary"></i>
                    </div>
                    <h5 class="card-title">Reporte de Citas Médicas</h5>
                    <p class="card-text text-muted">PDF de todas las citas médicas registradas en el sistema.</p>
                    <a class="btn btn-primary" href="/reporteCitasMedicas">
                        <i class="fas fa-file-pdf"></i>PDF
                    </a>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card border-light rounded-lg shadow">
                <div class="card-body text-center">
                    <div class="mb-3">
                        <i class="fas fa-user-md fa-2x text-primary"></i>
                    </div>
                    <h5 class="card-title">Reporte de Médicos</h5>
                    <p class="card-text text-muted">PDF de todos los médicos registrados en el sistema.</p>
                    <a class="btn btn-primary" href="/reporteMedicos">
                        <i class="fas fa-file-pdf"></i>PDF
                    </a>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card border-light rounded-lg shadow">
                <div class="card-body text-center">
                    <div class="mb-3">
                        <i class="fas fa-users fa-2x text-primary"></i>
                    </div>
                    <h5 class="card-title">Reporte de Usuarios</h5>
                    <p class="card-text text-muted">PDF de todos los usuarios registrados en el sistema.</p>
                    <a class="btn btn-primary" href="/reporteUsuarios">
                        <i class="fas fa-file-pdf"></i>PDF
                    </a>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card border-light rounded-lg shadow">
                <div class="card-body text-center">
                    <div class="mb-3">
                        <i class="fas fa-receipt fa-2x text-primary"></i>
                    </div>
                    <h5 class="card-title">Reporte de Recetas</h5>
                    <p class="card-text text-muted">PDF de todas las recetas registradas en el sistema.</p>
                    <a class="btn btn-primary" href="/reporteRecetas">
                        <i class="fas fa-file-pdf"></i>PDF
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts') 
{{-- SweetAlert --}}
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
{{-- JS --}}
<script src="{{ asset('js/pacientes.js') }}"></script>
@endsection
