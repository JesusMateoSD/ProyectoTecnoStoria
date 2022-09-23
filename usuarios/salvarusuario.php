<link href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.8.0/sweetalert2.min.css" rel="stylesheet" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.8.0/sweetalert2.min.js"></script>

<?php
  include('../db.php');
  date_default_timezone_set('America/Bogota'); 

  if (isset($_POST['salvarusuario'])) {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $nivel = $_POST['nivel'];
    $documento = $_POST['documento'];
    $registro = $_POST['registro'];
    $fechas = $_POST['fecha'];
    $fecha = date('Y-m-d', strtotime($fechas));
    $pass = $_POST['clave'];    
    $passHash = password_hash($pass, PASSWORD_BCRYPT);
    $foto=$_FILES["foto"]["name"];
    $ruta=$_FILES["foto"]["tmp_name"];
    $destino="firmasus/".$foto;

    copy($ruta,$destino);    
    $total = mysqli_num_rows(mysqli_query($mysqli,"SELECT * FROM tbl_usuarios WHERE correo='$correo'"));

    if($total==0){
    
      $query = "INSERT INTO tbl_usuarios(nombre, correo,clave,documento,nivel,registro,fecha,foto) VALUES ('$nombre', '$correo', '$passHash', '$documento','$nivel','$registro','$fecha','$destino')";
      $result = mysqli_query($mysqli, $query);
  //  $to = $correo;
  //  $subject = "Creacion Usuario Medico";
  //  $message = "El Usuario Ha Sido Creado Correctamente en el Programa Medicina";
  //   mail($to, $subject, $message);
    
      if(!$result) {
        die("Query Fallo.");
      }
?>
  <script LANGUAGE="javascript">
    $(document).ready(function() {
      swal({
        title: 'Medicina Web!',
        text: "El Usuario Ha Sido Grabado Correctamente!",
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
  // $_SESSION['message_type'] = 'success';
  // header('Location: indexusuario.php');

    }else{

?>
  <script LANGUAGE="javascript">
    $(document).ready(function() {
      swal({
        title: 'Medicina Web!',
        text: "El Usuario NO Ha Sido Grabado Correo Ya Existe Con Otro  Usuario!",
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
//   $_SESSION['message'] = 'Correo Ya Existe Con Otro Usuario';
//  $_SESSION['message_type'] = 'warning';
//  header('Location: indexusuario.php');
 
    }
  }
?>
