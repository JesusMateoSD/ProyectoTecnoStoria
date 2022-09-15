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

  <div class="mx-auto row" style="padding: 2% 0% 2% 35%">
    <h2><b>Busqueda de pacientes</b></h2>
  </div>

  <div class="input-group" style="padding: 0% 5% 2% 5%">
    <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
    <button type="button" class="btn btn-success">search</button>
  </div>

  <div class="row mx-auto w-100">
    <div class="table">
      <table class="table table-primary">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nombres</th>
            <th scope="col">Apellidos</th>
            <th scope="col">Edad</th>
            <th scope="col">Numero de documento</th>
            <th scope="col">Tipo de documento</th>
            <th scope="col">Telefono</th>
            <th scope="col">Correo</th>
            <th scope="col">Direccion</th>
            <th scope="col">Fecha de nacimiento</th>
            <th scope="col">Genero</th>
            <th scope="col">Altura</th>
            <th scope="col">RH</th>
            <th scope="col">Acciones</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td scope="row">#</td>
            <td scope="col">Jose Andres</td>
            <td scope="col">Sanchez Salazar</td>
            <td scope="col">25</td>
            <td scope="col">1836293741</td>
            <td scope="col">Cedula de Ciudadania</td>
            <td scope="col">3217782323</td>
            <td scope="col">ejemplo@gmail.com</td>
            <td scope="col">Manzana 12 Casa 30</td>
            <td scope="col">1997-04-29</td>
            <td scope="col">M</td>
            <td scope="col">1.76</td>
            <td scope="col">O+</td>
            <td>Modificar | Eliminar</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

  <?php
      include("../template/footer.php");
  ?>

  <script src="../resources/js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>