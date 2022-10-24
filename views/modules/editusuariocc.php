<?php 
  $title = '';
  $description= '';

  if(isset($_GET['id'])) {
    $id = $_GET['id'];

    $Usuario = new UsuarioControlador();
    $tUsuarioCC = $Usuario->UsuarioClaveControlador($id);

    // $query = "SELECT * FROM tbl_usuarios WHERE id=$id";
    // $result = mysqli_query($mysqli, $query);
    // if (mysqli_num_rows($result) == 1) {
    foreach($tUsuarioCC as $row){
      // $row = mysqli_fetch_array($result);
      $nombre = $row['nombre'];
      $correo = $row['correo'];
    }
  }

if(isset($_POST['update'])){
  $id = $_GET['id'];
  $Usuario = new UsuarioControlador();
  $ClaveU = $Usuario->CambiarClaveControlador($id);
  
  // $nombre= $_POST['nombre'];
  // $correo = $_POST['correo'];
  // $pass = $_POST['clave'];    
  // $passHash = password_hash($pass, PASSWORD_BCRYPT);
  
  // $query = "UPDATE tbl_usuarios set  clave = '$passHash' WHERE id=$id";
  // mysqli_query($mysqli, $query);

  //cambio de clave envio correo
  // $to = $correo;
  // $subject = "Cambio Clave Programa Medicina";
  // $message = "Clave Actualizada Correctamente en el Programa Medicina La Nueva Clave es ".$pass;
  // mail($to, $subject, $message);

  ?>
  <script LANGUAGE="javascript">
  $(document).ready(function() {

    swal({
      title: 'Medicina Web!',
      text: "La Clave Ha Sido Cambiada Correctamente!",
      type: 'success',
      confirmButtonColor: '#3085d6',
      confirmButtonText: 'OK!'
    }).then((result) => {
      if (result.value) {
        window.location.href = "indexusuariocc.php";
      }
    })

  });
</script>
<?php

  //$_SESSION['message'] = 'Clave Actualizada Correctamente';
  //$_SESSION['message_type'] = 'warning';
  //header('Location: indexusuariocc.php');
}

  if(isset($_SESSION['usuario'])){
    include("header.php");
  }
  else{
    header('location:index.php');
  }
 ?>

<main class="container my-5 p-3 bg-light">
  <div class="row px-3 d-block"> 
    <form method="POST">
  		<p class="p-2 mb-2 bg-primary text-white">Actualizar Clave Usuario</p>
      <br>
  	  <div class="form-row">
  	    <div class="col-md-4 mb-4">
          <label for="validationCustom02">Nombre</label>
          <input type="text" name="nombre" class="form-control" id="validationCustom02"  value="<?php echo $nombre; ?>" readonly="readonly">
        </div>

  	    <div class="col-md-4 mb-4">
          <label for="validationCustom02">Correo</label>
          <input type="text" name="correo" class="form-control" id="validationCustom02" value="<?php echo $correo; ?>" readonly="readonly">
        </div>

    	  <div class="col-md-4 mb-4">
          <label for="validationCustom02">Clave</label>
          <input type="password"name="clave" class="form-control" id="validationCustom02"  required>
        </div>
      </div>
    </div>

    <div class="row px-3 mx-auto">
  	  <div class="mx-auto col-md-4 mb-4">
  	    <input type="submit" name="update" class="btn btn-primary btn-block" value="Actualizar Clave">
      </div>

      <div class="mx-auto col-md-4 mb-4">
        <input onClick=" window.location.href='indexusuariocc.php'" class="btn btn-success btn-block" value="Cancelar">
      </div>
    </div>
  </form>
</main>






