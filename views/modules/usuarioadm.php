<!-- INICIO PHP INDEXSPERUSUARIO -->
<?php
  
  if(isset($_POST['salvarusuario'])){
    $usuario = new UsuarioControlador();
    $usuario->registrarUsuarioAdmControlador();
  }

  if($_GET['action'] == 'usuadmok'){
    ?>
      <script LANGUAGE="javascript">
          $(document).ready(function() {
            swal({
              title: 'TecnoStoria',
              text: "El Usuario Administrador Ha Sido Grabado Correctamente!",
              type: 'success',
              confirmButtonColor: '#3085d6',
              confirmButtonText: 'OK!'
            }).then((result) => {
              
            })
          });
        </script>
    <?php
  } 

  $usuario = new UsuarioControlador();
  $datos = $usuario->tablaUsuariosAdmControlador();

  if(isset($_SESSION['usuario']) && $_SESSION['snivel'] == 1){
    include("header.php");
  }
  else{
    header('location:index.php');
  }
?>

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
          <form action="" method="POST" >
            <div class="form-group">
              <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre" value=""  onkeyup="javascript:this.value=this.value.toUpperCase();" autofocus autocomplete="off">
            </div>

            <div class="form-group">
              <input type="email" name="correo" id="correo" class="form-control" placeholder="ejemplo@mai.com" autofocus autocomplete="off">
            </div>
                        
            <div class="form-group">
              <input type="text" name="clave" id="clave" class="form-control" placeholder="Clave" id="inputPassword" autocomplete="off">
            </div>
          
            <div class="form-group">
              <input type="text" name="documento" id="documento" class="form-control" placeholder="Documento" autofocus autocomplete="off">
            </div>           
          
            <input type="submit" name="salvarusuario" class="btn btn-primary btn-block mb-2" value="Grabar Administrador">
          </form>
        </div>
      </div>
      <div class="col-md-8">
        <table class="table table-light">
          <thead>
            <tr class="table-primary">
              <th>Nombre</th>
              <th>Correo</th>
              <th>Eventos</th>
            </tr>
          </thead>
          <tbody>
            <?php
              foreach($datos as $v){
            ?>
              <tr>
                <td><?php echo $v['nombre'] ?></td>
                <td><?php echo $v['correo'] ?></td>
                <td>
                  <a href="index.php?action=delUserAdm&id=<?php echo $v['id'] ?>" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                </td>
              </tr>
          <?php }  ?>
          </tbody>
        </table>
      </div>
    </div>
  </main>

             <!-- FIN PHP INDEX SUPER USUARIO -->
