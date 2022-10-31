<?php
  session_start();

  if(isset($_POST['salvarremision'])){
    $HClinicaS = new RemisionControlador();
    $HClinicaS->registrarRemisionControlador();
  }

  date_default_timezone_set('America/Bogota');
  $fechahoy = date('Y-m-d');

  if($_GET['action'] == 'remok'){
    ?>
      <script>
          $(document).ready(function() {
            swal({
              title: 'TecnoStoria',
              text: "La remision ha sido creada con exito",
              type: 'success',
              confirmButtonColor: '#3085d6',
              confirmButtonText: 'OK!'
            }).then((result) => {
            
            })
          });
      </script>
    <?php
  }

  $cedulaPHC = $_SESSION['scedulap'];
  $paciente = new UsuarioControlador();
  $pacienteHC = $paciente->consultarPacienteHCControlador($cedulaPHC);
  // $query = "SELECT * FROM tbl_pacientes WHERE documento='$_SESSION[scedulap]'";
  // $result = mysqli_query($mysqli, $query);
  // $row = mysqli_fetch_array($result);

  $nombrep = $pacienteHC["paciente"];
  $td = $pacienteHC["tipodocumento"];
  $documento = $pacienteHC["documento"];
  $dir = $pacienteHC["direccion"];
  $tel = $pacienteHC["telefono"];
  $edad = $pacienteHC["edad"];
  $fechan = $pacienteHC["fechan"];

  $EvolucionMedica = new EvMedicaControlador();
  $TablaCIE10 = $EvolucionMedica->TablaCIE10Controlador();

  if(isset($_SESSION['usuario'])){
    include("header.php");
  } else{
    header('location:index.php');
  }
?>

<head>
  <script type="text/javascript" src="views/js/tablaRemision.js"></script>
</head>

<main class="container ">
  <div class="p-2 mb-2 bg-primary text-white">Crear Remision</div>
  <hr>
  <body onload="detalleinicio()">
    <div class="container">
      <div class="row">
        <form id="myForm" name="f" method="POST">
          <div class="form-row">
            <div class="col-md-2 mb-2">
              <label for="usr">Fecha:</label>
              <input type="text" name="fecha" class="form-control" value="<?php echo  $fechahoy = date('Y-m-d'); ?>" readonly>
            </div>

            <div class="col-md-2 mb-2">
              <label for="usr">Hora:</label>
              <input type="text" name="hora" class="form-control" value="<?php echo  date("H:i:s"); ?>" readonly>
            </div>

            <div class="col-md-2 mb-2">
              <label for="usr">Tipo Documento:</label>
              <input type="text" name="td" class="form-control" value="<?php echo  $td; ?>" readonly>
            </div>

            <div class="col-md-6 mb-2">
              <label for="usr">Paciente:</label>
              <input type="text" name="paciente" id="paciente" class="form-control" value="<?php echo  $nombrep; ?>" readonly>
            </div>

            <div class="col-md-2 mb-2">
              <label for="usr">Documento:</label>
              <input type="text" name="documento" id="documento" class="form-control" value="<?php echo  $documento; ?>" readonly>
            </div>

            <div class="col-md-4 mb-2">
              <label for="usr">Direccion:</label>
              <input type="text" name="dir" id="dir" class="form-control" value="<?php echo  $dir; ?>" readonly>
            </div>

            <div class="col-md-3 mb-2">
              <label for="usr">Telefono:</label>
              <input type="text" name="tel" id="tel" class="form-control" value="<?php echo  $tel; ?>" readonly>
            </div>

            <div class="col-md-1 mb-2">
              <label for="usr">Edad:</label>
              <input type="text" name="edad" class="form-control" id="edad" value="<?php echo  $edad; ?>" readonly>
            </div>

            <div class="col-md-2 mb-2">
              <label for="usr">Fecha N:</label>
              <input type="text" name="fechan" class="form-control" id="fechan" value="<?php echo  $fechan; ?>" readonly>
            </div>

            <div class="col-md-12 mb-2">
              <div class="p-2 mb-2 bg-primary "></div>
            </div>

            <div class="col-md-12 mb-4">
              <label for="usr">Motivo de la Consulta</label>
              <input type="text" name="mconsulta" class="form-control">
            </div>

            <div class="col-md-12 mb-4">
              <select class="custom-select mr-sm-2" name="diagprin" id="diagprin">
                <option value="0">Diagnostico Principal</option>
                <?php
                // $query = $mysqli->query("SELECT * FROM tbl_cie10 ");
                // while ($valores = mysqli_fetch_array($query)) {
                foreach($TablaCIE10 as $valores){
                  echo '<option value="' . $valores['codigo'] . '">' . $valores['nombre'] . '</option>';
                }
                ?>
              </select>
            </div>

            <div class="col-md-12 mb-4">
              <select class="custom-select mr-sm-2" name="diagrel1" id="diagrel1">
                <option value="0">Diagnostico Relacionado 1</option>
                <?php
                // $query = $mysqli->query("SELECT * FROM tbl_cie10 ");
                // while ($valores = mysqli_fetch_array($query)) {
                  foreach($TablaCIE10 as $valores){
                  echo '<option value="' . $valores['codigo'] . '">' . $valores['nombre'] . '</option>';
                }
                ?>
              </select>
            </div>


            <div class="col-md-12 mb-4">
              <select class="custom-select mr-sm-2" name="diagrel2" id="diagrel2">
                <option value="0">Diagnostico Relacionado 2</option>
                <?php
                // $query = $mysqli->query("SELECT * FROM tbl_cie10 ");
                // while ($valores = mysqli_fetch_array($query)) {
                  foreach($TablaCIE10 as $valores){
                  echo '<option value="' . $valores['codigo'] . '">' . $valores['nombre'] . '</option>';
                }
                ?>
              </select>
            </div>

            <div class="col-md-12 mb-4">
              <label for="usr">Especialidad a que se remite:</label>
              <input type="text" name="especialidadremite" class="form-control">
            </div>

            <div class="col-md-12 mb-4">
              <label for="exampleFormControlTextarea1">Remision:</label>
              <textarea class="form-control rounded-0" name="remision" id="remision" rows="4"></textarea>
            </div>

            <div class="col-md-12 mb-2">
              <div class="p-2 mb-2 bg-primary "></div>
            </div>
          </div>
          <input type="submit" name="salvarremision" id="salvarremision" class="btn btn-primary " value="Grabar Remision">
          <a href="index.php?action=indexhclinicaAge&idp=<?php echo $_SESSION['scedulap'] ?>" class="btn btn-danger">Salir</a>
        </form>
      </div>
    </div>
    <br>
    <div id="tablaremision" class="bg-light p-2 mb-2"></div>
    </div>
  </div>
</main>

<script type="text/javascript" src="views/js/mostrarRemision.js"></script>

<!-- FIN PHP INDEX SUPER USUARIO -->