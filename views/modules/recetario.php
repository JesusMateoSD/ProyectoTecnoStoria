<?php
  session_start();
  date_default_timezone_set('America/Bogota');
  $fechahoy = date('Y-m-d');

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

  $Recetario = new RecetarioControlador();
  $tablaR = $Recetario->TablaModeloRecetarioControlador();

  if(isset($_SESSION['usuario'])){
    include("header.php");
  } else{
    header('location:index.php');
  }
?>

<head>
  <script type="text/javascript" src="views/modules/tablaRecetario.js"></script>
</head>

<main class="container ">
  <div class="p-2 mb-2 bg-primary text-white">Crear Recetario</div>
  <hr>

  <!-- ADD TASK FORM -->

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

            <div class="col-md-2 mb-4">
              <label for="usr">Fecha N:</label>
              <input type="text" name="fechan" class="form-control" id="fechan" value="<?php echo  $fechan; ?>" readonly>
            </div>

            <div class="col-md-12 mb-2">
              <div class="p-2 mb-2 bg-primary "></div>
            </div>

            <div class="col-md-12 mb-4">
              <label for="usr">Modelos</label>
              <select class="custom-select mr-sm-2" onchange="alerta();" name="modelos" id="modelos">
                <option value="0">Seleccione Modelo</option>
                <?php
                // $query = $mysqli->query("SELECT * FROM tbl_modelor ");
                // while ($valores = mysqli_fetch_array($query)) {
                foreach($tablaR as $valores){
                  echo '<option value="' . $valores['nombre'] . '">' . $valores['nombre'] . '</option>';
                }
                ?>
              </select>
            </div>

            <div class="col-md-12 mb-2">
              <label for="exampleFormControlTextarea1">Recetario:</label>
              <textarea class="form-control rounded-0" name="recetario" id="recetario" rows="4"></textarea>
            </div>

            <div class="col-md-12 mb-2">
              <div class="p-2 mb-2 bg-primary "></div>
            </div>

          </div>

          <input name="salvarrecetario" id="salvarrecetario" class="btn btn-primary " value="Grabar Recetario">
          <a href="index.php?action=indexhclinicaAge&idp=<?php echo $_SESSION['scedulap'] ?>" class="btn btn-danger">Salir</a>

        </form>
      </div>
    </div>
    <br>
    <div class="bg-light p-2 mb-2" id="tablarecetario"></div>

    </div>
  </div>
</main>

<!-- <script type="text/javascript">
  $(document).ready(function() {
    $('#salvarrecetario').click(function() {
      var datos = $('#myForm').serialize();
      $.ajax({
        type: "POST",
        url: "salvarrecetario.php",
        data: datos,
        success: function(r) {
          if (r == 1) {
            alert("agregado con exito");
          } else {
            //  alert("agregado con exito");
            $("#tablarecetario").load('mostrarrecetario.php');
          }
        }
      });

      return false;
    });
  });
</script> -->

<script type="text/javascript" src="views/js/mostrarRecetario.js"></script>

<script>
  document.getElementById("modelos").onchange = function() {
    alerta()
  };

  function alerta() {
    // Creando el objeto para hacer el request
    var request = new XMLHttpRequest();
    request.responseType = 'json';
    // Objeto PHP que consultaremos
    request.open("POST", "modelor.php");
    // Definiendo el listener
    request.onreadystatechange = function() {
      // Revision si fue completada la peticion y si fue exitosa
      if (this.readyState === 4 && this.status === 200) {
        // Ingresando la respuesta obtenida del PHP
        var nombrer = this.response.message;
        if (nombrer === "vacio") {
          alert("Este Modelo No Existe en El Sistema.");

        } else {
          document.getElementById("recetario").value = this.response.modelo;

          //   document.getElementById('cantidad').focus();

        }

      }
    };

    // Recogiendo la data del HTML
    var myForm = document.getElementById("myForm");
    var formData = new FormData(myForm);

    // Enviando la data al PHP
    request.send(formData);
  }

  function handler(e) {
    alert(e.target.value);
  }
</script>


<!-- FIN PHP INDEX SUPER USUARIO -->