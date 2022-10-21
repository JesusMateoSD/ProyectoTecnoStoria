   <head>
     <script type="text/javascript" src="views/js/tablaRemision.js"></script>
   </head>
   <table id="tableremision" class="table table-hover">
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
         require_once('../../controllers/RemisionControlador.php');
         require_once('../../models/RemisionModelo.php');

        // $query = "SELECT * FROM tbl_remisiones";
        // $result_tasks = mysqli_query($mysqli, $query);

        $Remision = new RemisionControlador();
        $tRemision = $Remision->TablaRemisionControlador();

        // while ($row = mysqli_fetch_assoc($result_tasks)) { 
          foreach($tRemision as $row){ ?>
         <tr>
           <td><?php echo $row['paciente']; ?></td>
           <td><?php echo $row['fecha']; ?></td>
           <td><?php echo $row['documento']; ?></td>
           <td><?php echo $row['edad']; ?></td>
           <td><?php echo $row['telefono']; ?></td>
           <td>
            <a href="index.php?action=delRemision&id=<?php echo $row['id']?>" class="btn btn-danger">
              <i class="fas fa-trash-alt"></i>
            </a>
           </td>
           <td>
             <a href="remisionpdf.php?id=<?php echo $row['id'] ?>" target="_blank" class="btn btn-outline-success">
               <i class="fas fa-file-pdf"></i></a>
           </td>
         </tr>
       <?php } ?>
     </tbody>
   </table>