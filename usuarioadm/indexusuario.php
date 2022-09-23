<!-- INICIO PHP INDEXSPERUSUARIO -->
            	                    
<?php 
  session_start();                  
  include("../db.php"); 
  include('../header/header.php');

  if($_SESSION['snivel'] != 1){
    header('Location: ../inicio/inicio.php');
  }
?>

<link rel="stylesheet" href="../css/subirarchivo.css">
<main class="container p-0">   
  <div class="p-2 mb-2 bg-primary text-white">Crear Administrador</div>
    <hr>  
    <div class="row">
      <div class="col-md-4">
        <!-- MESSAGES --> 
        <?php if (isset($_SESSION['message'])) { ?>
        <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
          <?= $_SESSION['message']?>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <?php unset($_SESSION["message"]); } ?>

        <!-- ADD TASK FORM -->
        <div class="card card-body">
          <form action="salvarusuario.php" method="POST" >
            <div class="form-group">
              <input type="text" name="nombre" class="form-control" placeholder="Nombre" value=""  onkeyup="javascript:this.value=this.value.toUpperCase();"autofocus autocomplete="off">
            </div>

            <div class="form-group">
              <input type="email" name="correo" class="form-control" placeholder="ejemplo@mai.com" autofocus autocomplete="off">
            </div>
                        
            <div class="form-group">
              <input type="text" name="clave" class="form-control" placeholder="Clave" id="inputPassword" autocomplete="off">
            </div>
          
            <div class="form-group">
              <input type="text" name="documento" class="form-control" placeholder="Documento" autofocus autocomplete="off">
            </div>           
          
            <input type="submit" name="salvarusuario" class="btn btn-primary btn-block" value="Grabar Administrador">
          </form>
        </div>
      </div>
      <div class="col-md-8">
        <table class="table table-hover">
          <thead>
            <tr class="table-primary">
              <th>Nombre</th>
              <th>Correo</th>
              <th>Eventos</th>
            </tr>
          </thead>
          <tbody>
            <?php
              $query = "SELECT * FROM tbl_usuarios WHERE nivel = 1";
              $result_tasks = mysqli_query($mysqli, $query);    

              while($row = mysqli_fetch_assoc($result_tasks)) { ?>
                <tr>
                  <td><?php echo $row['nombre']; ?></td>
                  <td><?php echo $row['correo']; ?></td>
                  <td>
                  <!-- <a href="editusuario.php?id=<?php echo $row['id']?>" class="btn btn-success">
                      <i class="fas fa-marker"></i>
                    </a>
                            <a href="verusuario.php?id=<?php echo $row['id']?>" class="btn btn-success">
                      <i class="far fa-eye"></i>
                    </a> -->
                    <a href="borrarusuario.php?id=<?php echo $row['id']?>" class="btn btn-danger">
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
<script src="../js/custom-file-input.js"></script>

             <!-- FIN PHP INDEX SUPER USUARIO -->
