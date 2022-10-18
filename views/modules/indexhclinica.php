<link href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.8.0/sweetalert2.min.css" rel="stylesheet"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.8.0/sweetalert2.min.js"></script>

<?php
  session_start();

  $cedulaPHC = $_SESSION['scedulap'];
  $paciente = new UsuarioControlador();
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
            <a href="index.php?action=hclinica"><button type="button" style="width: 100%;" class="btn btn-outline-primary">Crear Historia Clinica</button></a>
          </div>
          <div class="col-md-4">
            <button type="button" style="width: 100%;" class="btn btn-outline-primary" onclick="window.location.href='index.php?action=consultorio'">Evolucion</button>
          </div>

          <div class="col-md-4">
            <button type="button" style="width: 100%;" class="btn btn-outline-primary" onclick="window.location.href='index.php?action=consultorio'">Recetario</button>
          </div>          
        </div>
        <br>
        <div class="row">      
          <div class="col-md-4">
            <button type="button" style="width: 100%;" class="btn btn-outline-primary" onclick="window.location.href='index.php?action=consultorio'">Certificacion</button>
          </div>
            
          <div class="col-md-4">
            <button type="button" style="width: 100%;" class="btn btn-outline-primary" onclick="window.location.href='index.php?action=consultorio'">Ordenes Medicas</button>
          </div>

          <div class="col-md-4">
            <button type="button" style="width: 100%;" class="btn btn-outline-primary" onclick="window.location.href='index.php?action=consultorio'">Remisiones</button>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-md-4">
            <button type="button" style="width: 100%;" class="btn btn-outline-primary" onclick="window.location.href='index.php?action=consultorio'">Consentimientos Informados</button>
          </div>
        </div>
        <br>
        <div class="row"></div>
      </div>
      <?php } ?> 
    </div>
  </div>
             <!-- FIN PHP  -->