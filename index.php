<?php
  session_start();
  include('db.php');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="cssjs/jsindex.js"></script>
    <link rel="stylesheet" type="text/css" href="cssjs/cssindex.css"/>
    <title>TecnoStoria</title>
    
  </head>
  <body>
    <div class="container">
      <div class="row">  
        <!-- Mixins-->
        <!-- Pen Title-->
        <div class="pen-title">
          <h1>TecnoStoria</h1>
        </div>
        <div class="container">
          <div class="card"></div>
          <div class="card">
            <h1 class="title">Inicio de sesion</h1>
            <form action="validarusuario.php" method="POST" autocomplete="off">
              <div class="input-container">
                <input type="text" id="correo" name="correo"  required="required"/>
                <label for="Username">Correo</label>
                <div class="bar"></div>
              </div>
              <div class="input-container">
                <input type="password" id="clave" name="clave" required="required"/>
                <label for="Password">Contraseña</label>
                <div class="bar"></div>
              </div>
              <div class="button-container">
                <button type="submit" class="btn btn-outline-primary" name="salvarusuario"><span>Iniciar sesion</span></button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
