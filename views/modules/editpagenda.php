<?php

  if(isset($_POST['update'])){
    $agendaU = new AgendaControlador();
    $agendaAct = $agendaU->editarAgendaControlador($_GET['id']);
    
    // $query = "UPDATE tbl_agenda set fecha = '$fecha', horag = '$hora', nprofesional = '$profesional', dprofesional = '$docp', npaciente = '$paciente', dpaciente = '$cedula' , tpaciente = '$telefono', estado = '$nivel', obs = '$obs' WHERE id=$id";
    // mysqli_query($mysqli, $query);
?>
  <script>
    $(document).ready(function() {
      swal({
        title: 'Medicina Web!',
        text: "La Agenda Ha Sido Actualizada con exito!",
        type: 'success',
        confirmButtonColor: '#3085d6',
        confirmButtonText: 'OK!'
      }).then((result) => {

      })
    });
  </script>
<?php
}

    // if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $agenda = new AgendaControlador();
    $consulta = $agenda->consultarCitaAgendaControlador($id);
    // $query = "SELECT * FROM tbl_agenda WHERE id = '".$id."'";
    // $result = mysqli_query($mysqli,$query);

    // if (mysqli_num_rows($result) == 1) {
      // $row = mysqli_fetch_array($result);
    foreach($consulta as $row){
      $horag = $row['horag'];
      $fecha =  $row['fecha'];
      $dpaciente = $row['dpaciente'];
      $npaciente = $row['npaciente'];
      $tpaciente = $row['tpaciente'];
      $estado = $row['estado'];
      $obs = $row['obs'];
      $nprofesional = $row['nprofesional'];
      $dprofesional = $row['dprofesional'];
    }
    // }
  // }
  
  $agenda = new AgendaControlador();
  $profesionales = $agenda->tablaAgenProControlador();
  
  $Hora = new HoraControlador();
  $horas = $Hora->tablaHorasControlador();

  if(isset($_SESSION['usuario'])){
    include("header.php");
  }
  else{
    header('location:index.php');
  }
?>

<div class="container">
  <div class="row"> 
    <form id="myForm" method="POST" >
      <div class="p-2 mb-2 bg-success text-white">Actualizar  Agenda</div>
      <br>
      <div class="form-row">
        <div class="col-md-5 mb-4">
          <label>Nombre del Medico</label>
          <!-- En el select habia un onchange="alerta();" -->
          <select class="custom-select mr-sm-2" name="profesional" id="profesional" >
            <option value="<?php echo $nprofesional; ?>" selected><?php echo $nprofesional; ?></option>
              <?php
                foreach($profesionales as $v){
                  if(!$v['nombre'] == $nprofesional){
                    echo '<option value="'.$v['nombre'].'">'.$v['nombre'].'</option>';
                  }
                }
              ?>
          </select>
        </div>  
        <div class="col-md-2 mb-4">
          <label>Registro Medico</label>
          <input type="text" name="docp" id="docp"   class="form-control"  value="<?php echo $dprofesional; ?>" readonly>
        </div>
        <div class="col-md-2 mb-4">
          <label>Fecha de la cita</label>
          <input type="date" name="fecha" id="fecha" class="form-control" placeholder="Fecha"  value="<?php echo $fecha; ?>" autofocus>
        </div>          
        <div class="col-md-3 mb-4">
          <label>Hora de la Cita</label>
          <select class="custom-select mr-sm-2"  name="hora" id="hora" >
            <option value="<?php echo $horag; ?>" selected><?php echo $horag; ?></option>
              <?php
                foreach ($horas as $h) {
                  echo '<option value="'.$h['hora'].'">'.$h['hora'].'</option>';
                }
              ?>
          </select>
        </div>  
        <div class="col-md-3 mb-4">
          <label>Cedula del Paciente</label>
          <input type="text" name="cedula" id="cedula" class="form-control" placeholder="Cedula" value="<?php echo $dpaciente; ?>" autofocus>
        </div>
        <div class="col-md-4 mb-4">
          <label>Nombre del Paciente</label>
          <input type="text" name="paciente" id="paciente" class="form-control" placeholder="Paciente" value="<?php echo $npaciente; ?>"autofocus>
        </div>  
        <div class="col-md-2 mb-4">
          <label>Telefono del Paciente</label>
          <input type="text" name="telefono" id="telefono" class="form-control" placeholder="Telefono" value="<?php echo $tpaciente; ?>" autofocus>
        </div>
        <div class="col-md-3 mb-4">
          <label>Estado de la Cita</label>
          <select class="custom-select mr-sm-2" name="nivel" id="nivel"  >
            <option selected value="<?php echo $estado; ?>"><?php echo $estado; ?></option>
            <option value="Asignada">Asignada</option>
            <option value="Cumplida">Cumplida</option>
            <option value="Cancelada">Cancelada</option>
            <option value="Incumplida">Incumplida</option>
          </select>
        </div>
        <div class="col-md-12 mb-4">
        <label>Observaciones</label>
          <input type="text" name="obs" id="obs" class="form-control" placeholder="Observaciones" value="<?php echo $obs; ?>" autofocus>
        </div>
      </div>
    </div>
    <div class="col-md-4 mb-4 mx-auto">
      <input type="submit" name="update" class="btn btn-success btn-block" value="Actualizar Agenda">
    </div>
  </form>
</div>

<?php ob_end_flush();?>