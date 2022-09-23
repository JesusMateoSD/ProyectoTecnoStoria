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
    <div class="row" style="padding: 2% 0% 0% 30%">
      <h2><b>Formulario para la generacion de facturas</b></h2>
    </div>
    <form class="row g-3" method="POST" action="">
      <div class="row">
        <div class="col-3 my-2" style="padding: 5% 0% 0% 8%">
          <label for="staticEmail2" class="my-2">Valor de la consulta:</label>
        </div>
        <div class="col-8 my-2" style=" padding: 5% 0% 0% 0%">
          <input type="text" class="form-control" id="valor" placeholder="Solo numeros" required>
        </div>
      </div>


      <div class="row">
        <div class="col-3 my-2" style="padding: 0% 0% 0% 8%">
          <label for="staticEmail2" class="my-2">Fecha a pagar:</label>
        </div>
        <div class="col-8 my-2" style=" padding: 0%">
          <input type="date" class="form-control" id="fechaPago" required>
        </div>
      </div>

      <div class="row">
        <div class="col-3 my-2" style="padding: 0% 0% 0% 8%">
          <label for="staticEmail2" class="my-2">Historia Clinica:</label>
        </div>
        <div class="col-8 my-2" style=" padding: 0%">
          <select class="form-select" aria-label="Default select example" id="HistoriaClinica_idHistoriaClinica">
            <option selected>Seleccione la historia clinica o medica a buscar, se mostrara el paciente y su condicion</option>
            <option value="1">Jota Mario Dominguez</option>
            <option value="2">Luis Jose Alvarado</option>
            <option value="3">Camila Canola Moreno</option>
          </select>
        </div>
      </div>

      <div class="row">
        <div class="col-3 my-2" style="padding: 0% 0% 0% 8%">
          <label for="staticEmail2" class="my-2">EPS Afiliada:</label>
        </div>
        <div class="col-8 my-2" style=" padding: 0%">
          <select class="form-select" aria-label="Default select example" id="epsP_HC">
            <option selected>Seleccione la EPS afiliada del paciente</option>
            <option value="1">EPS Convida</option>
            <option value="2">TEST</option>
            <option value="3">TEst 2</option>
          </select>
        </div>
      </div>

      <div class="row">
        <div class="col-3 my-2" style="padding: 0% 0% 0% 8%">
          <label for="staticEmail2" class="my-2">Paciente Clinica:</label>
        </div>
        <div class="col-8 my-2" style=" padding: 0%">
          <select class="form-select" aria-label="Default select example" id="Paciente_idPaciente">
            <option selected>Seleccione el paciente tratado, se mostrara su nombre y apellidos completos</option>
            <option value="1">Daniel Ramirez</option>
            <option value="2">Miguel Alberto Salazar</option>
            <option value="3">Camila Moreno Dominguez</option>
          </select>
        </div>
      </div>

      <div class="row">
        <div class="col-3 my-2" style="padding: 0% 0% 0% 8%">
          <label for="staticEmail2" class="my-2">Metodo Pago:</label>
        </div>
        <div class="col-8 my-2" style=" padding: 0%">
          <select class="form-select" aria-label="Default select example" id="MetodoPago_idMetodoPago">
            <option selected>Seleccione la historia clinica o medica a buscar</option>
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
          <input type="text" class="form-control" id="alturaP_HC" required placeholder="Solo numeros">
        </div>
      </div>

      <div class="row">
        <div class="col-5 my-2" style=" padding: 1% 0% 2% 25%">
          <button type="submit" class="btn btn-success">Crear factura</button>
        </div>
        <div class="col-3 my-2" style=" padding: 1% 5% 2% 2%">
          <a class="btn btn-primary" href="#">Consultar factura</a>
        </div>
        <div class="col-3 my-2" style=" padding: 1% 0% 2% 0%">
          <a class="btn btn-danger" href="#">Vaciar campos</a>
        </div>
      </div>
    </form>
  </div>

  <div class="row align-items-center" style="padding: 4% 0% 2% 38%">
    <h2><b>Busqueda de facturas</b></h2>
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
            <th scope="col">Valor</th>
            <th scope="col">Fecha de Pago</th>
            <th scope="col">Nombres completos con condicion</th>
            <th scope="col">Nombre de EPS Afiliada</th>
            <th scope="col">Metodo de Pago</th>
            <th scope="col">Costo Total</th>
            <th scope="col">Acciones</th>
          </tr>
        </thead>
        <tbody>
          <?php
            $query = "SELECT `idFactura`, `valor`, `fechaPago`, CONCAT(paciente.nombres, ' ', paciente.apellidos, ', ', historia_clinica.condicion) AS nombrescompletos, eps.nombreEPS, metodo_pago.metodoPago, `costo_Total` FROM `factura` INNER JOIN eps ON factura.EPS_idEPS = eps.idEPS INNER JOIN paciente ON factura.Paciente_idPaciente = paciente.idpaciente INNER JOIN historia_clinica ON factura.HistoriaClinica_idHistoriaClinica = historia_clinica.idHistoria_Clinica INNER JOIN metodo_pago ON factura.MetodoPago_idMetodoPago = metodo_pago.idMetodo_Pago";
            $result_tasks = mysqli_query($mysqli, $query);    
            while($row = mysqli_fetch_assoc($result_tasks)) { ?>
              <tr>
                <td><?php echo $row['idFactura']; ?></td>
                <td><?php echo $row['valor']; ?></td>
                <td><?php echo $row['fechaPago']; ?></td>
                <td><?php echo $row['nombrescompletos']; ?></td>
                <td><?php echo $row['nombreEPS']; ?></td>
                <td><?php echo $row['metodoPago']; ?></td>
                <td><?php echo $row['costo_Total']; ?></td>
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