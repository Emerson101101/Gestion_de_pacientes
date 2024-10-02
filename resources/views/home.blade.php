@extends('layouts.app')

@section('title', 'Inicio')

@section('content')

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<style>
   
   #encabezado{
    margin-top:-6%;
    height:30vh;
    
   }
   .contenido{
    margin-top:2%;
      max-width:100%;
      background:white;
      height:83vh;
      background-image: url('/img/fo.png');
        background-size: cover; /* O usa 'contain' según lo que necesites */
        background-repeat: no-repeat;
        background-position: center; 
   } 
   
   #sistema{
    
    margin-top:2%;
    max-width:96%;
   }
   .row{
    margin-top:2%;
   }
   
  
</style>
  <!---p-3 mb-2 bg-body-secondary---->
<body class="p-3 mb-2 bg-body text-dark">
<div id="encabezado" class="p-3 mb-2 bg-info text-dark">
      <center><div class="contenido">
        <br>
      <div id="sistema"class="card">
            <div class="card-body">
            <center><h1><img src="{{ asset('img/BitTeff (1).ico') }}"></h1>
            <h5>Sistema de gestion de registro de pacientes y citas medicas</h5></center>
        </div>
    </div></center>
    </div>
          
      </div></center>
</div>


<div class="container">
      
        
        <br>
          
        <div class="row">
            <div class="col-4">
              <div class="card">
                <div class="card-body">
                  <a class="icon-link text-success text-info-emphasis" href="/citas/show" >
                    <i class="bi bi-amazon text-info-emphasis " style="font-size: 4rem;"></i>
                  <br>
                  <img class="ext-info-emphasis" src="{{ asset('img/citas.png') }}" alt=""style="margin-left:-1%;">
                  
                    Citas de las consultas
                </a>
                </div>
              </div>

            </div>

            <div class="col-4">
              <div class="card">
                <div class="card-body">
                <a class="icon-link text-success text-info-emphasis" href="/auth/show">
                  <i class="bi bi-0-square text-success text-info-emphasis" style="font-size: 4rem;"></i>
                  <br>
                  <img src="{{ asset('img/usu.png') }}" alt="">
                  
                    Usuarios
                </a>
                </div>
              </div>

            </div>
    

            <div class="col-4">
              <div class="card">
                <div class="card-body">
                <a class="icon-link text-success text-info-emphasis" style="" href="/pacientes/show">
                  <i class="bi bi-people-fill text-success text-info-emphasis" style="font-size: 4rem;"></i>
                  <br>
                  <img class="ext-info-emphasis" src="{{ asset('img/paci.png') }}" alt="">

                    Pacientes
                </a>
                </div>
              </div>

            </div>
            <br>
            <br>
            <div class="col-4" style="margin-top:3%; margin-left:17.5%">
              <div class="card">
                <div class="card-body">
                <a class="icon-link text-success text-info-emphasis" href="/medicos/views">
                  <i class="bi bi-0-square text-success text-info-emphasis" style="font-size: 4rem;"></i>
                  <br>
                  <img src="{{ asset('img/espe.png') }}" alt="">
                  
                    Medicos
                </a>
                </div>
              </div>

            </div>
    
            
           
            <div class="col-4" style="margin-top:3%">
              <div class="card">
                <div class="card-body">
                <a class="icon-link text-success text-info-emphasis" href="/clientes/show">
                  <i class="bi bi-clipboard2-minus text-success text-info-emphasis" style="font-size: 4rem;"></i>
                  <br>
                  <img class="ext-info-emphasis" src="{{ asset('img/repo.png') }}" alt="">

                    Reportes
                </a>
                </div>
              </div>
            </div>
              
          </div>

        </div>
    </div>
    <br>
    </body>
      

</body>
</html>
@endsection




<!-- pie -->




