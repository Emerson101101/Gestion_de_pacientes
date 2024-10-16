@extends('layout.app')

@section('content')
<style>
body {
    background: linear-gradient(to right, #A7C6ED, #E3F2FD); /* Degradado más suave */
}

#login {
    max-width: 40%;
    margin: 5% auto;
    padding: 20px;
    border-radius: 10px; 
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1); /* Sombra sutil */
    background-color: rgba(255, 255, 255, 0.9); /* Fondo blanco con opacidad */
}

h1 {
    color: #343a40; /* Color oscuro para el título */
    font-size: 1.8rem;
    margin-bottom: 20px;
    text-align: center; 
}

.card-header {
    background-color:white ; 
        color: black;
        text-align: center;
        font-weight: bold;
        font-size: 1.25rem;
}

.btn-primary {
    transition: background-color 0.3s, transform 0.3s; 
}

.btn-primary:hover {
    background-color: #0056b3; 
    transform: scale(1.05); 
}

.text-center a {
    color: #007bff; 
}

.text-center a:hover {
    text-decoration: underline; 
}

</style>

<div id="container" class="container">
    <h1>Sistema de gestion de pacientes y citas medicas</h1>

    <div id="login" class="card" style="margin-top:-1%">
        <div class="card-header">
            Inicio de Sesión
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="mb-3">
                    <label for="email" class="form-label">Correo Electrónico</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Contraseña</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3 form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label class="form-check-label" for="remember">Recordar contraseña</label>
                </div>

                <div class="d-grid mb-3">
                    <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
                </div>
                <div class="text-center">
                    @if (Route::has('password.request'))
                        <a class="text-decoration-none" href="{{ route('password.request') }}">¿Olvidaste tu contraseña?</a>
                    @endif
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
