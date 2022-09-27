<link href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.8.0/sweetalert2.min.css" rel="stylesheet"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.8.0/sweetalert2.min.js"></script>

<?php
  session_start();
  include('../db.php');
  date_default_timezone_set('America/Bogota'); 
  
  $paciente = $_POST['paciente'];
  $tipodocumento = $_POST['tipodocumento'];
  $documento = $_POST['documento'];
  $fecha = $_POST['fecha'];
  $fechan = $_POST['fechan'];
  $edad = $_POST['edad'];
  $sexo = $_POST['sexo'];
  $direccion = $_POST['dir'];
  $telefono = $_POST['telefono'];
  $correo = $_POST['correo'];
  $ocupacion = $_POST['ocupacion'];
  $eps = $_POST['eps'];
  $dpto = $_POST['dpto'];
  $municipio = $_POST['municipio'];
  $acudiente = $_POST['acudiente'];
  $direcciona = $_POST['direcciona'];
  $telefonoa = $_POST['telefonoa'];
  $usuario = $_SESSION['snombre'];
  $docusuario = $_SESSION['sdocumento'];
 
  $query = "INSERT INTO tbl_pacientes(paciente,tipodocumento,documento,fecha,fechan,edad,sexo,direccion,telefono,correo,ocupacion,eps,dpto,municipio,acudiente,direcciona,telefonoa,usuario,docusuario) VALUES ('$paciente', '$tipodocumento', '$documento', '$fecha','$fechan','$edad','$sexo','$direccion','$telefono','$correo','$ocupacion','$eps','$dpto','$municipio','$acudiente','$direcciona','$telefonoa','$usuario','$docusuario')";
  $result = mysqli_query($mysqli, $query);
	
  if(!$result) {
    die("Query Fallo.");
  }

?>

<script LANGUAGE="javascript">
  $(document).ready(function() {
    swal({
      title: 'Medicina Web!',
      text: "El Paciente Fue Grabado Correctamente!",
      type: 'success',
      confirmButtonColor: '#3085d6',
      confirmButtonText: 'OK!'
    }).then((result) => {
      if (result.value) {
        window.location.href = "indexpaciente.php";
      }
    })
  });
</script>