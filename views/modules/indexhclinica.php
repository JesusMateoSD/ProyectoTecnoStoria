<?php
  session_start();

  $cedulaPHC = $_SESSION['scedulap'];
  $paciente = new PacienteControlador();
  $pacienteHC = $paciente->consultarPacienteHCControlador($cedulaPHC);

  $nombreP = $pacienteHC['paciente']; 

  if(isset($_SESSION['usuario'])){
    include("header.php");
  } else{
    header('location:index.php');
  }
?>
   <!-- INICIO PHP  -->

<div class="bg-light m-5 pt-3">
  <div class="container-fluid">
    <div class="p-2 mb-3 bg-primary text-white">Historia Clinica Paciente <?php echo $nombreP; ?></div>
      <?php if ($_SESSION['snivel'] == 1 OR $_SESSION['snivel'] == 2) { ?>  
        <div class="row">
          <div class="col-md-4">
            <a href="index.php?action=ananmesis"><button type="button" style="width: 100%;" class="btn btn-outline-primary">Ananmesis</button></a>
          </div>
          <div class="col-md-4">
            <button type="button" style="width: 100%;" class="btn btn-outline-primary" onclick="window.location.href='index.php?action=evolucion'">Evolucion Medica</button>
          </div>

          <div class="col-md-4">
            <button type="button" style="width: 100%;" class="btn btn-outline-primary" onclick="window.location.href='index.php?action=recetario'">Recetario</button>
          </div>          
        </div>
        <br>
        <div class="row">      
          <div class="col-md-4">
            <button type="button" style="width: 100%;" class="btn btn-outline-primary" onclick="window.location.href='index.php?action=certificacion'">Certificacion</button>
          </div>
            
          <div class="col-md-4">
            <button type="button" style="width: 100%;" class="btn btn-outline-primary" onclick="window.location.href='index.php?action=omedicas'">Ordenes Medicas</button>
          </div>

          <div class="col-md-4">
            <button type="button" style="width: 100%;" class="btn btn-outline-primary" onclick="window.location.href='index.php?action=remision'">Remisiones</button>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-md-4">
            <button type="button" style="width: 100%;" class="btn btn-outline-primary" onclick="window.location.href='index.php?action=cinformados'">Consentimientos Informados</button>
          </div>
        </div>
        <br>
        <div class="row"></div>
      </div>
      <?php } ?> 
    </div>
  </div>
             <!-- FIN PHP  -->
