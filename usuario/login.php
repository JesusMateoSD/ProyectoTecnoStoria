<?php

if($_POST){
  header('Location:index.php');
}
?>

<!doctype html>
<html lang="en">
  <head>
  <title>Login TecnoStoria</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <link href="../resources/css/style.css" type="text/css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

  </head>

  <body>
      <div class="container">
        <div class="m-0 vh-100 row justify-content-center">
          <img src="../resources/img/Logo TecnoStoria Page.png" style="width: 650px; height: 215px;" width="50" alt="" class="mt-5 mb-0">
          <div class="my-auto col-md-12">
            <div class="card text-center">
              <div class="card-header">
                Login
              </div>
              <div class="card-body">
                <form action="" method="POST">
                  <div class="mb-3">
                    <label>Usuario</label>
                    <input type="text" class="form-control" name="usuario" id="usuario" aria-describedby="emailHelpId" placeholder="Ingrese su usuario">
                    <small id="emailHelpId" class="form-text text-muted">Ingrese el usuario</small>
                  </div>

                  <div class="mb-3">
                    <label>Contrasena</label>
                    <input type="password" class="form-control" name="contrasena" id="contrasena" placeholder="Ingrese su contrasena">
                  </div>

                  <button type="submit" class="btn btn-primary">Ingresar</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
  </body>
</html>