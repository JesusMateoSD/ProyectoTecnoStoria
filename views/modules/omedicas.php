<?php
  session_start();

  if(isset($_POST['salvarom'])){
    $HClinicaS = new OrdMedControlador();
    $HClinicaS->registrarOrdMedControlador();
  }

  date_default_timezone_set('America/Bogota');
  $fechahoy = date('Y-m-d');

  if($_GET['action'] == 'omok'){
    ?>
      <script>
          $(document).ready(function() {
            swal({
              title: 'TecnoStoria',
              text: "La orden medica ha sido creada con exito",
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

  if(isset($_SESSION['usuario']) && $_SESSION['snivel'] <= 2){
    include("header.php");
  } else{
    header('location:index.php');
  }
?>

<head>
  <script type="text/javascript" src="views/js/tablaOM.js"></script>

  <main class="container">
    <div class="p-2 my-2 bg-primary text-white">Crear Ordenes Medicas</div>
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
            <div class="p-2 mb-2 bg-primary"></div>
          </div>

            <div class="col-md-4 mb-4">
              <div class="checkbox">
                <label><input type="checkbox" value="CUADRO HEMATICO" onclick="elegirOrden(this)">CUADRO HEMATICO</label>
              </div>
            </div>

            <div class="col-md-4 mb-4">
              <div class="checkbox">
                <label><input type="checkbox" id="trg" value="TRIGLICERIDOS" onclick="elegirOrden(this)">TRIGLICERIDOS</label>
              </div>
            </div>

            <div class="col-md-4 mb-4">
              <div class="checkbox">
                <label><input type="checkbox" id="pl" value="PERFIL LIPIDICO" onclick="elegirOrden(this)">PERFIL LIPIDICO</label>
              </div>
            </div>

            <div class="col-md-4 mb-4">
              <div class="checkbox">
                <label><input type="checkbox" value="VDRL" onclick="elegirOrden(this)">VDRL</label>
              </div>
            </div>

            <div class="col-md-4 mb-4">
              <div class="checkbox">
                <label><input type="checkbox" value="TOMOGRAFIA" onclick="elegirOrden(this)">TOMOGRAFIA</label>
              </div>
            </div>

            <div class="col-md-4 mb-4">
              <div class="checkbox">
                <label><input type="checkbox" value="PARCIAL DE ORINA" onclick="elegirOrden(this)">PARCIAL DE ORINA</label>
              </div>
            </div>

            <div class="col-md-4 mb-4">
              <div class="checkbox">
                <label><input type="checkbox" value="CREATININA" onclick="elegirOrden(this)">CREATININA</label>
              </div>
            </div>

            <div class="col-md-4 mb-4">
              <div class="checkbox">
                <label><input type="checkbox" value="PERFIL HEPATICO" onclick="elegirOrden(this)">PERFIL HEPATICO</label>
              </div>
            </div>

            <div class="col-md-4 mb-4">
              <div class="checkbox">
                <label><input type="checkbox" value="QUIMICA SANGUINEA" onclick="elegirOrden(this)">QUIMICA SANGUINEA</label>
              </div>
            </div>

            <div class="col-md-4 mb-4">
              <div class="checkbox">
                <label><input type="checkbox" value="RADIOGRAFIA" onclick="elegirOrden(this)">RADIOGRAFIA</label>
              </div>
            </div>

            <div class="col-md-4 mb-4">
              <div class="checkbox">
                <label><input type="checkbox" value="T. COAGULACION" onclick="elegirOrden(this)">T. COAGULACION</label>
              </div>
            </div>

            <div class="col-md-4 mb-4">
              <div class="checkbox">
                <label><input type="checkbox" value="BUN" onclick="elegirOrden(this)">BUN</label>
              </div>
            </div>

            <div class="col-md-4 mb-4">
              <div class="checkbox">
                <label><input type="checkbox" value="PERFIL TIROIDEO" onclick="elegirOrden(this)">PERFIL TIROIDEO</label>
              </div>
            </div>

            <div class="col-md-4 mb-4">
              <div class="checkbox">
                <label><input type="checkbox" value="PRUEBA DE EMBARAZO" onclick="elegirOrden(this)">PRUEBA DE EMBARAZO</label>
              </div>
            </div>

            <div class="col-md-4 mb-4">
              <div class="checkbox">
                <label><input type="checkbox" value="GLICEMIA" onclick="elegirOrden(this)">GLICEMIA</label>
              </div>
            </div>

            <div class="col-md-4 mb-4">
              <div class="checkbox">
                <label><input type="checkbox" value="PERFIL RENAL" onclick="elegirOrden(this)">PERFIL RENAL</label>
              </div>
            </div>

            <div class="col-md-4 mb-4">
              <div class="checkbox">
                <label><input type="checkbox" value="CROPOLOGICO" onclick="elegirOrden(this)">CROPOLOGICO</label>
              </div>
            </div>

            <div class="col-md-4 mb-4">
              <div class="checkbox">
                <label><input type="checkbox" value="PERFIL REUMATICO" onclick="elegirOrden(this)">PERFIL REUMATICO</label>
              </div>
            </div>
          

          <div class="col-md-12 mb-2">
            <div class="p-2 mb-2 bg-primary"></div>
          </div>


          <div class="col-md-12 mb-2">
            <label for="exampleFormControlTextarea1">Orden Medica:</label>
            <textarea class="form-control rounded-0" name="ordenmedica" id="ordenmedica" rows="6"></textarea>
          </div>

          <div class="col-md-12 my-2">
            <div class="p-2 mb-2 bg-primary"></div>
          </div>
        </div>
        <input type="submit" name="salvarom" id="salvarom" class="btn btn-primary " value="Grabar Orden Medica">
        <a href="index.php?action=indexhclinicaAge&idp=<?php echo $_SESSION['scedulap'] ?>"  class="btn btn-danger">Salir</a>
      </form>
    </div>
  </div>
    <br>
    <div class="bg-light p-2 mb-2" id="tablaomedicas"></div>
    </div>
  </div>
</main>

  <script type="text/javascript" src="views/js/tablaOM_F.js"></script>
  <script type="text/javascript" src="views/js/Orden_OM.js"></script>

  <!-- FIN PHP INDEX SUPER USUARIO -->