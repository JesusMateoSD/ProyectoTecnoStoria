<?php
  session_start();
  date_default_timezone_set('America/Bogota'); 
  $fechahoy = $_POST['fecha']; 
  require_once('../../controllers/AgendaControlador.php');
  require_once('../../models/AgendaModelo.php');
?>

<div class="col-md-12">
  <table class="table table-hover table-light" style="font-size:90%;">
    <thead>
      <tr class="table-primary">
        <th>Hora</th>
        <th>Fecha</th>
        <th>Cedula</th>
        <th>Paciente</th>
        <th>Estado</th>
        <th>Obsevaciones</th>
        <th>Acciones</th>
          <?php if ($_SESSION['snivel'] == 1 OR $_SESSION['snivel'] == 2) { ?>
        <th>HC</th>
        <?php } ?>
      </tr>
    </thead>
    <tbody>  
      <?php 
        $proceso = new AgendaControlador();
        $procesoSH = $proceso->UnionAgendaControlador($fechahoy);
        $procesoD = $proceso->LimpiarAgendaPControlador();

        // $queryh = "SELECT * FROM tbl_horas H LEFT JOIN tbl_agenda A ON H.hora=A.horag AND A.fecha = '".$fechahoy."'";
        // $result_tasks = mysqli_query($mysqli, $queryh); 
      
        // $queryb = "DELETE FROM tbl_agendap";
        // $resultb = mysqli_query($mysqli, $queryb); 
        
        //while($rowt = mysqli_fetch_array($result_tasks)) {
        foreach($procesoSH as $rowt){ 
          $idh = $rowt['idh']; 
          $hora = $rowt['hora']; 
          $idag = $rowt['id']; 
          $fecha = $rowt['fecha']; 
          $horag = $rowt['horag'];
          $nprofesional = $rowt['nprofesional'];  
          $dprofesional = $rowt['dprofesional']; 
          $npaciente = $rowt['npaciente']; 
          $dpaciente = $rowt['dpaciente']; 
          $tpaciente = $rowt['tpaciente']; 
          $estado = $rowt['estado']; 
          $obs = $rowt['obs'];

          $Cita = ['idh' => $idh,'hora' => $hora,'idag' => $idag,'fecha' => $fecha,'horag' => $horag,'nprofesional' => $nprofesional,'dprofesional' => $dprofesional,'npaciente' => $npaciente,'dpaciente' => $dpaciente,'tpaciente' => $tpaciente,'estado' => $estado,'obs' => $obs];

          $procesoI = $proceso->InsertarFechaAgendaPControlador($Cita);
          // $queryi = "INSERT INTO tbl_agendap(idh,hora,id,fecha,hora1,nprofesional,dprofesional,npaciente,dpaciente,tpaciente,estado,obs) VALUES ('$idh', '$hora', '$idag', '$fecha','$horag','$nprofesional','$dprofesional','$npaciente','$dpaciente','$tpaciente','$estado','$obs')";
          // $resulti = mysqli_query($mysqli, $queryi);  

        } 

        $procesoF = new AgendaControlador();
        $procesoSP = $proceso->TablaAgendaControlador();
        // $queryap = "SELECT hora,id,fecha,nprofesional,dpaciente,npaciente,tpaciente,estado,obs FROM tbl_agendap ORDER BY idh ASC";
        // $resultap= mysqli_query($mysqli, $queryap); 

        //while($row = mysqli_fetch_assoc($resultap)) { 
        foreach($procesoSP as $row){ ?>
          <tr>
            <td><?php echo $row['hora']; ?></td>
            <td><?php echo $row['fecha']; ?></td>
            <td><?php echo $row['dpaciente']; ?></td>
            <td><?php echo $row['npaciente']; ?></td>
            <td><?php echo $row['estado']; ?></td>
            <td><?php echo $row['obs']; ?></td>

            <td>
              <a href="index.php?action=editAge&id=<?php echo $row['id']?>" class="btn btn-success">
                <i class="fas fa-edit"></i>
              </a>
              <li id="<?php echo $row['id']?>" class="btn btn-danger" ><a href="index.php?action=delCita&id=<?php echo $row['id']?>" style="color: #FFF;"><i class="fas fa-trash-alt"></i></a></li>
            </td>
            <?php if ($_SESSION['snivel'] == 1 OR $_SESSION['snivel'] == 2) { ?>
            <td>
              <a href="index.php?action=indexhclinicaAge&idp=<?php echo $row['dpaciente']?>" class="btn btn-primary">
                <i class="fas fa-edit"></i>
              </a>
            <?php } ?>
          </td>
        </tr>
      <?php } 
        // }
      ?>
    </tbody>
  </table>
</div>          