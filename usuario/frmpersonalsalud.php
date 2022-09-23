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

  <div class="row" style="padding: 2% 0% 0% 37%">
    <h2><b>Personal de Salud</b></h2>
  </div>
  <div class="container-fluid">
    <!-- <div class="row"> -->
    <form action="salvarparametro.php" method="POST" enctype="multipart/form-data">
    <div class="row">
        <div class="col-3 my-2" style="padding: 5% 0% 0% 8%">
          <label for="staticEmail2" class="my-2">Usuario Medico:</label>
        </div>
        <div class="col-8 my-2" style=" padding: 5% 0% 0% 0%">
          <select class="form-select" aria-label="Default select example" id="Usuario_idUsuario">
            <option selected>Seleccione el usuario</option>
            <option value="1">Jota Mario Dominguez</option>
            <option value="2">Luis Jose Alvarado</option>
            <option value="3">Camila Canola Moreno</option>
          </select>
        </div>
      </div>

      <div class="row">
        <div class="col-3 my-2" style="padding: 0% 0% 0% 8%">
          <label for="staticEmail2" class="my-2">Especializacion:</label>
        </div>
        <div class="col-8 my-2" style=" padding: 0%">
          <select class="form-select" aria-label="Default select example" id="especializacion">
            <option selected>Seleccione una especializacion</option>
            <option value="1">Especializacion en odontologia</option>
            <option value="2">Especializacion en otorrinolaringologia</option>
            <option value="3">Especializacion en neurologia</option>
          </select>
        </div>
      </div>

      <div class="row">
        <div class="col-3 my-2" style="padding: 0% 0% 0% 8%">
          <label for="staticEmail2" class="my-2">Registro Medico:</label>
        </div>
        <div class="col-8 my-2" style=" padding: 0%">
          <input type="text" class="form-control" id="registroMedico" required>
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
    </form>
  </div>

    <br>

    <div class="row" style="padding: 0% 0% 2% 30%">
      <h2><b>Tabla de Personal de Salud</b></h2>
    </div>
    <div class="input-group" style="padding: 0% 10% 4% 10%">
      <input type="search" class="form-control " placeholder="Buscar personal de salud" aria-label="Search" aria-describedby="search-addon" id="buscarps"/>
      <button type="button" class="btn btn-success ">Buscar</button>
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

  </div>
</main>

<?php
  include("../template/footer.php");
?>

  <script src="../resources/js/script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</html>