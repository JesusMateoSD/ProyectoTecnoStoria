<?php 
  session_start();

  if($_GET['action'] == 'usuccok'){
    ?>
      <script>
          $(document).ready(function() {
            swal({
              title: 'TecnoStoria',
              text: "La Clave Ha Sido Actualizada con exito!",
              type: 'info',
              confirmButtonColor: '#3085d6',
              confirmButtonText: 'OK!'
            }).then((result) => {
            
            })
          });
      </script>
    <?php
  }

  if(isset($_SESSION['usuario'])){
    include("header.php");
  } else{
    header('location:index.php?action=login');
  }

  $usuario = new UsuarioControlador();
  $tUsuarioCC = $usuario->TablaUsuarioClaveControlador($_SESSION['scorreo']);
?>

<main class="container py-5 mt-5 bg-light">
  <div class="p-2 mb-2 bg-success text-white">Cambio Clave Usuario</div>
  <hr>  
  <div class="row">
    <div class="col-md-12">
      <table class="table table-hover">
        <thead >
          <tr class="table-primary">
            <th>ID</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Nivel</th>
            <th>Cambiar</th>
          </tr>
        </thead>
        <tbody>
          <?php
          // $query = "SELECT * FROM tbl_usuarios WHERE correo = '".$_SESSION['scorreo']."'";
          // $result_tasks = mysqli_query($mysqli, $query);    

          // while($row = mysqli_fetch_assoc($result_tasks)) {?>
          <tr>
            <td><?php echo $tUsuarioCC['id']; ?></td>
            <td><?php echo $tUsuarioCC['nombre']; ?></td>
            <td><?php echo $tUsuarioCC['correo']; ?></td>
            <td><?php echo $tUsuarioCC['nivel']; ?></td>
           
            <td>
             <a href="index.php?action=editUsu&id=<?php echo $tUsuarioCC['id']?>" class="btn btn-success">
                <i class="fas fa-edit"></i>
              </a>
            </td>
          </tr>
          <?php //} ?>
        </tbody>
      </table>
    </div>
    <div class="col-md-12 mb-2">
      <div class="p-2 mb-2 bg-success"></div>
    </div>
  </div>
</main>

             <!-- FIN PHP INDEX SUPER USUARIO -->
