<?php
  session_start();
  include('../db.php');
  include('header.php');
  $fechahoy = date('Y-m-d');
?>
 
<head> 
  <link rel="stylesheet" href="views/cute-alert-master/stylecute.css" />
  <script src="views/cute-alert-master/cute-alert.js"></script>
  <link rel="stylesheet" type="text/css" href="views/css/datatables.min.css"/>
  <script language="javascript" src="views/js/jquery-3.6.0.min.js"></script>
  <script type="text/javascript" src="views/js/datatables.min.js"></script>

  <script type="text/javascript">
    function existe(){
      Swal.fire({
      icon: 'success',
      title: 'El Paciente Ya Esta Creado',
      })
    }
  </script>

  <script type="text/javascript">
    $(document).ready( function () {
     $('#tablepacientes').DataTable();
    });
  </script>
</head>

<script language="javascript">
  $(document).ready(function(){
    $("#dpto").change(function () {
      $("#dpto option:selected").each(function () {
        id_departamento = $(this).val();
        $.post("municipios.php", { id_departamento: id_departamento }, function(data){
          $("#municipio").html(data);
        });            
      });
    })
  });
</script>

<script type="text/javascript">
  function detalleinicio() { 
    $("#tablapacientes").load('mostrardetallep.php');
  }
</script>

<main class="container ">  
  <div class="p-2 mb-2 bg-primary text-white">Crear Pacientes</div>
  <hr>  
  <body onload="detalleinicio()">
    <div class="container">
      <div class="row">
        <form id="myForm" name="f"  method="POST" >
          <div class="form-row">
            <div class="col-md-6 mb-4">
              <input type="text" name="paciente" id="paciente" class="form-control" placeholder="Paciente"  onkeyup="javascript:this.value=this.value.toUpperCase();" autofocus autocomplete="off">
            </div>
            <div class="col-md-3 mb-4">
              <select class="custom-select mr-sm-2" name="tipodocumento" id="tipodocumento" >
                <option value="0">Tipo Documento:</option>
                  <?php
                    $query = $mysqli -> query ("SELECT * FROM tbl_tipodocumento ");
                    while ($valores = mysqli_fetch_array($query)) {
                      echo '<option value="'.$valores['tipo'].'">'.$valores['nombre'].'</option>';
                    }
                  ?>
              </select>
            </div>  
            <div class="col-md-3 mb-4">
              <input type="text" name="documento" id="documento" class="form-control" placeholder="Documento"  onBlur="alerta();" autofocus autocomplete="off">
            </div>
            <div class="col-md-2 mb-4">
              <input type="text" name="fecha" class="form-control"  value="<?php echo $fechahoy = date('Y-m-d'); ?>" readonly>
            </div>
            <div class="col-md-2 mb-4">
              <input type="date" name="fechan" id="fechan" class="form-control">
            </div>
            <div class="col-md-1 mb-4">
              <input type="text" name="edad" class="form-control" placeholder="Edad" id="edad" autocomplete="off">
            </div>
            <div class="col-md-2 mb-4">
              <select class="form-control" id="sexo" name="sexo">
              <option>Sexo</option>
              <option value="M">M</option>
              <option Value="F">F</option>
              </select>
            </div>
            <div class="col-md-5 mb-4">
              <input type="text" name="dir" class="form-control" placeholder="Direccion" id="dir" autocomplete="off">
            </div>
            <div class="col-md-2 mb-4">
              <input type="text" name="telefono" class="form-control" placeholder="Telefono" id="telefono" autocomplete="off">
            </div>
            <div class="col-md-3 mb-4">
              <input type="email" name="correo" class="form-control" placeholder="Correo" id="correo" autocomplete="off">
            </div>
            <div class="col-md-3 mb-4">
              <input type="text" name="ocupacion" class="form-control" placeholder="Ocupacion" id="ocupacion" autocomplete="off">
            </div>
            <div class="col-md-4 mb-4">
              <input type="text" name="eps" class="form-control" placeholder="EPS" id="eps" autocomplete="off">
            </div>
            <div class="col-md-5 mb-4">
              <select class="custom-select mr-sm-2"   name="dpto" id="dpto" >
                <option value="0">Seleccione Departamento:</option>
                <?php
                $query = $mysqli -> query ("SELECT * FROM tbl_departamentos ");
                while ($valores = mysqli_fetch_array($query)) {
                  echo '<option value="'.$valores['id_departamento'].'">'.$valores['departamento'].'</option>';
                }
                ?>
              </select>
            </div>  
            <div class="col-md-3 mb-4">
              <select class="custom-select mr-sm-2" name="municipio" id="municipio"></select>
            </div>
            <br>
            <div class="col-md-4 mb-4">
              <input type="text" name="acudiente" id="acudiente"  onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" placeholder="Acudiente" autofocus>
            </div>
            <div class="col-md-9 mb-4">
              <input type="text" name="direcciona" class="form-control" placeholder="Direccion" id="direcciona" autocomplete="off">
            </div>
            <div class="col-md-3 mb-4">
              <input type="text" name="telefonoa" class="form-control" placeholder="Telefono" id="telefonoa" autocomplete="off">
            </div>
            <div class="col-md-12 mb-2">
              <div class="p-2 mb-2 bg-primary "></div>
            </div>          
          </div>
          <input type="submit" name="salvarpaciente" id="salvarpaciente" class="btn btn-primary mx-2" value="Grabar Paciente">
          <input type="submit" name="vaciarcampos" id="vaciarcampos" class="btn btn-success mx-2" value="Vaciar Campos">       
          </form>
        </div>
      </div>
      <br>
      <div class="bg-light p-2 mb-2">
        <div id="tablapacientes" ></div>
      </div>
    </div>
  </div>
