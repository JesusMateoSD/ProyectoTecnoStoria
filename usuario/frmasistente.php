<?php
  session_start();
  include('../connection/db.php');
  include('../template/navbar.php');
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Agenda</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link href="../resources/css/style.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>
<body>
<main class="container p-0">
  <div class="container-fluid">
    <div class="row" style="padding: 2% 0% 0% 41%">
      <h2><b>Asistentes</b></h2>
    </div>
    <form class="row g-3" method="POST" action="">
      <div class="row">
        <div class="col-3 my-2" style="padding: 5% 0% 0% 8%">
          <label for="staticEmail2" class="my-2">Usuario asistente:</label>
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
          <label for="staticEmail2" class="my-2">Cargo del asistente:</label>
        </div>
        <div class="col-8 my-2" style=" padding: 0%">
          <input type="text" class="form-control" id="valor" placeholder="Escriba el cargo especifico que hara el asistente" required>
        </div>
      </div>
    </form>
  </div>

  <div class="row" style="padding: 4% 0% 2% 35%">
    <h2><b>Tabla de Asistentes</b></h2>
  </div>
  <div class="input-group" style="padding: 0% 10% 4% 10%">
    <input type="search" class="form-control " placeholder="Buscar asistentes" aria-label="Search" aria-describedby="search-addon" id="buscarasistente"/>
    <button type="button" class="btn btn-success ">Buscar</button>
  </div>
    <table class="table table-hover">
      <thead>
        <tr class="table-primary">
          <th>ID</th>
          <th>ID Usuario</th>
          <th>Cargo (Asistente)</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $query = "SELECT idAsistente, usuario.nombre, cargo FROM `asistente` INNER JOIN usuario ON asistente.Usuario_idUsuario = usuario.idusuario";
        $result_tasks = mysqli_query($mysqli, $query);    
        while($row = mysqli_fetch_assoc($result_tasks)) { ?>
          <tr>
            <td><?php echo $row['idAsistente']; ?></td>
            <td><?php echo $row['nombre']; ?></td>
            <td><?php echo $row['cargo']; ?></td>
            <td><button class="btn btn-warning" type="button" id="modificar"><a href="editparametro.php">Modificar</a></button> | <button class="btn btn-danger" type="button" id="borrar"><a href="borrarparametro.php">Borrar</a></button></td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
</main>


  <?php
      include("../template/footer.php");
  ?>

  <script src="../resources/js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>