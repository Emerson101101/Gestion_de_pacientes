<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<style>
                            #mimenu{
                                max-width: 100%;
                            }
                            #items_menu{
                                margin-left:-43%;
                            }
                            #logo{
                                margin-left:-7%;
                            }
                            #logo-imagen{
                                width: 23vh;
                                margin-top:-5px;
                            }
                        </style>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg p-3 mb-2 bg-info text-dark">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                <a id="logo" class="navbar-brand" href="/home"><img  id="logo-imagen"src="{{ asset('img/BitTeff (1).ico') }}"></a>
                    
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
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

                       
                        <nav id="mimenu" class="navbar navbar-expand-lg p-3 mb-2 bg-info text-dark">
   
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li id="items_menu" class="nav-item">
          <a class="nav-link active" aria-current="page" href="/pacientes/show">Pacientes <img src="{{ asset('img/users.png') }}" alt=""></a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="#">Citas medicas <img src="{{ asset('img/calendar.png') }}" alt=""></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/medicos/views">Medicos <img src="{{ asset('img/user-md.png') }}" alt=""> </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/especialidades/show">Especialidades <img src="{{ asset('img/id-badge.png') }}" alt=""></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Generar reportes <img src="{{ asset('img/document.png') }}" alt="">
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">PDF </a></li>
            <li><a class="dropdown-item" href="#">Reportes </a></li>
          </ul>
        </li>
      </ul>

                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
