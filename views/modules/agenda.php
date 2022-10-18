<?php
  if(isset($_POST['salvaragenda'])){
    $usuario = new AgendaControlador();
    $usuario->RegistrarCitaControlador();
  }

  $fechahoy = date('Y-m-d');

  if($_GET['action'] == 'ageAct'){
    ?>
      <script>
          $(document).ready(function() {
            swal({
              title: 'TecnoStoria',
              text: "La Cita asignada ha sido actualizada con exito!",
              type: 'info',
              confirmButtonColor: '#3085d6',
              confirmButtonText: 'OK!'
            }).then((result) => {
            
            })
          });
      </script>
    <?php
  }
  
  $agenda = new AgendaControlador();
  $profesionales = $agenda->tablaAgenProControlador();
  $horas = $agenda->tablaHorasControlador();

  if(isset($_SESSION['usuario'])){
    include("header.php");
  }
  else{
    header('location:index.php');
  }
?>
  
<main class="container p-0">
  <script language="javascript" src="views/js/jquery-3.6.0.min.js"></script>
  <script>
    function mostrarInfo(){
      var url = "views/modules/proceso.php";                                      
      $.ajax({                        
        type: "POST",                 
        url: url,                    
        data: $("#myForm").serialize(),
        success: function(data){
          $('#datos').html(data);           
        }
      });
    }
  </script>

  <div class="p-2 mb-2 bg-primary text-white">Agenda Citas</div>
    <body onload="mostrarInfo();">
      <div class="container">
        <div class="row">
          <form id="myForm" method="POST">
            <div class="form-row">
              <div class="col-md-5 mb-4">
                <select class="custom-select mr-sm-2"  onchange="alerta();" name="profesional" id="profesional">
                  <option value="0">Seleccione Profesional:</option>
                  <?php
                    foreach($profesionales as $v){
                      echo '<option value="'.$v['nombre'].'">'.$v['nombre'].'</option>';
                    }
                  ?>
                </select>
              </div>  
              <div class="col-md-2 mb-4">
                <input type="text" name="docp" id="docp" class="form-control" value="Registro Medico" readonly>
              </div>
              <div class="col-md-2 mb-4">
                <input type="date" name="fecha" id="fecha" value="<?php echo $fechahoy = date('Y-m-d'); ?>"  class="form-control" placeholder="Fecha" onchange="mostrarInfo()">
              </div>
              <div class="col-md-3 mb-4">
                <select class="custom-select mr-sm-2"  name="hora" id="hora" >
                  <option value="0">Seleccione Hora:</option>
                    <?php
                      foreach ($horas as $h) {
                        echo '<option value="'.$h['hora'].'">'.$h['hora'].'</option>';
                      }
                    ?>
                </select>
              </div>  
              <div class="col-md-3 mb-4">
                <input type="text" name="cedula" id="cedula" class="form-control" onblur="alertap()" placeholder="Cedula" autofocus>
              </div>
              <div class="col-md-4 mb-4">
                <input type="text" name="paciente" id="paciente" class="form-control" placeholder="Paciente" autofocus readonly>
              </div> 
              <div class="col-md-2 mb-4">
                <input type="text" name="telefono" id="telefono" class="form-control" placeholder="Telefono" autofocus readonly>
              </div>
              <div class="col-md-3 mb-4">
                <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Preference</label>
                <select class="custom-select mr-sm-2" name="nivel" id="nivel">
                  <option selected value="0">Estado...</option>
                  <option value="Asignada">Asignada</option>
                  <option value="Cumplida">Cumplida</option>
                  <option value="Cancelada">Cancelada</option>
                  <option value="Incumplida">Incumplida</option>
                </select>
              </div>
              <div class="col-md-12 mb-4">
                <input type="text" name="obs" id="obs" class="form-control" placeholder="Observaciones" autofocus>
              </div>
            </div>
            <input type="submit" id="salvaragenda" name="salvaragenda" class="btn btn-primary mx-2" value="Grabar Cita">
          </form>
        </div>
      </div>
      <br>
      <div id="datos"></div>
    </div>
  </div>
</main>

<script src="views/js/agendapro.js"></script>
<script src="views/js/agendapac.js"></script>

<!-- FIN PHP INDEX SUPER PARAMETROS -->
