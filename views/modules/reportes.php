 <?php
  session_start();

  if(isset($_SESSION['usuario']) && $_SESSION['snivel'] == 1){
    include("header.php");
  } else{
    header('location:index.php');
  }
 ?>

<?php if ($_SESSION['snivel'] == 1 ) { ?>
<main class="container bg-light p-3 mt-5">  
  <div class="container-fluid">
    <div class="p-2 mb-4 bg-primary text-white">Reportes</div>
    <div class="row">
      <div class="col-md-6">
        <a href="index.php?action=repventasdia" class="btn btn-success" style="width: 100%;">Reportes Ventas x Dia</a>
      </div>
      <div class="col-md-6">
        <a href="index.php?action=repventasmes" class="btn btn-success" style="width: 100%;">Reporte Ventas x Rango Fechas</a>
      </div>
    </div>
    <br>
  </div>
</main>
<?php } ?> 
