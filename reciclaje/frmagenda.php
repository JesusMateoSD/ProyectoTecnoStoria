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
  <div class="container-fluid">
        <div class="row" style="padding: 2% 0% 0% 25%">
          <h2><b>Formulario para la creacion de agendas</b></h2>
        </div>
        <form class="row g-3" method="POST" action="">
          <div class="row">
            <div class="col-3 my-2" style="padding: 5% 0% 0% 8%">
              <label for="staticEmail2" class="my-2 me-3">Nombre de la agenda:</label>
            </div>
            <div class="col-8 my-2" style=" padding: 5% 0% 0% 0%">
              <input type="text" class="form-control" id="Fecha_Cita" placeholder="Nombre de la agenda o a quien le corresponde">
            </div>
          </div>

          <div class="row">
            <div class="col-3 my-2" style="padding: 0% 0% 0% 8%">
              <label for="staticEmail2" class="my-2 me-3">Citas pendientes:</label>
            </div>
            <div class="col-8 my-2" style="padding: 0%">
              <input type="email" class="form-control" id="exampleFormControlInput1" disabled value="0">
            </div>
          </div>

          <div class="row">
            <div class="col-5 my-2" style=" padding: 2% 0% 2% 25%">
              <button type="submit" class="btn btn-success">Crear agenda</button>
            </div>
            <div class="col-2 my-2" style=" padding: 2% 0% 0% 0%">
              <a class="btn btn-primary" href="#buscaragenda">Consultar agenda</a>
            </div>
            <div class="col-2 my-2" style=" padding: 2% 0% 0% 0%">
              <a class="btn btn-danger" href="#">Vaciar campos</a>
            </div>
          </div>
        </form>

        <div class="mx-auto row " style="padding: 2% 0% 2% 35%">
          <h2><b>Busqueda de agendas</b></h2>
        </div>
        
        <div class="input-group" style="padding: 0% 10% 4% 10%">
          <input type="search" class="form-control " placeholder="Buscar agendas" aria-label="Search" aria-describedby="search-addon" id="buscaragenda"/>
          <button type="button" class="btn btn-success ">Buscar</button>
        </div>

        <div class="row mx-auto w-100">
          <div class="table">
            <table class="table table-primary">
              <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Nombre de la agenda</th>
                  <th scope="col">Citas pendientes</th>
                  <th scope="col">Acciones</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td scope="row">1</td>
                  <td>Agenda Jorge Mario</td>
                  <td>5</td>
                  <td><button class="btn btn-warning" type="button" id="button-addon2">Modificar</button> | <button class="btn btn-danger" type="button" id="button-addon2">Eliminar</button></td>
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