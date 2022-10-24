<?php 
 session_start();

 if(isset($_POST['salvarmodeloc'])){
    $HClinicaS = new ConsInfControlador();
    $HClinicaS->registrarModeloCControlador();
  }

  if($_GET['action'] == 'modcok'){
    ?>
      <script>
          $(document).ready(function() {
            swal({
              title: 'TecnoStoria',
              text: "El modelo consentimiento ha sido creada con exito",
              type: 'success',
              confirmButtonColor: '#3085d6',
              confirmButtonText: 'OK!'
            }).then((result) => {
            
            })
          });
      </script>
    <?php
  }                  

  $CInformados = new ConsInfControlador();
  $tModelC = $CInformados->TablaModeloCControlador();

  if(isset($_SESSION['usuario'])){
    include("header.php");
  } else{
    header('location:index.php');
  }
?>

<main class="container">
  <head>
     <script type="text/javascript" src="views/js/mostrarMC.js"></script>
   </head>

   <div class="p-2 mb-2 bg-primary text-white">Crear Modelo Consentimiento Informado</div>
   <hr>  
    <form method="POST" >
       <div class="form-row">
      <div class="col-md-12 mb-2">
        <input type="text"   onkeyup="javascript:this.value=this.value.toUpperCase();" name="nombre" class="form-control" placeholder="Nombre" autofocus autocomplete="off">
      
      </div>
       <div class="col-md-12 mb-2">
          <textarea class="form-control rounded-0" name="modelo" id="modelo"  placeholder="Modelo" rows="4"></textarea>
      </div>

      </div> 
       <div class="col-md-4 mb-2">
        <input type="submit" name="salvarmodeloc" class="btn btn-primary btn-block" value="Grabar Modelo Consentimiento">
         </div> 
    </form>
   
    <div class="bg-light p-2 mb-2">
     <br>
      <table id="tablecm" class="table table-hover">
        <thead >
          <tr class="table-primary">
            <th>ID</th>
            <th>Nombre</th>
             <th>Borrar Modelo</th>
          </tr>
        </thead>
        <tbody>

          <?php
          // $query = "SELECT * FROM tbl_modeloc";
          // $result_tasks = mysqli_query($mysqli, $query);    

          // while($row = mysqli_fetch_assoc($result_tasks)) { 
          foreach($tModelC as $row){?>
          <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['nombre']; ?></td>
            <td>
             <!-- <a href="editusuario.php?id=<?php echo $row['id']?>" class="btn btn-success">
                <i class="fas fa-marker"></i>
              </a>
                      <a href="verusuario.php?id=<?php echo $row['id']?>" class="btn btn-success">
                <i <i class="far fa-eye"></i></i> 
              </a> -->
              <a href="index.php?action=delModC&id=<?php echo $row['id']?>" class="btn btn-danger">
                <i class="fas fa-trash-alt"></i>
              </a>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
</main>