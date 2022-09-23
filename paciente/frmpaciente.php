<?php
    include('../connection/db.php');
    include("../template/navbar.php");
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

<main>
  <div class="container-fluid">
    <div class="row" style="padding: 2% 0% 0% 25%">
      <h2><b>Formulario para la creacion de pacientes</b></h2>
    </div>
    <form class="row g-3" method="POST" action="">
      <div class="row">
        <div class="col-3 my-2" style="padding: 5% 0% 0% 8%">
          <label for="staticEmail2" class="my-2 me-3">Nombres del paciente:</label>
        </div>
        <div class="col-8 my-2" style="padding: 5% 0% 0% 0%">
          <input type="text" class="form-control" id="nombres" placeholder="Ingrese los nombres del paciente" required>
        </div>
      </div>

      <div class="row">
        <div class="col-3 my-2" style="padding: 0% 0% 0% 8%">
          <label for="staticEmail2" class="my-2 me-3">Apellidos del paciente:</label>
        </div>
        <div class="col-8 my-2" style="padding: 0%">
          <input type="text" class="form-control" id="apellidos" placeholder="Ingrese los apellidos del paciente" required>
        </div>
      </div>

      <div class="row">
        <div class="col-3 my-2" style="padding: 0% 0% 0% 8%">
          <label for="staticEmail2" class="my-2 me-3">Edad del paciente:</label>
        </div>
        <div class="col-3 my-2" style=" padding: 0%">
          <input type="number" class="form-control" id="edad" placeholder="Ingrese la edad del paciente" required>
        </div>

        <div class="col-2 my-2" style="padding: 0% 0% 0% 3%">
          <label for="staticEmail2" class="my-2 me-3">Telefono:</label>
        </div>
        <div class="col-3 my-2" style=" padding: 0%">
          <input type="number" class="form-control" id="telefono" placeholder="Telefono celular del paciente" required>
        </div>
      </div>

      <div class="row">
        <div class="col-3 my-2" style="padding: 0% 0% 0% 8%">
          <label for="staticEmail2" class="my-2">Numero de documento:</label>
        </div>
        <div class="col-3 my-2" style=" padding: 0%">
          <input type="number" class="form-control" id="numeroDocumento" placeholder="Numero de documento del paciente" required>
        </div>

        <div class="col-2 my-2" style="padding: 0% 0% 0% 3%">
          <label for="staticEmail2" class="my-2">Tipo de documento:</label>
        </div>
        <div class="col-3 my-2" style=" padding: 0%">
          <select class="form-select" aria-label="Default select example">
            <option selected>Tipo de documento</option>
            <?php
              $query = "SELECT * FROM tipodocumento";
              $result_tasks = mysqli_query($mysqli, $query);    
              while($row = mysqli_fetch_assoc($result_tasks)) { ?>
                <option value = "<?php echo $row['idtipodocumento']?>" ><?php echo $row['tipodocumento']; ?></option>
            <?php } ?>  
          </select>
        </div>
      </div>

      <div class="row">
        <div class="col-3 my-2" style="padding: 0% 0% 0% 8%">
          <label for="staticEmail2" class="my-2">Correo electronico:</label>
        </div>
        <div class="col-8 my-2" style=" padding: 0%">
          <input type="email" class="form-control" id="correo" placeholder="Correo electronico del paciente">
        </div>
      </div>

      <div class="row">
        <div class="col-3 my-2" style="padding: 0% 0% 0% 8%">
          <label for="staticEmail2" class="my-2 me-3">Direccion del paciente:</label>
        </div>
        <div class="col-8 my-2" style="padding: 0%">
          <input type="text" class="form-control" id="direccion" placeholder="Direccion de residencia del paciente" required>
        </div>
      </div>

      <div class="row">
        <div class="col-3 my-2" style="padding: 0% 0% 0% 8%">
          <label for="staticEmail2" class="my-2">Fecha de nacimiento:</label>
        </div>
        <div class="col-3 my-2" style=" padding: 0%">
          <input type="date" class="form-control" id="fechaNacimiento" placeholder="Fecha de nacimiento del paciente" required>
        </div>

        <div class="col-2 my-2" style="padding: 0% 0% 0% 3%">
          <label for="staticEmail2" class="my-2">Genero del paciente:</label>
        </div>
        <div class="col-3 my-2" style=" padding: 0%">
          <select class="form-select" aria-label="Default select example">
            <option selected>Seleccione genero</option>
            <?php
              $query = "SELECT * FROM genero";
              $result_tasks = mysqli_query($mysqli, $query);    
              while($row = mysqli_fetch_assoc($result_tasks)) { ?>
                <option value = "<?php echo $row['idGenero']?>" ><?php echo $row['genero']; ?></option>
            <?php } ?>  
          </select>
        </div>
      </div>

      <div class="row">
        <div class="col-3 my-2" style="padding: 0% 0% 0% 8%">
          <label for="staticEmail2" class="my-2">Altura del paciente:</label>
        </div>
        <div class="col-3 my-2" style=" padding: 0%">
          <input type="text" class="form-control" id="alturaP" placeholder="Altura del paciente (Ej: 1.80, 1.6)" required maxlength="4">
        </div>

        <div class="col-2 my-2" style="padding: 0% 0% 0% 3%">
          <label for="staticEmail2" class="my-2">RH del paciente:</label>
        </div>
        <div class="col-3 my-2" style=" padding: 0%">
          <select class="form-select" aria-label="Default select example">
              <option selected>RH</option>
              <?php
              $query = "SELECT * FROM tiporh";
              $result_tasks = mysqli_query($mysqli, $query);    
              while($row = mysqli_fetch_assoc($result_tasks)) { ?>
                <option value = "<?php echo $row['idtipoRH']?>" ><?php echo $row['tipoRH']; ?></option>
            <?php } ?>  
          </select>
        </div>
      </div>

      <div class="row">
        <div class="col-5 my-2" style=" padding: 1% 0% 2% 25%">
          <button type="submit" class="btn btn-success">Crear paciente</button>
        </div>
        <div class="col-3 my-2" style=" padding: 1% 5% 2% 2%">
          <a class="btn btn-primary" href="#buscarpacientes">Consultar pacientes</a>
        </div>
        <div class="col-3 my-2" style=" padding: 1% 0% 2% 0%">
          <a class="btn btn-danger" href="#">Vaciar campos</a>
        </div>
      </div>
    </form>
  </div>

  <div class="row align-items-center" style="padding: 4% 0% 2% 40%">
    <h2><b>Busqueda de pacientes</b></h2>
  </div>
    
  <div class="input-group" style="padding: 0% 10% 4% 10%">
    <input type="search" class="form-control " placeholder="Buscar pacientes" aria-label="Search" aria-describedby="search-addon" id="buscarpacientes"/>
    <button type="button" class="btn btn-success ">Buscar</button>
  </div>

    <div class="row mx-auto w-100">
      <div class="table">
        <table class="table table-primary">
          <thead>
            <tr>
              <th scope="col">Nombres Completos</th>
              <th scope="col">Numero de documento</th>
              <th scope="col">Edad</th>
              <th scope="col">Telefono</th>
              <th scope="col">Correo</th>
              <th scope="col">Direccion</th>
              <th scope="col">Fecha de nacimiento</th>
              <th scope="col">Genero</th>
              <th scope="col">Altura</th>
              <th scope="col">Tipo de Documento</th>
              <th scope="col">RH</th>
              <th scope="col">Acciones</th>
            </tr>
          </thead>
          <tbody>
          <?php
            $query = "SELECT `idpaciente`, CONCAT(`nombres`, ' ', `apellidos`) AS nombrecompleto , `edad`, `numeroDocumento`, `telefono`, `correo`, `direccion`, `fechaNacimiento`, genero.genero, alturaP, tipodocumento.tipodocumento, tiporh.tipoRH FROM `paciente` INNER JOIN genero ON paciente.Genero_idGenero = genero.idGenero INNER JOIN tipodocumento ON paciente.tipoDocumentoP = tipodocumento.idtipodocumento INNER JOIN tiporh ON paciente.rh_idRH = tiporh.idtipoRH";
            $result_tasks = mysqli_query($mysqli, $query);    
            while($row = mysqli_fetch_assoc($result_tasks)) { ?>
              <tr>
                <td><?php echo $row['nombrecompleto']; ?></td>
                <td><?php echo $row['numeroDocumento']?></td>
                <td><?php echo $row['edad']?></td>
                <td><?php echo $row['telefono']; ?></td>
                <td><?php echo $row['correo']; ?></td>
                <td><?php echo $row['direccion']?></td>
                <td><?php echo $row['fechaNacimiento']?></td>
                <td><?php echo $row['genero']; ?></td>
                <td><?php echo $row['alturaP']; ?></td>
                <td><?php echo $row['tipodocumento']?></td>
                <td><?php echo $row['tipoRH']?></td>
                <td><button class="btn btn-warning" type="button" id="modificar"><a href="editparametro.php">Modificar</a></button> | <button class="btn btn-danger" type="button" id="borrar"><a href="borrarparametro.php">Borrar</a></button></td>
              </tr>
          <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </main>

  <?php
      include("../template/footer.php");
  ?>

  <script src="../resources/js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>