@extends('layout.app')

@section('title', 'Inicio')

@section('content')

<!DOCTYPE html>
<html lang="en">
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
    margin-top:5%;
      max-width:98%;
      background:white;
      height:83vh;
   } 
   .container{
    max-width:94%;
    margin-top:7%;
   }
   #sistema{
    margin-top:2%;
    max-width:96%;
   }
   
   
  
</style>

<body class="p-3 mb-2 bg-body-secondary">
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
                  <a class="icon-link text-success text-info-emphasis" href="/clientes/show">
                    <i class="bi bi-calendar-check text-info-emphasis " style="font-size: 4rem;"></i>
                  <br>
                    Citas de las consultas
                </a>
                </div>
              </div>

            </div>

            <div class="col-4">
              <div class="card">
                <div class="card-body">
                <a class="icon-link text-success text-info-emphasis" style="" href="/clientes/show">
                  <i class="bi bi-people-fill text-success text-info-emphasis" style="font-size: 4rem;"></i>
                  <br>
                    Pacientes
                </a>
                </div>
              </div>

            </div>
            <br>
            <br>
            <div class="col-4">
              <div class="card">
                <div class="card-body">
                <a class="icon-link text-success text-info-emphasis" href="/clientes/show">
                  <i class="bi bi-person-video text-success text-info-emphasis" style="font-size: 4rem;"></i>
                  <br>
                    Medicos
                </a>
                </div>
              </div>

            </div>
    
            
           
            <div class="col-4" style="margin-left:18%; margin-top:3%;">
              <div class="card">
                <div class="card-body">
                <a class="icon-link text-success text-info-emphasis" href="/clientes/show">
                  <i class="bi bi-clipboard2-minus text-success text-info-emphasis" style="font-size: 4rem;"></i>
                  <br>
                    Reportes
                </a>
                </div>
              </div>
            </div>
            
            <div class="col-4" style="margin-top:3%">
              <div class="card">
                <div class="card-body">
                <a class="icon-link text-success text-info-emphasis" href="/clientes/show">
                <i class="bi bi-file-earmark-pdf text-success text-info-emphasis" style="font-size: 4rem;"></i>
                <br>
                    PDF
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




