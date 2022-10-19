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
  
  $mconsulta = $_POST['mconsulta'];
  $alerta = $_POST['alerta'];
  $tipodiagprin = $_POST['tipodiagprin'];
  $diagprin = $_POST['diagprin'];
  $diagrel1 = $_POST['diagrel1'];
  $diagrel2 = $_POST['diagrel2'];
  $procedimiento = $_POST['procedimiento'];
  $consulta = $_POST['consulta'];
  $complicacion = $_POST['complicacion'];
  $evolucion = $_POST['evolucion'];

  $usuario = $_SESSION['snombre'];
  $docusuario = $_SESSION['sdocumento'];

 
  $query = "INSERT INTO tbl_evolucion(fecha,hora,tipodocumento,paciente,documento,direccion,telefono,edad,fechan,mconsulta,alerta,tipodiagprin,diagprin,diagrel1,diagrel2,procedimiento,consulta,complicacion,evolucion,usuario,docusuario) VALUES ('$fecha', '$hora', '$td', '$paciente','$documento','$dir','$tel','$edad','$fechan','$mconsulta','$alerta','$tipodiagprin','$diagprin','$diagrel1','$diagrel2','$procedimiento','$consulta','$complicacion','$evolucion','$usuario','$docusuario')";
  $result = mysqli_query($mysqli, $query);
  
  // $tarea = "Crea Evolucion";
  //   $queryb = "INSERT INTO tbl_bitacora(documento,nombre, tarea) VALUES ('$_SESSION[sdocumento]', '$_SESSION[snombre]', '$tarea')";
  //   $resultb = mysqli_query($mysqli, $queryb);
	
  if(!$result) {
    die("Query Fallo.");
  }



?>
