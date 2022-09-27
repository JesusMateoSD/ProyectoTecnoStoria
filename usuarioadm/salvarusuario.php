<link href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.8.0/sweetalert2.min.css" rel="stylesheet" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.8.0/sweetalert2.min.js"></script>

<?php

include('../db.php');

if (isset($_POST['salvarusuario'])) {
  $nombre = $_POST['nombre'];
  $correo = $_POST['correo'];
  $documento = $_POST['documento'];
  
  $pass = $_POST['clave'];    
  $passHash = password_hash($pass, PASSWORD_BCRYPT);
    
  $total = mysqli_num_rows(mysqli_query($mysqli,"SELECT * FROM tbl_usuarios WHERE correo='$correo'"));

  if($total==0){
  
    $query = "INSERT INTO tbl_usuarios(nombre, correo,clave,nivel,documento) VALUES ('$nombre', '$correo', '$passHash', '1','$documento')";
    $result = mysqli_query($mysqli, $query);
    
    $tarea = "Creado Usuario Administrador";
    
    if(!$result) {
      die("Query Fallo.");
    }

  ?>

  <script LANGUAGE="javascript">
    $(document).ready(function() {
      swal({
        title: 'Factura Web!',
        text: "El Administrador Ha Sido Grabado Correctamente!",
        type: 'success',
        confirmButtonColor: '#3085d6',
        confirmButtonText: 'OK!'
      }).then((result) => {
        if (result.value) {
          window.location.href = "indexusuario.php";
        }
      })
    });
  </script>
<?php

  // $_SESSION['message'] = 'Usuario Grabado Correctamente';
  //  $_SESSION['message_type'] = 'success';
  // header('Location: indexusuario.php');

  }else{

?>

  <script LANGUAGE="javascript">
    $(document).ready(function() {

      swal({
        title: 'Factura Web!',
        text: "El Administrador NO Ha Sido Grabado Correo Ya Existe Con Otro  Usuario!",
        type: 'error',
        confirmButtonColor: '#3085d6',
        confirmButtonText: 'OK!'
      }).then((result) => {
        if (result.value) {
          window.location.href = "indexusuario.php";
        }
      })

    });
  </script>
<?php
  //  $_SESSION['message'] = 'Correo Ya Existe Con Otro  Usuario';
  // $_SESSION['message_type'] = 'warning';
  // header('Location: indexusuario.php');
 
  }
}

?>
