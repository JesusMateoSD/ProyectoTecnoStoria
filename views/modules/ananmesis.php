<?php
  if(isset($_POST['salvarananmesis'])){
    $AnanmesisS = new AnanmesisControlador();
    $AnanmesisS->registrarAnanmesisControlador();
  }

  date_default_timezone_set('America/Bogota');
  $fechahoy = date('Y-m-d');

  if($_GET['action'] == 'anok'){
    ?>
      <script>
          $(document).ready(function() {
            swal({
              title: 'TecnoStoria',
              text: "La Ananmesis ha sido creada con exito",
              type: 'success',
              confirmButtonColor: '#3085d6',
              confirmButtonText: 'OK!'
            }).then((result) => {
            
            })
          });
      </script>
    <?php
  }

  $cedulaPAn = $_SESSION['scedulap'];
  $paciente = new PacienteControlador();
  $pacienteAn = $paciente->consultarPacienteHCControlador($cedulaPAn);

  // $query = "SELECT * FROM tbl_pacientes WHERE documento='$_SESSION[scedulap]'";
  // $result = mysqli_query($mysqli, $query);
  // $row = mysqli_fetch_array($result);
  $nombrep = $pacienteAn['paciente'];
  $td = $pacienteAn["tipodocumento"];
  $documento = $pacienteAn["documento"];
  $dir = $pacienteAn["direccion"];
  $tel = $pacienteAn["telefono"];
  $edad = $pacienteAn["edad"];
  $fechan = $pacienteAn["fechan"];

  $Ananmesis = new AnanmesisControlador();
  $tCausaEx = $Ananmesis->TablaCausasExternasControlador();
  $FinalidadC = $Ananmesis->TablaFinalidadConsultasControlador();

  if(isset($_SESSION['usuario']) && $_SESSION['snivel'] <= 2){
    include("header.php");
  } else{
    header('location:index.php');
  }

?>

<head>
  <script src="views/js/tablaAnanmesis.js"></script>
  <script src="views/js/calcularIMC.js"></script>
</head>

