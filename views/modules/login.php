<?php 
  if(isset($_POST['validarusuario'])){
    $usuario = new UsuarioControlador();
    $usuario->validarUsuarioControlador();
  }
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
    <script src="views/js/jsindex.js"></script>
    <link rel="stylesheet" type="text/css" href="views/css/cssindex.css"/>

    <title>TecnoStoria</title>
    <div class="container">
      <div class="row">
        <div class="pen-title mx-auto py-6">
          <h1>TecnoStoria</h1>
        </div>
        <div class="container my-0">
          <div class="card"></div>
          <div class="card">
            <h1 class="title">Inicio de sesion</h1>
            
            <form action="" method="POST" autocomplete="off">
            <?php if(isset($_GET['err']) && $_GET['err'] == 'err'){
              print "<div class='text-center mx-5'><h3 class='alert alert-danger'>Error al iniciar sesion</h3></div>"  ;
            }
            ?>
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
                <button type="submit" class="btn btn-outline-primary" name="validarusuario" id="validarusuario"><span>Iniciar sesion</span></button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>