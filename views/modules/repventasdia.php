<?php
  session_start();

  if(isset($_POST['repdia'])){
    $fechaP = $_POST['fecha'];
    header('location:index.php?action=repventasdiapdf&fecha='.$fechaP);
  }

  if(isset($_SESSION['usuario'])){
    include("header.php");
  } else{
    header('location:index.php');
  }
?>

<main class="container bg-light p-3">
  <div class="p-2 mb-2 bg-primary text-white">Reportes Ventas x Dia</div>  
    <div class="container-fluid">
      <div class="row text-center">
        <div class="col-12">
          <form method="POST" target="_blank" >
            <label for="validationCustom02" class="mt-2">Fecha</label>
            <input type="date" name="fecha" class="ml-5 my-2 form-control w-25 d-inline" >
            <input type="submit" name="repdia" class="btn btn-primary w-25 mb-1 mx-3" target="_blank"  value="Generar Reporte">
            <a href="index.php?action=reportes" class="btn btn-success w-25 mb-1">Cancelar</a>
          </form>
        </div>
      </div>
    </div>
    <br>
    <!-- <div class="col-md-12"></div> -->
  </div>
</main>