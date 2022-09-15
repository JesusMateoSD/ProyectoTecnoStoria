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
              <label for="staticEmail2" class="my-2">Nro de documento:</label>
            </div>
            <div class="col-3 my-2" style=" padding: 0%">
              <input type="number" class="form-control" id="numeroDocumento" placeholder="Numero de documento del paciente" required>
            </div>

            <div class="col-2 my-2" style="padding: 0% 0% 0% 3%">
              <label for="staticEmail2" class="my-2">Tipo de documento:</label>
            </div>
            <div class="col-3 my-2" style=" padding: 0%">
              <input type="email" class="form-control" id="tipoDocumentoP" placeholder="Tipo de documento del paciente">
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
              <input type="number" class="form-control" id="fechaNacimiento" placeholder="Fecha de nacimiento del paciente" required>
            </div>

            <div class="col-2 my-2" style="padding: 0% 0% 0% 3%">
              <label for="staticEmail2" class="my-2">Genero del paciente:</label>
            </div>
            <div class="col-3 my-2" style=" padding: 0%">
              <select class="form-select" aria-label="Default select example">
                <option selected>Genero</option>
                <option value="1">Masculino</option>
                <option value="2">Femenino</option>
              </select>
            </div>
          </div>

          <div class="row">
            <div class="col-3 my-2" style="padding: 0% 0% 0% 8%">
              <label for="staticEmail2" class="my-2">Altura del paciente:</label>
            </div>
            <div class="col-3 my-2" style=" padding: 0%">
              <input type="number" class="form-control" id="alturaP" placeholder="Altura del paciente" required>
            </div>

            <div class="col-2 my-2" style="padding: 0% 0% 0% 3%">
              <label for="staticEmail2" class="my-2">RH del paciente:</label>
            </div>
            <div class="col-3 my-2" style=" padding: 0%">
              <input type="email" class="form-control" id="rh" placeholder="Tipo de sangre o RH del paciente" required>
            </div>
          </div>

          <div class="row">
            <div class="col-5 my-2" style=" padding: 2% 0% 2% 25%">
              <button type="submit" class="btn btn-success">Crear paciente</button>
            </div>
            <div class="col-2 my-2" style=" padding: 2% 0% 0% 0%">
              <a class="btn btn-primary" href="#">Consultar pacientes</a>
            </div>
            <div class="col-2 my-2" style=" padding: 2% 0% 0% 0%">
              <a class="btn btn-danger" href="#">Vaciar campos</a>
            </div>
          </div>
        </form>

        <div class="mx-auto row " style="padding: 2% 0% 2% 35%">
          <h2><b>Busqueda de agendas</b></h2>
        </div>

        <div class="row mx-auto w-75">
          <div class="table">
            <table class="table table-primary">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Nombre de la agenda</th>
                  <th scope="col">Citas pendientes</th>
                  <th scope="col">Acciones</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td scope="row">#</td>
                  <td>Agenda 1</td>
                  <td>Asistente Jose</td>
                  <td>Modificar | Eliminar</td>
                </tr>
              </tbody>
            </table>
          </div>
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