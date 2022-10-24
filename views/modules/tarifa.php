<?php 
 session_start();

  if(isset($_POST['salvartarifa'])){
    $TarifaR = new PagosControlador();
    $TarifaR->registrarTarifaControlador();
  }

  if($_GET['action'] == 'tarok'){
    ?>
      <script LANGUAGE="javascript">
          $(document).ready(function() {
            swal({
              title: 'TecnoStoria',
              text: "La Tarifa Ha Sido Grabado Correctamente!",
              type: 'success',
              confirmButtonColor: '#3085d6',
              confirmButtonText: 'OK!'
            }).then((result) => {
              
            })
          });
        </script>
    <?php
  }

  if($_SESSION['snivel'] != 1){
    header('location: index.php?action=inicio');
  }

  if(isset($_SESSION['usuario'])){
    include("header.php");
  }
  else{
    header('location:index.php');
  }

  $tarifa = new PagosControlador();
  $tTarifa = $tarifa->TablasTarifaControlador();
?>

<main class="container p-0">
   
   <div class="p-2 mb-2 bg-primary text-white">Crear Tarifa</div>
<hr>  
  <div class="row">
    <div class="col-md-4">
      <!-- ADD TASK FORM -->
      <div class="card card-body">
        <form method="POST" >
          <div class="form-group">
            <input type="text" onkeyup="javascript:this.value=this.value.toUpperCase();" name="producto" class="form-control" placeholder="Producto" autofocus autocomplete="off">
          </div>
            <div class="form-group">
            <input type="text" name="precio" class="form-control" placeholder="Precio Primario" autofocus autocomplete="off">
          </div>
                   
         <div class="form-group">
            <input type="text" name="precio1" class="form-control" placeholder="Precio Secundario" autofocus autocomplete="off">
          </div>
          
          <input type="submit" name="salvartarifa" class="btn btn-primary btn-block" value="GrabarTarifa">
        </form>
      </div>
    </div>
    <div class="col-md-8 bg-light p-2 mb-5">
      <table class="table table-hover m-0">
        <thead >
          <tr class="table-primary">
            <th>Producto</th>
            <th>Precio Primario</th>
            <th>Precio Secundario</th>
             <th>Opciones</th>
          </tr>
        </thead>
        <tbody>
          <?php
          // $query = "SELECT * FROM tbl_tarifa";
          // $result_tasks = mysqli_query($mysqli, $query);    

          // while($row = mysqli_fetch_assoc($result_tasks)) { 
          foreach($tTarifa as $row){?>
          <tr>
            <td><?php echo $row['producto']; ?></td>
            <td><?php echo $row['precio']; ?></td>
            <td><?php echo $row['precio1']; ?></td>
            <td>
             <!-- <a href="edittarifa.php?id=<?php echo $row['id']?>" class="btn btn-success">
                <i class="fas fa-marker"></i>
              </a>
                <a href="vertarifa.php?id=<?php echo $row['id']?>" class="btn btn-success">
                <i <i class="far fa-eye"></i></i> 
              </a> -->
              <a href="index.php?action=delTar&id=<?php echo $row['id']?>" class="btn btn-danger">
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