
@extends('layout.login')

@section('title', 'Inicio')

@section('content')

<style>
    

</style>

    <div class="container">
<body>
    

      <div id="inicio"class="card">
        <div class="btn btn-primary">
          Inicio de sesión
        </div>
        <div class="card-body">
          <h5 class="card-title">Ingrese sus datos</h5>
          <br>
          <form action="?c=<?php echo base64_encode("Login");?>&a=<?php echo base64_encode("Entrar");?>" method="post">
            <div class="form-floating mb-3">
              <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" required name="email">
              <label for="floatingInput">Email</label>
            </div>
            <div class="form-floating">
              <input type="password" class="form-control" id="floatingPassword" placeholder="Contraseña" name="clave">
              <label for="floatingPassword">Contraseña</label>
            </div>
            <br>
            <button type="submit" class="btn btn-primary" href="/home">Entrar</button>
          </form>
        </div>
      </div>
      <br>
</body>
</div>
      @endsection

<!-- pie -->