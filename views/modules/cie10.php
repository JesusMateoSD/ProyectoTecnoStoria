<?php 
 session_start();

  if(isset($_POST['salvarcie10'])){
    $TarifaR = new EvMedicaControlador();
    $TarifaR->registrarCIE10Controlador();
  }

  if($_GET['action'] == 'cie10ok'){
    ?>
      <script LANGUAGE="javascript">
          $(document).ready(function() {
            swal({
              title: 'TecnoStoria',
              text: "La enfermedad Ha Sido Grabado Correctamente!",
              type: 'success',
              confirmButtonColor: '#3085d6',
              confirmButtonText: 'OK!'
            }).then((result) => {
              
            })
          });
        </script>
    <?php
  }

  $CIE10 = new EvMedicaControlador();
  $tCIE10 = $CIE10->TablaCIE10Controlador();

  if(isset($_SESSION['usuario'])){
    include("header.php");
  }
  else{
    header('location:index.php');
  }
?>

<head>
   <script type="text/javascript" src="views/js/tablaCIE10.js"></script>
 </head>
<main class="container p-0">
   <div class="p-2 mb-2 bg-primary text-white">Crear CIE10</div>
  <hr>  
  <div class="row">
    <div class="col-md-4">
      
      <!-- ADD TASK FORM -->
      <div class="card card-body">
       
        <form method="POST" >
          <div class="form-group">
            <input type="text"  onkeyup="javascript:this.value=this.value.toUpperCase();" name="codigo" class="form-control" placeholder="Codigo" autofocus autocomplete="off">
          </div>
            <div class="form-group">
            <input type="text" name="nombre" class="form-control" placeholder="Nombre" autofocus autocomplete="off">
          </div>
          
          <input type="submit" name="salvarcie10" class="btn btn-primary btn-block" value="Grabar CIE10">
        </form> 
      </div>
    </div>
    <br>
    <div class="col-md-8 bg-light p-2 mb-5">
      <table id="tablecie10" class="table table-hover">
        <thead >
          <tr class="table-primary">
            <th>Codigo</th>
            <th>Nombre</th>
            <th>Opciones</th>
          </tr>
        </thead>
        <tbody>
          <?php
          // $query = "SELECT * FROM tbl_cie10";
          // $result_tasks = mysqli_query($mysqli, $query);    

          // while($row = mysqli_fetch_assoc($result_tasks)) { 
          foreach($tCIE10 as $row){ ?>
          <tr>
            <td><?php echo $row['codigo']; ?></td>
            <td><?php echo $row['nombre']; ?></td>  
            <td>
              <a href="index.php?action=delCIE&id=<?php echo $row['id']?>" class="btn btn-danger">
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