<main class="container ">
  <div class="p-2 mb-2 bg-primary text-white">Crear Ananmesis</div>
  <hr>
  <body onload="detalleinicio()">
    <div class="container">
      <div class="row">
        <form id="myForm" name="f" method="POST">
          <div class="form-row">
            <div class="col-md-2 mb-2">
              <label for="usr">Fecha:</label>
              <input type="text" name="fecha" class="form-control" value="<?php echo $fechahoy = date('Y-m-d'); ?>" readonly>
            </div>

            <div class="col-md-2 mb-2">
              <label for="usr">Hora:</label>
              <input type="text" name="hora" class="form-control" value="<?php echo date("H:i:s"); ?>" readonly>
            </div>

            <div class="col-md-2 mb-2">
              <label for="usr">Tipo Documento:</label>
              <input type="text" name="td" class="form-control" value="<?php echo $td; ?>" readonly>
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
              <label for="usr">Fecha de Nacimiento:</label>
              <input type="text" name="fechan" class="form-control" id="fechan" value="<?php echo  $fechan; ?>" readonly>
            </div>

            <div class="col-md-12 mt-4 mb-4">
              <div class="p-2 mb-2 bg-primary "></div>
            </div>

            <div class="col-md-5 mb-4">
              <select class="custom-select mr-sm-2" name="causaexterna" id="causaexterna">
                <option value="0">Causa Externa:</option>
                <?php
                  // $query = $mysqli->query("SELECT * FROM tbl_causaexterna ");
                  // while ($valores = mysqli_fetch_array($query)) {
                  foreach($tCausaEx as $valores){
                    echo '<option value="' . $valores['tipo'] . '">' . $valores['nombre'] . '</option>';
                  }
                ?>
              </select>
            </div>

            <div class="col-md-7 mb-4">
              <select class="custom-select mr-sm-2" name="finalidadconsulta" id="finalidadconsulta">
                <option value="0">Finalidad Consulta:</option>
                <?php
                  // $query = $mysqli->query("SELECT * FROM tbl_finalidadc");
                  // while ($valores = mysqli_fetch_array($query)) {
                  foreach($FinalidadC as $valores){
                    echo '<option value="' . $valores['tipo'] . '">' . $valores['nombre'] . '</option>';
                  }
                ?>
              </select>
            </div>

            <div class="col-md-12 mb-2">
              <label for="usr">Motivo de la Consulta:</label>
              <input type="text" name="mconsulta" class="form-control">
            </div>

            <div class="col-md-12 mb-2">
              <label for="usr">Enfermedad Actual:</label>
              <input type="text" name="eactual" class="form-control">
            </div>

            <div class="col-md-12 mb-4">
              <label for="usr">Revision x Sistema:</label>
              <input type="text" name="rsistema" class="form-control">
            </div>

            <div class="col-md-12 mb-2">
              <div class="p-2 mb-2 bg-primary text-white">Antecedentes Gineco-Obstetricos</div>
            </div>

            <div class="col-md-4 mb-2">
              <label for="exampleFormControlSelect1">Usa Anticonceptivos</label>
              <select class="form-control" id="uanti" name="uanti">
                <option value="SI">SI</option>
                <option value="NO" selected>NO</option>
              </select>
            </div>

            <div class="col-md-4 mb-2">
              <label for="exampleFormControlSelect1">Menarquia</label>
              <select class="form-control" id="menarquia" name="menarquia">
                <option value="SI">SI</option>
                <option value="NO" selected>NO</option>
              </select>
            </div>

            <div class="col-md-4 mb-2">
              <label for="exampleFormControlSelect1">FUM</label>
              <select class="form-control" id="fum" name="fum">
                <option value="SI">SI</option>
                <option value="NO" selected>NO</option>
              </select>
            </div>

            <div class="col-md-2 mb-2">
              <label for="usr">G:</label>
              <input type="text" name="g" class="form-control">
            </div>

            <div class="col-md-2 mb-2">
              <label for="usr">A:</label>
              <input type="text" name="a" class="form-control">
            </div>

            <div class="col-md-2 mb-2">
              <label for="usr">P:</label>
              <input type="text" name="p" class="form-control">
            </div>

            <div class="col-md-2 mb-2">
              <label for="usr">C:</label>
              <input type="text" name="c" class="form-control">
            </div>

            <div class="col-md-4 mb-4">
              <label for="usr">Fecha Ultimo Parto:</label>
              <input type="date" name="fuparto" class="form-control">
            </div>

            <div class="col-md-12 mb-2">
              <div class="p-2 mb-2 bg-primary text-white">Antecedentes Personales</div>
            </div>

            <div class="col-md-12 mb-2">
              <label for="usr">Cardiovasculares:</label>
              <input type="text" name="cv" class="form-control" value="NO REFIERE">
            </div>

            <div class="col-md-12 mb-2">
              <label for="usr">Pulmonares:</label>
              <input type="text" name="pulm" class="form-control" value="NO REFIERE">
            </div>

            <div class="col-md-12 mb-2">
              <label for="usr">Digestivos:</label>
              <input type="text" name="dige" class="form-control" value="NO REFIERE">
            </div>

            <div class="col-md-12 mb-2">
              <label for="usr">Diabetes:</label>
              <input type="text" name="diab" class="form-control" value="NO REFIERE">
            </div>

            <div class="col-md-12 mb-2">
              <label for="usr">Renales:</label>
              <input type="text" name="rnl" class="form-control" value="NO REFIERE">
            </div>

            <div class="col-md-12 mb-2">
              <label for="usr">Quirurguicos:</label>
              <input type="text" name="quirur" class="form-control" value="NO REFIERE">
            </div>

            <div class="col-md-12 mb-2">
              <label for="usr">Traumaticos:</label>
              <input type="text" name="traum" class="form-control" value="NO REFIERE">
            </div>

            <div class="col-md-12 mb-2">
              <label for="usr">Alergicos:</label>
              <input type="text" name="aler" class="form-control" value="NO REFIERE">
            </div>

            <div class="col-md-12 mb-2">
              <label for="usr">Transfusiones:</label>
              <input type="text" name="trfs" class="form-control" value="NO REFIERE">
            </div>

            <div class="col-md-12 mb-2">
              <label for="usr">Medicamentos:</label>
              <input type="text" name="mdcm" class="form-control" value="NO REFIERE">
            </div>

            <div class="col-md-12 mb-2">
              <label for="usr">Alcohol:</label>
              <input type="text" name="alc" class="form-control" value="NO REFIERE">
            </div>

            <div class="col-md-12 mb-2">
              <label for="usr">Drogas:</label>
              <input type="text" name="drogas" class="form-control" value="NO REFIERE">
            </div>

            <div class="col-md-12 mb-2">
              <label for="usr">Cigarrillo:</label>
              <input type="text" name="ciga" class="form-control" value="NO REFIERE">
            </div>

            <div class="col-md-12 mb-2">
              <label for="usr">Inmunizaciones:</label>
              <input type="text" name="inm" class="form-control" value="NO REFIERE">
            </div>

            <div class="col-md-12 mb-2">
              <label for="usr">Otros:</label>
              <input type="text" name="otros" class="form-control" value="NO REFIERE">
            </div>

            <div class="col-md-12 mb-4">
              <label for="usr">Antecedentes Familiares:</label>
              <input type="text" name="afm" class="form-control">
            </div>

            <div class="col-md-12 mb-2">
              <div class="p-2 mb-2 bg-primary text-white">Examen Fisico</div>
            </div>

            <div class="col-md-12 mb-2">
              <label for="usr">Cabeza:</label>
              <input type="text" name="cabeza" class="form-control" value="NORMAL">
            </div>

            <div class="col-md-12 mb-2">
              <label for="usr">Cara:</label>
              <input type="text" name="cara" class="form-control" value="NORMAL">
            </div>

            <div class="col-md-12 mb-2">
              <label for="usr">Cuello:</label>
              <input type="text" name="cuello" class="form-control" value="NORMAL">
            </div>

            <div class="col-md-12 mb-2">
              <label for="usr">Torax:</label>
              <input type="text" name="torax" class="form-control" value="NORMAL">
            </div>

            <div class="col-md-12 mb-2">
              <label for="usr">Corazon:</label>
              <input type="text" name="corazon" class="form-control" value="NORMAL">
            </div>

            <div class="col-md-12 mb-2">
              <label for="usr">Pulmones:</label>
              <input type="text" name="pulmones" class="form-control" value="NORMAL">
            </div>

            <div class="col-md-12 mb-2">
              <label for="usr">Abdomen y Pelvis:</label>
              <input type="text" name="abdpelvis" class="form-control" value="NORMAL">
            </div>

            <div class="col-md-12 mb-2">
              <label for="usr">Genitales Ext.:</label>
              <input type="text" name="genext" class="form-control" value="NORMAL">
            </div>

            <div class="col-md-12 mb-2">
              <label for="usr">Columna Vertebral:</label>
              <input type="text" name="colver" class="form-control" value="NORMAL">
            </div>

            <div class="col-md-12 mb-2">
              <label for="usr">Neurologico:</label>
              <input type="text" name="neurologico" class="form-control" value="NORMAL">
            </div>

            <div class="col-md-12 mb-2">
              <label for="usr">Miembros Sup.:</label>
              <input type="text" name="miemsup" class="form-control" value="NORMAL">
            </div>

            <div class="col-md-12 mb-2">
              <label for="usr">Miembros Inf.:</label>
              <input type="text" name="mieminf" class="form-control" value="NORMAL">
            </div>

            <div class="col-md-12 mb-2">
              <label for="usr">Piel y Faneras:</label>
              <input type="text" name="pifan" class="form-control" value="NORMAL">
            </div>

            <div class="col-md-12 mb-2">
              <label for="usr">Articulaciones:</label>
              <input type="text" name="articu" class="form-control" value="NORMAL">
            </div>

            <div class="col-md-12 mb-2">
              <label for="usr">Fuerza Muscular:</label>
              <input type="text" name="fuermus" class="form-control" value="NORMAL">
            </div>

            <div class="col-md-12 mb-2">
              <label for="usr">Reflejos:</label>
              <input type="text" name="reflejos" class="form-control" value="NORMAL">
            </div>

            <div class="col-md-12 mb-2">
              <label for="usr">Pares Craneales:</label>
              <input type="text" name="parescraneales" class="form-control" value="NORMAL">
            </div>

            <div class="col-md-12 mb-4">
              <label for="usr">Psicoemocional:</label>
              <input type="text" name="psicoemocional" class="form-control" value="NORMAL">
            </div>

            <div class="col-md-12 mb-2">
              <div class="p-2 mb-2 bg-primary text-white">Signos Vitales</div>
            </div>

            <div class="col-md-3 mb-2">
              <label for="exampleFormControlSelect1">FC:</label>
              <input type="text" name="fc" class="form-control" value="NO">
            </div>

            <div class="col-md-3 mb-2">
              <label for="exampleFormControlSelect1">FR:</label>
              <input type="text" name="fr" class="form-control" value="NO">
            </div>

            <div class="col-md-3 mb-2">
              <label for="exampleFormControlSelect1">TA:</label>
              <input type="text" name="ta" class="form-control" value="NO">
            </div>

            <div class="col-md-3 mb-2">
              <label for="exampleFormControlSelect1">T:</label>
              <input type="text" name="t" class="form-control" value="NO">
            </div>

            <div class="col-md-3 mb-4">
              <label for="usr">%SO2:</label>
              <input type="text" name="so2" class="form-control" value="NO">
            </div>

            <div class="col-md-2 mb-4">
              <label for="usr">Peso Kg:</label>
              <input type="text" name="pesokg" id="pesokg" class="form-control">
            </div>

            <div class="col-md-2 mb-2">
              <label for="exampleFormControlSelect1">Talla CM(1.62):</label>
              <input type="text" name="tallacm" id="tallacm" onchange="cal()" onkeyup="cal()" class="form-control">
            </div>

            <div class="col-md-2 mb-4">
              <label for="usr">IMC:</label>
              <input type="text" name="imc" id="imc" class="form-control" readonly>
            </div>

            <div class="col-md-3 mb-4">
              <label for="usr">Resultado:</label>
              <input type="text" name="lectura" id="lectura" class="form-control" readonly>
            </div>

            <div class="col-md-12 mb-2">
              <div class="p-2 mb-2 bg-primary "></div>
            </div>

            <div class="col-md-12 mb-2">
              <label for="exampleFormControlSelect1">Impresion Diagnostica:</label>
              <input type="text" name="imd" class="form-control">
            </div>

            <div class="col-md-12 mb-2">
              <label for="exampleFormControlSelect1">Conductas a Seguir:</label>
              <input type="text" name="conds" class="form-control">
            </div>

            <div class="col-md-12 mb-2">
              <label for="exampleFormControlSelect1">Incapacidad:</label>
              <input type="text" name="incap" class="form-control">
            </div>

            <div class="col-md-12 mb-2">
              <div class="p-2 mb-2 bg-primary "></div>
            </div>
          </div>

          <input type="submit" name="salvarananmesis" id="salvarananmesis" class="btn btn-primary" value="Grabar Ananmesis">
          <a href="index.php?action=indexhclinicaAge&idp=<?php echo $_SESSION['scedulap'] ?>" class="btn btn-danger">Salir</a>
        </form>
      </div>
    </div>
    <br>
    <div class="bg-light p-2 mb-2">
      <div id="tablahistorias"></div>
    </div>
    </div>
  </div>
</main>

<!-- FIN PHP INDEX SUPER USUARIO -->