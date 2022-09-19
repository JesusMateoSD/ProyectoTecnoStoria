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
    <div class="row" style="padding: 2% 0% 0% 30%">
      <h2><b>Formulario para la generacion de facturas</b></h2>
    </div>
    <form class="row g-3" method="POST" action="">
      <div class="row">
        <div class="col-3 my-2" style="padding: 5% 0% 0% 8%">
          <label for="staticEmail2" class="my-2">Paciente referido:</label>
        </div>
        <div class="col-8 my-2" style=" padding: 5% 0% 0% 0%">
          <select class="form-select" aria-label="Default select example" id="Pago_Cita_idPagoCita">
            <option selected>Seleccione el metodo de pago</option>
            <option value="1">Tarjeta</option>
            <option value="2">Efectivo</option>
            <option value="3">EPS</option>
            <option value="3">Otro</option>
          </select>
        </div>
        
      </div>


      <div class="row">
        <div class="col-3 my-2" style="padding: 0% 0% 0% 8%">
          <label for="staticEmail2" class="my-2">Agenda del paciente:</label>
        </div>
        <div class="col-8 my-2" style=" padding: 0%">
          <select class="form-select" aria-label="Default select example" id="Paciente_Agenda_idAgenda">
            <option selected>Seleccione la agenda donde estaba la cita del paciente</option>
            <option value="1">Agenda Jota Mario</option>
            <option value="2">Agenda Camila Moreno</option>
            <option value="3">Agenda Jose Castaneda</option>
          </select>
        </div>
      </div>

      <div class="row">
        <div class="col-3 my-2" style="padding: 0% 0% 0% 8%">
          <label for="staticEmail2" class="my-2">Medico quien atiende:</label>
        </div>
        <div class="col-8 my-2" style=" padding: 0%">
          <select class="form-select" aria-label="Default select example" id="Paciente_idPersonaldeSalud">
            <option selected>Seleccione al medico encargado de la historia clinica / medica</option>
            <option value="1">Jota Mario Dominguez</option>
            <option value="2">Luis Jose Alvarado</option>
            <option value="3">Camila Canola Moreno</option>
          </select>
        </div>
      </div>

      <div class="row">
        <div class="col-3 my-2" style="padding: 0% 0% 0% 8%">
          <label for="staticEmail2" class="my-2">Costo Total:</label>
        </div>
        <div class="col-8 my-2" style=" padding: 0% 0% 0% 0%">
          <input type="text" class="form-control" id="alturaP_HC" placeholder="Altura del paciente (Ej: 1,80 o 1,6)" required maxlength="4">
        </div>
      </div>

      <div class="row">
        <div class="col-5 my-2" style=" padding: 1% 0% 2% 25%">
          <button type="submit" class="btn btn-success">Crear paciente</button>
        </div>
        <div class="col-3 my-2" style=" padding: 1% 5% 2% 2%">
          <a class="btn btn-primary" href="#">Consultar pacientes</a>
        </div>
        <div class="col-3 my-2" style=" padding: 1% 0% 2% 0%">
          <a class="btn btn-danger" href="#">Vaciar campos</a>
        </div>
      </div>
    </form>
  </div>

  <div class="row align-items-center" style="padding: 4% 0% 2% 32%">
    <h2><b>Busqueda de historias clinicas</b></h2>
  </div>
        
  <div class="input-group" style="padding: 0% 10% 4% 10%">
    <input type="search" class="form-control " placeholder="Buscar historias clinicas / medicas" aria-label="Search" aria-describedby="search-addon" id="buscarhc"/>
    <button type="button" class="btn btn-success ">Buscar</button>
  </div>

  <div class="row mx-auto w-100">
    <div class="table">
      <table class="table table-primary">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Razon visita</th>
            <th scope="col">Altura</th>
            <th scope="col">EPS</th>
            <th scope="col">Condicion</th>
            <th scope="col">Observacion</th>
            <th scope="col">Paciente</th>
            <th scope="col">Agenda</th>
            <th scope="col">Medico</th>
            <th scope="col">Acciones</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td scope="row">1</td>
            <td scope="col">Dolores musculares</td>
            <td scope="col">1.84</td>
            <td scope="col">Convida</td>
            <td scope="col">Sufre de una contraccion muscular leve en la parte inferior derecha del hombro izquierdo</td>
            <td scope="col">Se debe tener en cuenta reposo y no realizar actividades de mucho esfuerzo</td>
            <td scope="col">Maria Luisa</td>
            <td scope="col">Agenda Camila Moreno</td>
            <td scope="col">Luis Jose Alvarado</td>
            <td><button class="btn btn-warning" type="button" id="button-addon2">Modificar</button> | <button class="btn btn-danger" type="button" id="button-addon2">Eliminar</button></td>
          </tr>
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