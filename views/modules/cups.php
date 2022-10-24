<?php 
  session_start();

  if(isset($_POST['salvarcups'])){
    $TarifaR = new EvMedicaControlador();
    $TarifaR->registrarCUPSControlador();
  }

  if($_GET['action'] == 'cupsok'){
    ?>
      <script LANGUAGE="javascript">
          $(document).ready(function() {
            swal({
              title: 'TecnoStoria',
              text: "El procedimiento medico ha Sido Grabado Correctamente!",
              type: 'success',
              confirmButtonColor: '#3085d6',
              confirmButtonText: 'OK!'
            }).then((result) => {
              
            })
          });
        </script>
    <?php
  }

  $CUPS = new EvMedicaControlador();
  $tCUPS = $CUPS->TablaCUPSControlador();

  if(isset($_SESSION['usuario'])){
    include("header.php");
  }
  else{
    header('location:index.php');
  }
?>

<head>
   <script type="text/javascript" src="views/js/tablaCUPS.js"></script>
 </head>
<main class="container p-0">
   
   <div class="p-2 mb-2 bg-primary text-white">Crear CUPS</div>
<hr>  
  <div class="row">
    <div class="col-md-4">
      <!-- ADD TASK FORM -->
      <div class="card card-body">
        <form method="POST" >
          <div class="form-group">
            <input type="text" onkeyup="javascript:this.value=this.value.toUpperCase();" name="codigo" class="form-control" placeholder="Codigo" autofocus autocomplete="off">
          </div>
            <div class="form-group">
            <input type="text" name="nombre" class="form-control" placeholder="Nombre" autofocus autocomplete="off">
          </div>
          <input type="submit" name="salvarcups" class="btn btn-primary btn-block" value="Grabar CUPS">
        </form> 
      </div>
    </div>
    <br>
    <div class="col-md-8 bg-light p-2 mb-5">
      <table id="tablecups" class="table table-hover">
        <thead >
          <tr class="table-primary">
            <th>Codigo</th>
            <th>Nombre</th>
            <th>Opciones</th>
          </tr>
        </thead>
        <tbody>
          <?php
          // $query = "SELECT * FROM tbl_cups";
          // $result_tasks = mysqli_query($mysqli, $query);    

          // while($row = mysqli_fetch_assoc($result_tasks)) { 
          foreach($tCUPS as $row){?>
          <tr>
            <td><?php echo $row['codigo']; ?></td>
            <td><?php echo $row['nombre']; ?></td>
            <td>
              <a href="index.php?action=delCUPS&id=<?php echo $row['id']?>" class="btn btn-danger">
                <i class="fas fa-trash-alt"></i>
              </a>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</main>

             <!-- FIN PHP INDEX SUPER USUARIO -->
