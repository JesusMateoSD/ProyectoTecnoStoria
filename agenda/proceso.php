<?php
  session_start();
  include('../db.php');
  date_default_timezone_set('America/Bogota'); 
  $fechahoy = $_POST['fecha'];
?>
<script language="javascript" src="../cssjs/jquery-3.1.1.min.js"></script>
  <div class="col-md-12">
    <table class="table table-hover" style="font-size:90%;">
      <thead>
        <tr class="table-primary">
          <th>Hora</th>
          <th>Fecha</th>
          <th>Cedula</th>
          <th>Paciente</th>
          <th>Estado</th>
          <th>Obsevaciones</th>
          <th>Borrar</th>
          <?php if ($_SESSION['snivel'] == 1 OR $_SESSION['snivel'] == 2) { ?>
            <th>HC</th>
          <?php } ?>
        </tr>
      </thead>
    <tbody>  
    <?php 
      $queryh = "SELECT * FROM tbl_horas H LEFT JOIN tbl_agenda A ON H.hora=A.horag AND A.fecha = '".$fechahoy."'";
      $result_tasks = mysqli_query($mysqli, $queryh); 
    
      $queryb = "DELETE FROM tbl_agendap";
      $resultb = mysqli_query($mysqli, $queryb); 

      while($rowt = mysqli_fetch_array($result_tasks)) { 

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

        $queryi = "INSERT INTO tbl_agendap(idh,hora,id,fecha,hora1,nprofesional,dprofesional,npaciente,dpaciente,tpaciente,estado,obs) VALUES ('$idh', '$hora', '$idag', '$fecha','$horag','$nprofesional','$dprofesional','$npaciente','$dpaciente','$tpaciente','$estado','$obs')";
        $resulti = mysqli_query($mysqli, $queryi);  

      } 

      $queryap = "SELECT hora,id,fecha,nprofesional,dpaciente,npaciente,tpaciente,estado,obs FROM tbl_agendap ORDER BY idh ASC";
      $resultap= mysqli_query($mysqli, $queryap); 

      while($row = mysqli_fetch_assoc($resultap)) { ?>
      <tr>
        <td><?php echo $row['hora']; ?></td>
        <td><?php echo $row['fecha']; ?></td>
        <td><?php echo $row['dpaciente']; ?></td>
        <td><?php echo $row['npaciente']; ?></td>
        <td><?php echo $row['estado']; ?></td>
        <td><?php echo $row['obs']; ?></td> 
        <td>
          <a href="editpagenda.php?id=<?php echo $row['id']?>" class="btn btn-success">
            <i class="fas fa-edit"></i>
          </a>
          <li id="<?php echo $row['id']?>" class="btn btn-danger" ><a href="#" class="deleteitem" style="color: #FFF;"><i class="fas fa-trash-alt"></i></a></li>
        </td> 
        <?php if ($_SESSION['snivel'] == 1 OR $_SESSION['snivel'] == 2) { ?>
          <td>
            <a href="../hclinica/indexhclinica.php?id=<?php echo $row['dpaciente']?>" class="btn btn-primary">
              <i  class="fas fa-edit"></i>
            </a>
          </td>
        <?php } ?>
      </tr>
        <?php } 
          // }
        ?>
    </tbody>
  </table>
</div>


<script type="text/javascript">
  $(function() {
    $(".deleteitem").click(function(e) {
      e.preventDefault();
      var id = $(this).parent("li").attr("id");
      $.get("borrarcita.php",{ id: id}).done(function(data) {
        if(data=="Error, insert query failed") {
          // dont delete from list
          alert("Failed to delete "+id);
        } else {
          //delete from list
          $("#"+id).remove();
          mostrarInfo();
        }
      });
    });
  });
</script>



           
            
            

            


          