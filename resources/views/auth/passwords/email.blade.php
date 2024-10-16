@extends('layouts.app')

@section('title', 'Reestablecer Contraseña')

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
    <h1>Reestablecer Contraseña</h1>
    <h5>Formulario para enviar enlace de restablecimiento</h5>
</div>
<hr>

<div id="container">
    <div class="card-body">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="row mb-3">
                <label for="email" class="col-md-4 col-form-label text-md-end">Correo Electrónico</label>

                <div class="col-md-6">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="text-center mt-4">
                <button type="submit" class="btn btn-primary">
                    Enviar enlace
                </button>
            </div>
        </form>
    </div>
</div>

@endsection
