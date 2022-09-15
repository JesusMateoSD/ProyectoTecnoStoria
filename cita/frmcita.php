<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TecnoStoria</title>
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
        <div class="row" style="padding: 2% 0% 0% 30%">
          <h2><b>Formulario para la creacion de citas</b></h2>
        </div>
        <form class="row g-3" method="POST" action="">
          <div class="row">
            <div class="col-3 my-2" style="padding: 5% 0% 0% 8%">
              <label for="staticEmail2" class="my-2 me-3">Agenda de la cita:</label>
            </div>
            <div class="col-8 my-2" style=" padding: 5% 0% 0% 0%">
              <select class="form-select" aria-label="Default select example">
                <option selected>Seleccione una agenda</option>
                <option value="1">Agenda Jorge Mario</option>
                <option value="2">Agenda Carla Maria</option>
              </select>
            </div>
          </div>

          <div class="row">
            <div class="col-3 my-2" style="padding: 0% 0% 0% 8%">
              <label for="staticEmail2" class="my-2 me-3">Asistente de la cita:</label>
            </div>
            <div class="col-8 my-2" style=" padding: 0%">
              <select class="form-select" aria-label="Default select example">
                <option selected>Asistente a cargo de la cita</option>
                <option value="1">Ana Alejandra Jonas Jonas</option>
                <option value="2">Macono Carlos Diaz Hernandez</option>
              </select>
            </div>
          </div>

          <div class="row">
            <div class="col-3 my-2" style="padding: 0% 0% 0% 8%">
              <label for="staticEmail2" class="my-2 me-3">Fecha de la cita:</label>
            </div>
            <div class="col-3 my-2" style=" padding: 0%">
              <input type="date" class="form-control" id="Fecha_Cita" placeholder="Fecha">
            </div>

            <div class="col-2 my-2" style="padding: 0% 0% 0% 3%">
              <label for="staticEmail2" class="my-2 me-3">Hora de la cita:</label>
            </div>
            <div class="col-3 my-2" style=" padding: 0%">
              <input type="time" class="form-control" id="Hora_Cita" placeholder="Hora">
            </div>
          </div>

          <div class="row">
            <div class="col-3 my-2" style="padding: 0% 0% 0% 8%">
              <label for="staticEmail2" class="my-2 me-3">Estado de la cita:</label>
            </div>
            <div class="col-8 my-2" style=" padding: 0%">
              <select class="form-select" aria-label="Default select example">
                <option selected>Seleccione el estado a asignar de la cita</option>
                <option value="1">Asignada</option>
                <option value="2">Atentida</option>
                <option value="3">Cancelada</option>
              </select>
            </div>
          </div>

          <div class="row">
            <div class="col-3 my-2" style="padding: 0% 0% 0% 8%">
              <label for="staticEmail2" class="my-2 me-3">Medico de la cita:</label>
            </div>
            <div class="col-8 my-2" style=" padding: 0%">
              <select class="form-select" aria-label="Default select example">
                <option selected>Personal de salud a cargo de atender la cita</option>
                <option value="1">Jorge Mario Salazar Ramirez</option>
                <option value="2">Carla Maria Solano Benitez</option>
              </select>
            </div>
          </div>

          <div class="row">
            <div class="col-3 my-2" style="padding: 0% 0% 0% 8%">
              <label for="staticEmail2" class="my-2 me-3">Paciente de la cita:</label>
            </div>
            <div class="col-8 my-2" style=" padding: 0%">
              <select class="form-select" aria-label="Default select example">
                <option selected>Paciente que solicito la cita</option>
                <option value="1">Elian Jose Martinez Fernandez</option>
                <option value="2">Camila Javela Jaramillo Fernandez</option>
              </select>
            </div>
          </div>

          <div class="row">
            <div class="col-5 my-2" style=" padding: 2% 0% 2% 25%">
              <button type="submit" class="btn btn-success">Crear cita medica</button>
            </div>
            <div class="col-2 my-2" style=" padding: 2% 0% 2% 0%">
              <a class="btn btn-primary" href="../cita/consultarcita.php">Consultar citas</a>
            </div>
            <div class="col-2 my-2" style=" padding: 2% 0% 0% 0%">
              <a class="btn btn-danger" href="../cita/consultarcita.php">Vaciar campos</a>
            </div>
          </div>
        </form>

        <div class="row align-items-center" style="padding: 2% 0% 2% 30%">
          <h2><b>Busqueda de citas</b></h2>
        </div>

        <div class="row mx-auto">
          <div class="table">
            <table class="table table-primary">
              <thead>
                <tr>
                  <th scope="col">#</th>
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
                  <td scope="row">#</td>
                  <td>Agenda 1</td>
                  <td>Asistente Jose</td>
                  <td>2022-07-15</td>
                  <td>Activo</td>
                  <td>Ricardo Angulo</td>
                  <td>Maria Luisa</td>
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