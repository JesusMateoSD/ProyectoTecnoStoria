<link href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.8.0/sweetalert2.min.css" rel="stylesheet" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.8.0/sweetalert2.min.js"></script>

<?php
session_start();
include('../db.php');
date_default_timezone_set('America/Bogota'); 

  
  $fecha = $_POST['fecha'];
  $hora = $_POST['hora'];
  $td = $_POST['td'];
  $paciente = $_POST['paciente'];
  $documento = $_POST['documento'];
  $dir = $_POST['dir'];
  $tel = $_POST['tel'];
  $edad = $_POST['edad'];
  $fechan = $_POST['fechan'];


  $consentimiento = $_POST['consentimientos'];
  $modelos = $_POST['modelos'];
  



   $usuario = $_SESSION['snombre'];
   $docusuario = $_SESSION['sdocumento'];

 
  $query = "INSERT INTO tbl_cinformados(fecha,hora,tipodocumento,paciente,documento,direccion,telefono,edad,fechan,consentimiento,modelos,usuario,docusuario) VALUES ('$fecha', '$hora', '$td', '$paciente','$documento','$dir','$tel','$edad','$fechan','$consentimiento','$modelos','$usuario','$docusuario')";
  $result = mysqli_query($mysqli, $query);
  
 $tarea = "Crea Consentimientos Informados";
    $queryb = "INSERT INTO tbl_bitacora(documento,nombre, tarea) VALUES ('$_SESSION[sdocumento]', '$_SESSION[snombre]', '$tarea')";
    $resultb = mysqli_query($mysqli, $queryb);
	
  if(!$result) {
    die("Query Fallo.");
  }

  ?>
  <script LANGUAGE="javascript">
  $(document).ready(function() {

    swal({
      title: 'Medicina Web!',
       text: "El Modelo Fue Grabado Correctamente!",
      type: 'success',
      confirmButtonColor: '#3085d6',
      confirmButtonText: 'OK!'
    }).then((result) => {
      if (result.value) {
        window.location.href = "modeloci.php";
      }
    })

  });
</script>
<?php



?>