</main>

<script>
  function alerta() {
    var request = new XMLHttpRequest();
    request.responseType = 'json';
    request.open("POST", "consultapaciente.php");

    request.onreadystatechange = function() {
      if(this.readyState === 4 && this.status === 200) {
        // Ingresando la respuesta obtenida del PHP
        var nombrer = this.response.message;

        if(nombrer === "vacio"){
          existe();
          alert("holaaaaaa");
        } else{
          //  existe();
        }            
      }
    };     
    
    // Recogiendo la data del HTML
    var myForm = document.getElementById("myForm");
    var formData = new FormData(myForm);

    // Enviando la data al PHP
    request.send(formData);
  }
</script>

<script type="text/javascript">
  $(document).ready(function(){
    $('#salvarpaciente').click(function(){
      var datos=$('#myForm').serialize();
      $.ajax({
        type:"POST",
        url:"salvarpaciente.php",
        data:datos,
        success:function(r){
          if(r==1){
            //  alert("agregado con exito");  
          } else{
            $("#tablapacientes").load('mostrardetallep.php');
          }
        }
      });
      return false;
    });
  });
</script>

<script type="text/javascript">
  $(function(){
    $('#fechan').on('change', calcularEdad);
  });

  function calcularEdad() {
    fecha = $(this).val();
    var hoy = new Date();
    var cumpleanos = new Date(fecha);
    var edad = hoy.getFullYear() - cumpleanos.getFullYear();
    var m = hoy.getMonth() - cumpleanos.getMonth();

    if (m < 0 || (m === 0 && hoy.getDate() < cumpleanos.getDate())) {
        edad--;
    }
    
    $('#edad').val(edad);
  }
</script>

<script type="text/javascript">
  $("#vaciarcampos").on("click", function() {
    // Cancelar comportamiento normal del botón
    event.preventDefault();
    $('#paciente').val('');
    $('#fechan').val('');
    $('#tipodocumento').val('0');
    $('#edad').val('');
    $('#sexo').val('Sexo');
    $('#dir').val('');
    $('#telefono').val('');
    $('#paciente').val('');
    $('#fechan').val('');
    $('#correo').val('');
    $('#ocupacion').val('');
    $('#eps').val('');
    $('#dpto').val('0');
    $('#municipio').val('');
    $('#acudiente').val('');
    $('#direcciona').val('');
    $('#telefonoa').val('');
  });
</script>
