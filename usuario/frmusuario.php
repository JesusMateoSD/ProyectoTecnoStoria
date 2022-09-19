<?php
  session_start();
  include('../connection/db.php');
  include('../template/navbar.php');
 ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TecnoStoria</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
 
   <link href="../resources/css/style.css" type="text/css" rel="stylesheet">
  </head>

<main class="container p-0">
  <br>
  <div class="row" style="padding: 2% 0% 0% 43%">
    <h2><b>Usuarios</b></h2>
  </div>
  <div class="container-fluid">
    <!-- <div class="row"> -->
    <form action="salvarparametro.php" method="POST" enctype="multipart/form-data">
      <div class="row">
        <div class="col-3 my-2" style="padding: 2% 0% 0% 8%">
          <label for="staticEmail2" class="my-2 me-3">Nombre:</label>
        </div>
        <div class="col-8 my-2" style="padding: 2% 0% 0% 0%">
          <input type="text" class="form-control" id="nombre" required>
        </div>
      </div>

      <div class="row">
        <div class="col-3 my-2" style="padding: 0% 0% 0% 8%">
          <label for="staticEmail2" class="my-2">Contrasena:</label>
        </div>
        <div class="col-8 my-2" style=" padding: 0%">
          <input type="password" class="form-control" id="contrasena" required>
        </div>
      </div>

      <div class="row">
        <div class="col-3 my-2" style="padding: 0% 0% 0% 8%">
          <label for="staticEmail2" class="my-2">Correo:</label>
        </div>
        <div class="col-8 my-2" style=" padding: 0%">
          <input type="password" class="form-control" id="contrasena" required>
        </div>
      </div>
      
      <div class="row">
        <div class="col-3 my-2" style="padding: 0% 0% 0% 8%">
          <label for="staticEmail2" class="my-2">Nivel:</label>
        </div>
        <div class="col-8 my-2" style=" padding: 0%">
          <input type="password" class="form-control" id="contrasena" required>
        </div>
      </div>

      <div class="row">
        <div class="col-6 my-2" style=" padding: 1% 0% 2% 35%">
          <button type="submit" class="btn btn-success">Crear usuario</button>
        </div>
        <div class="col-3 my-2" style=" padding: 1% 0% 2% 0%">
          <a class="btn btn-primary" href="#">Vaciar campos</a>
        </div>
      </div>
        <!-- <div class="form-row">
          <div class="col-md-5 mb-4">
            <input type="text" name="nombre" class="form-control" value=""  onkeyup="javascript:this.value=this.value.toUpperCase();"  placeholder="Consultorio" autofocus>
          </div>
          <div class="col-md-4 mb-4">
            <input type="text" name="nit" class="form-control" placeholder="Nit" autofocus>
          </div>
          <div class="col-md-4 mb-4">
            <input type="text" name="direccion" class="form-control" placeholder="Direccion" autofocus>
          </div>
          <div class="col-md-4 mb-4">
            <input type="text" name="ciudad" class="form-control" placeholder="Ciudad"value=""  onkeyup="javascript:this.value=this.value.toUpperCase();"autofocus>
          </div> 
          <div class="col-md-4 mb-4">
            <input type="text" name="depto" class="form-control" placeholder="Departamento" value=""  onkeyup="javascript:this.value=this.value.toUpperCase();"autofocus>
          </div>
          <div class="col-md-2 mb-4">
            <input type="text" name="telefono" class="form-control" placeholder="Telefono" autofocus>
          </div>
          <div class="col-md-3 mb-4">
            <input type="email" name="correo" class="form-control" autocomplete="off" placeholder="ejemplo@mai.com" autofocus>
          </div>
          <div class="col-md-2 mb-4">
            <input type="text" name="capb" class="form-control" placeholder="Codigo E.A.P.B" autofocus>
          </div>
          <div class="col-md-3 mb-4">
            <input type="text" name="napb" class="form-control" placeholder="Nombre E.A.P.B" autofocus>
          </div>
          <div class="col-md-7 mb-4">
            <input type="file" name="foto" id="foto"  class="fas fa-cloud-upload-alt">
            <input type="file" name="foto" id="file-1" class="inputfile inputfile-1" data-multiple-caption="{count} archivos seleccionados" multiple />
            <label for="file-1">
              <svg xmlns="http://www.w3.org/2000/svg" class="iborrainputfile" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"></path></svg>
              <span class="iborrainputfile">Seleccionar Logo</span>
            </label>
          </div>
          <div class="col-md-12 mb-2">
            <div class="p-2 mb-2 bg-primary "></div>
          </div>
        </div>
        <input type="submit" name="salvarparametro" class="btn btn-primary " value="Grabar Consultorio"> -->
      </form>
    <!-- </div> -->
  </div>
  <br>
  <div class="col-md-12">
    <div class="row" style="padding: 0% 0% 2% 35%">
      <h2><b>Usuarios en general</b></h2>
    </div>
    <table class="table table-hover">
      <thead>
        <tr class="table-primary">
          <th>ID</th>
          <th>Nombre</th>
          <th>Contrasena</th>
          <th>Correo</th>
          <th>Nivel</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $query = "SELECT * FROM usuario";
        $result_tasks = mysqli_query($mysqli, $query);    
        while($row = mysqli_fetch_assoc($result_tasks)) { ?>
          <tr>
            <td><?php echo $row['idusuario']; ?></td>
            <td><?php echo $row['nombre']; ?></td>
            <td><?php echo $row['contrasena']; ?></td>
            <td><?php echo $row['correo']?></td>
            <td><?php echo $row['nivel']?></td>
            <td><button class="btn btn-warning" type="button" id="modificar"><a href="editparametro.php">Modificar</a></button> | <button class="btn btn-danger" type="button" id="borrar"><a href="borrarparametro.php">Borrar</a></button></td>
          </tr>
        <?php } ?>
      </tbody>
    </table>


    <br>

    <div class="row" style="padding: 0% 0% 2% 35%">
      <h2><b>Personal de Salud</b></h2>
    </div>
    <table class="table table-hover">
      <thead>
        <tr class="table-primary">
          <th>ID</th>
          <th>ID Usuario</th>
          <th>ID Especializacion</th>
          <th>Registro Medico</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $query = "SELECT idPS, usuario.nombre, especializacion.especializacion, registroMedico FROM personal_de_salud INNER JOIN usuario ON personal_de_salud.Usuario_idUsuario = usuario.idusuario INNER JOIN especializacion ON personal_de_salud.especializacion = especializacion.idEspecializacion";
        $result_tasks = mysqli_query($mysqli, $query);    
        while($row = mysqli_fetch_assoc($result_tasks)) { ?>
          <tr>
            <td><?php echo $row['idPS']; ?></td>
            <td><?php echo $row['nombre']; ?></td>
            <td><?php echo $row['especializacion']; ?></td>
            <td><?php echo $row['registroMedico']?></td>
            <td><button class="btn btn-warning" type="button" id="modificar"><a href="editparametro.php">Modificar</a></button> | <button class="btn btn-danger" type="button" id="borrar"><a href="borrarparametro.php">Borrar</a></button></td>
          </tr>
        <?php } ?>
      </tbody>
    </table>

    <br>

    <div class="row" style="padding: 0% 0% 2% 35%">
      <h2><b>Administradores</b></h2>
    </div>
    <table class="table table-hover">
      <thead>
        <tr class="table-primary">
          <th>ID</th>
          <th>Nombre</th>
          <th>Contrasena</th>
          <th>Correo</th>
          <th>Nivel</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $query = "SELECT * FROM usuario WHERE idusuario = 1";
        $result_tasks = mysqli_query($mysqli, $query);    
        while($row = mysqli_fetch_assoc($result_tasks)) { ?>
          <tr>
            <td><?php echo $row['idusuario']; ?></td>
            <td><?php echo $row['nombre']; ?></td>
            <td><?php echo $row['contrasena']; ?></td>
            <td><?php echo $row['correo']?></td>
            <td><?php echo $row['nivel']?></td>
            <td><button class="btn btn-warning" type="button" id="modificar"><a href="editparametro.php">Modificar</a></button> | <button class="btn btn-danger" type="button" id="borrar"><a href="borrarparametro.php">Borrar</a></button></td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</main>

<?php
  include("../template/footer.php");
?>

<script src="../resources/js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    </html>


