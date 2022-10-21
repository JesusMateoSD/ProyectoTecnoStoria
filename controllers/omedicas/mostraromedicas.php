   <head>
   <link rel="stylesheet" type="text/css" href="../cssjs/datatables.min.css"/>
   <script language="javascript" src="../cssjs/jquery-3.6.0.min.js"></script>
   <script type="text/javascript" src="../cssjs/datatables.min.js"></script>
   
   <script type="text/javascript">
     $(document).ready( function () {
    $('#tableom').DataTable();
    } );
   </script>

   </head>
   <table id="tableom" class="table table-hover">
        <thead >
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
          include('../db.php');
         
          $query = "SELECT * FROM tbl_omedicas ";
          $result_tasks = mysqli_query($mysqli, $query);    

          while($row = mysqli_fetch_assoc($result_tasks)) { ?>
          <tr>
           <td><?php echo $row['paciente']; ?></td>
           <td><?php echo $row['fecha']; ?></td>
           <td><?php echo $row['documento']; ?></td>
           <td><?php echo $row['edad']; ?></td>
           <td><?php echo $row['telefono']; ?></td>
           
           
            <td>
            <li id="<?php echo $row['id']?>" class="btn btn-danger" ><a href="#" class="deleteitem" ><i class="fas fa-trash-alt"></i></a></i>
            
            </td>
             <td>  
            <a href="omedicaspdf.php?id=<?php echo $row['id']?>" target="_blank" class="btn btn-outline-success">
                       <i class="fas fa-file-pdf"></i></a>
            </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>


        <script type="text/javascript">
        
        $(function() {
        $(".deleteitem").click(function(e) {
        e.preventDefault();
        var id = $(this).parent("li").attr("id");
        $.get("borraromedicas.php",{ id: id}).done(function(data) {
        if(data=="Error, insert query failed") {
        // dont delete from list
        alert("Failed to delete "+id);
        } else {
        //delete from list
        $("#"+id).remove();
        //alert("Deleted "+id);
        $("#tablaomedicas").load('mostraromedicas.php');
        }
        });
        });
        });
        //-->
        </script>

       
      

     
       