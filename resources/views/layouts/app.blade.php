<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>BitTeff</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<style>
    #mimenu {
        max-width: 100%;
    }
    #items_menu {
        margin-left: -30%;
        display: flex;
        align-items: center;
    }
    #logo {
        margin-left: -7%;
    }
    #logo-imagen {
        max-width: 190px;
        height: 40px;
        margin: 0 auto;
        display: block;
    }
    .nav-link:hover {
        color: #ffdd57 !important;
    }
    .nav-item.dropdown {
        min-width: 200px; /* Establece un ancho mínimo para el dropdown */
    }
    #navbarDropdown {
        white-space: nowrap; /* Evita que el nombre se divida */
        overflow: hidden; /* Oculta el texto que desborda */
        text-overflow: ellipsis; /* Agrega puntos suspensivos si el texto es demasiado largo */
        max-width: 150px; /* Ancho máximo del nombre del usuario */
    }
    .navbar-nav {
        display: flex; /* Distribuir elementos en línea */
        align-items: center; /* Alinear verticalmente */
    }
</style>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg p-3 mb-2 bg-info text-dark">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <a id="logo" class="navbar-brand" href="/home">
                        <img id="logo-imagen" src="{{ asset('img/BitTeff (1).ico') }}">
                    </a>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto"></ul>

                    <ul class="navbar-nav ms-auto">
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Registrar') }}</a>
                                </li>
                            @endif
                        @else
                            <nav id="mimenu" class="navbar navbar-expand-lg p-3">
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                        <li id="items_menu" class="nav-item">
                                            <a class="nav-link active" aria-current="page" href="/pacientes/show">Pacientes <img src="{{ asset('img/users.png') }}" alt=""></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="/citas/show">Citas medicas <img src="{{ asset('img/calendar.png') }}" alt=""></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="/medicos/views">Medicos <img src="{{ asset('img/user-md.png') }}" alt=""></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="/auth/show">Usuarios <img src="{{ asset('img/usuario.png') }}" alt=""></a>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                Más opciones
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="/especialidades/show">Especialidades <img src="{{ asset('img/id-badge.png') }}" alt=""></a></li>
                                                <li><a class="dropdown-item" href="/medicamento/show">Medicamentos <img src="{{ asset('img/id-badge.png') }}" alt=""></a></li>
                                                <li><a class="dropdown-item" href="/recetas/show">Recetas <img src="{{ asset('img/document.png') }}" alt=""></a></li>
                                                <li><a class="dropdown-item" href="/reportes/show">Reportes <img src="{{ asset('img/pdf.png') }}" alt=""></a></li>
                                            </ul>
                                        </li>
                                    </ul>

                                    <li class="nav-item dropdown">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" title="{{ Auth::user()->name }}">
                                            {{ Auth::user()->name }}
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                                Cerra Sesion
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>
                                </div>
                            </nav>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    @yield('scripts')
</body>
</html>
