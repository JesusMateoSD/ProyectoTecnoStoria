   <head>
     <script type="text/javascript" src="views/js/tablaCInformado.js"></script>

   </head>
   <table id="tablecinformado" class="table table-hover">
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
        require_once('../../controllers/ConsInfControlador.php');
        require_once('../../models/ConsInfModelo.php');

        // $query = "SELECT * FROM tbl_cinformados ";
        // $result_tasks = mysqli_query($mysqli, $query);
        $CInformado = new ConsInfControlador();
        $tCI = $CInformado->tablaConsInfControlador();

        // while ($row = mysqli_fetch_assoc($result_tasks)) {
          foreach($tCI as $row){ ?>
         <tr>
           <td><?php echo $row['paciente']; ?></td>
           <td><?php echo $row['fecha']; ?></td>
           <td><?php echo $row['documento']; ?></td>
           <td><?php echo $row['edad']; ?></td>
           <td><?php echo $row['telefono']; ?></td>
           <td>
           <a href="index.php?action=delCI&id=<?php echo $row['id']?>" class="btn btn-danger">
              <i class="fas fa-trash-alt"></i>
            </a>
           </td>
           <td>
             <a href="index.php?action=cinformadospdf&id=<?php echo $row['id'] ?>" target="_blank" class="btn btn-outline-success">
               <i class="fas fa-file-pdf"></i></a>
           </td>
         </tr>
       <?php } ?>
     </tbody>
   </table>
