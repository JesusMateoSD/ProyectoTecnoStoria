<link href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.8.0/sweetalert2.min.css" rel="stylesheet"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.8.0/sweetalert2.min.js"></script>

<?php
  session_start();
  include('../db.php');
  include('../header/header.php');

  $_SESSION['scedulap'] = 0;
  if(isset($_GET['id'])){
    $_SESSION['scedulap'] = $_GET['id'];
  }

  if (empty($_SESSION['scedulap'])){

    $cedula = $_POST['documento'];
    $_SESSION['scedulap']  = $cedula;	

    $query = "SELECT * FROM tbl_pacientes WHERE documento='$cedula'";
    $result = mysqli_query($mysqli, $query);

    $row = mysqli_fetch_array($result);
    $nombrep = $row["paciente"];

    if (mysqli_num_rows($result) == 0) {
      echo  '<script LANGUAGE="javascript">
              $(document).ready(function() {
                swal({
                  title: "TecnoStoria!",
                  text: "Paciente No Existe Debe Crearlo Primero Para Hacer Historia Clinica!",
                  type: "error",
                  confirmButtonColor: "#3085d6",
                  confirmButtonText: "OK!"
                }).then((result) => {
                  if (result.value) {
                    window.location.href = "../pacientes/indexpaciente.php";
                  }
                })
              });
            </script>';
    } 
  } else{
      
    $query = "SELECT * FROM tbl_pacientes WHERE documento='$_SESSION[scedulap]'";
    $result = mysqli_query($mysqli, $query);

    $row = mysqli_fetch_array($result);
    $nombrep = $row["paciente"];
    if (mysqli_num_rows($result) == 0) {
      echo  '<script LANGUAGE="javascript">
              $(document).ready(function() {
                swal({
                  title: "TecnoStoria!",
                  text: "Paciente No Existe Debe Crearlo Primero Para Hacer Historia Clinica!",
                  type: "error",
                  confirmButtonColor: "#3085d6",
                  confirmButtonText: "OK!"
                }).then((result) => {
                  if (result.value) {
                    window.location.href = "../pacientes/indexpaciente.php";
                  }
                })
              });
            </script>';
    }
  }
?>
   <!-- INICIO PHP  -->

<div class="bg-light m-5 pt-3">
  <div class="container-fluid">
    <div class="p-2 mb-3 bg-primary text-white">Historia Clinica Paciente <?php echo  $nombrep; ?></div>
      <?php if ($_SESSION['snivel'] == 1 OR $_SESSION['snivel'] == 2) { ?>  
        <div class="row">
          <div class="col-md-4">
            <button type="button" style="width: 100%;" class="btn btn-outline-primary"  onclick="window.location.href='hclinica.php'">Crear Historia Clinica</button>
          </div>
          <div class="col-md-4">
            <button type="button" style="width: 100%;" class="btn btn-outline-primary" onclick="window.location.href='../evolucion/evolucion.php'">Evolucion</button>
          </div>

          <div class="col-md-4">
            <button type="button" style="width: 100%;" class="btn btn-outline-primary" onclick="window.location.href='../recetario/recetario.php'">Recetario</button>
          </div>          
        </div>
        <br>
        <div class="row">      
          <div class="col-md-4">
            <button type="button" style="width: 100%;" class="btn btn-outline-primary" onclick="window.location.href='../certificacion/certificacion.php'">Certificacion</button>
          </div>
            
          <div class="col-md-4">
            <button type="button" style="width: 100%;" class="btn btn-outline-primary" onclick="window.location.href='../omedicas/omedicas.php'">Ordenes Medicas</button>
          </div>

          <div class="col-md-4">
            <button type="button" style="width: 100%;" class="btn btn-outline-primary" onclick="window.location.href='../remision/remision.php'">Remisiones</button>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-md-4">
            <button type="button" style="width: 100%;" class="btn btn-outline-primary" onclick="window.location.href='../cinformados/cinformados.php'">Consentimientos Informados</button>
          </div>
        </div>
        <br>
        <div class="row"></div>
      </div>
      <?php } ?> 
    </div>
  </div>
             <!-- FIN PHP  -->

   <!-- <div class="modal" id="myModal">
      <div class="modal-dialog">
        <div class="modal-content">
          <form action="../hclinica/indexhclinica.php" method="POST" >
            <div class="modal-header">
              <h4 class="modal-title">Digite Numero Documento</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            
            <div class="modal-body">
              <div class="col-md-12 mb-4">
              <input type="text" name="documento" id="documento" class="form-control" placeholder="Documento"  autofocus autocomplete="off">
              </div>
            </div>
            
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              <input type="submit" name="salvarparametro" class="btn btn-primary " value="Historia Clinica">
            </div>
          </form>
        </div>
      </div>
    </div> -->