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
  <?php
      include("../template/navbar.php");
  ?>
<main class="container p-0">
  <div class="mx-auto row" style="padding: 2% 0% 2% 35%">
    <h2><b>Busqueda de citas</b></h2>
  </div>

  <div class="input-group" style="padding: 0% 10% 2% 10%">
    <input type="search" class="form-control " placeholder="Buscar paciente" aria-label="Search" aria-describedby="search-addon"/>
    <button type="button" class="btn btn-success ">Buscar</button>
  </div>

  <div class="row mx-auto w-100">
    <div class="table">
      <table class="table table-primary">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Agenda de la Cita</th>
            <th scope="col">Asistente de la cita</th>
            <th scope="col">Fecha de la Cita</th>
            <th scope="col">Estado de la cita</th>
            <th scope="col">Medico de la Cita</th>
            <th scope="col">Paciente de la cita</th>
            <th scope="col">Acciones</th>
          </tr>
        </thead>
        <tbody>
          <tr class="">
            <td scope="row">1</td>
            <td>Agenda 1</td>
            <td>Asistente Jose</td>
            <td>2022-07-15</td>
            <td>Activo</td>
            <td>Ricardo Angulo</td>
            <td>Maria Luisa</td>
            <td><button class="btn btn-warning" type="button" id="button-addon2">Modificar</button> | <button class="btn btn-danger" type="button" id="button-addon2">Eliminar</button></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</main>

  <script src="../resources/js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>