  <head>
    <script type="text/javascript" src="views/js/tablaRecetario.js"></script>
  </head>
  <table id="tablerecetario" class="table table-hover">
    <thead>
      <tr class="table-primary">
        <th>Paciente</th>
        <th>Fecha</th>
        <th>Documento</th>
        <th>Edad</th>
        <th>Telefono</th>
        <th>Borrar</th>
        <th>Ver</th>
      </tr>
    </thead>
    <tbody>
      <?php
        require_once('../../controllers/RecetarioControlador.php');
        require_once('../../models/RecetarioModelo.php');

      // $query = "SELECT * FROM tbl_recetario";
      // $result_tasks = mysqli_query($mysqli, $query);
      $Recetario = new RecetarioControlador();
      $tRecetario = $Recetario->TablaRecetarioControlador();

      // while ($row = mysqli_fetch_assoc($result_tasks)) {
        foreach($tRecetario as $row){ ?>
        <tr>
          <td><?php echo $row['paciente']; ?></td>
          <td><?php echo $row['fecha']; ?></td>
          <td><?php echo $row['documento']; ?></td>
          <td><?php echo $row['edad']; ?></td>
          <td><?php echo $row['telefono']; ?></td>
          <td>
            <a href="index.php?action=delRece&id=<?php echo $row['id']?>" class="btn btn-danger">
              <i class="fas fa-trash-alt"></i>
            </a>
          </td>
          <td>
            <a href="index.php?action=recetariopdf&id=<?php echo $row['id'] ?>" target="_blank" class="btn btn-outline-success">
              <i class="fas fa-file-pdf"></i></a>
          </td>
        </tr>
      <?php } ?>
    </tbody>
  </table>

<!-- 
  <script type="text/javascript">
    $(function() {
      $(".deleteitem").click(function(e) {
        e.preventDefault();
        var id = $(this).parent("li").attr("id");
        $.get("borrarrecetario.php", {
          id: id
        }).done(function(data) {
          if (data == "Error, insert query failed") {
            // dont delete from list
            alert("Failed to delete " + id);
          } else {
            //delete from list
            $("#" + id).remove();
            //alert("Deleted "+id);
            $("#tablarecetario").load('mostrarrecetario.php');
          }
        });
      });
    });
    
  </script> -->