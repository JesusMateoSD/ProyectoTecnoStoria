<?php
  session_start();

  if(isset($_POST['repmes'])){
    $fechaI = $_POST['fechai'];
    $fechaF = $_POST['fechaf'];
    header('location:index.php?action=repventasmespdf&fechaI='.$fechaI.'&fechaF='.$fechaF);
  }

  if(isset($_SESSION['usuario']) && $_SESSION['snivel'] == 1){
    include("header.php");
  } else{
    header('location:index.php');
  }
?>

<main class="container bg-light p-3">
  <div class="p-2 mb-2 bg-primary text-white">Reportes Ventas x Rango de Fechas</div>  
    <div class="container">
      <div class="row d-inline">
        <form method="POST" target="_blank" >
          <div class="form-row">
              <label class="mt-1">Fecha Inicial </label>
              <input type="date" name="fechai" class="mx-3 form-control w-25" >
              <label class="mt-1">Fecha Final </label>
              <input type="date" name="fechaf" class="mx-3 form-control w-25"  >
              <input type="submit" name="repmes" class="btn btn-primary ml-1 mr-3" target="_blank" value="Generar Reporte">
              <a href="index.php?action=reportes" class="btn btn-success">Cancelar</a>
          </div>
        </form>
      </div>
    </div>
    <br>
    <div class="col-md-12"></div>
  </div>
</main>