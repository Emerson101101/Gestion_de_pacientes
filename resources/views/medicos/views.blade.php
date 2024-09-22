@extends('layout.app')

@section('title', 'Inicio')

@section('content')

<style>
     .baner{
        margin-top:-1%;
        background-image: url('/img/medico.jpg');
        background-size: cover; /* O usa 'contain' según lo que necesites */
        background-repeat: no-repeat;
        height: 90vh;
        width: 45vh;
        background-position: top;
        float:left;
        max-width: 45%;
     }
     .container{
        max-width: 100%;
        margin-top:-1%;
     }
     #titulo{
     
        max-width: 75%;
        margin-left:23%
     }
     .tarjetas{
        margin-top:2%;
        margin-left:20%;
        margin-right:-6%;
        display: flex; /* Activa Flexbox */
        justify-content: space-around; /* Espaciado entre elementos */
        align-items: center;
     }
</style>
<div class="baner">
   
</div>

<center><div class="container p-3 mb-2 bg-body-secondary">

    <br>
    <div id="titulo"  class="card">
    <center><div class="card-body">
    <h5>Medicos encargados de darte lo mejor para tu bienestar</h5>
    </div></center>
    </div>
    <br>
    <figure class="text-center">
    <blockquote class="blockquote">
        <p>Especialidades</p>
    </blockquote>
    <figcaption class="blockquote-footer">
        Selecciona <cite title="Source Title"> las lista de los medicos que quieres ver</cite>
    </figcaption>
    </figure>

    <!------------------------------------------------------->
    <div class="tarjetas">
    <div class="card" style="width: 18rem;">
    <img src="{{ asset('img/dentista.jpg') }}" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">Odontologos</h5>
        <p class="card-text">Encargado del tratamiento de enfermedades que se dan en la boca</p>
        <a href="/medicos/odontologos/show" class="btn btn-primary">ver</a>
    </div>
    </div>
     
    <div class="card" style="width: 18rem;">
    <img src="{{ asset('img/pediatras.jpg') }}" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">Pediatras</h5>
        <p class="card-text">El encargado del cuidado de los niños desde su nacimiento</p>
        <a href="/medicos/pediatras/show" class="btn btn-primary">ver</a>
    </div>
    </div>

    <div class="card" style="width: 18rem;">
    <img src="{{ asset('img/general.jpg') }}" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">Medicos Generales</h5>
        <p class="card-text">Es un especialista encargado de brindar una revisión general</p>
        <a href="/medicos/generales/show" class="btn btn-primary">Ver</a>
    </div>
    </div>
    </div>

</div>


@endsection