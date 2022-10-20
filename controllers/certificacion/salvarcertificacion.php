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
  $certificacion = $_POST['certificacion'];
  $usuario = $_SESSION['snombre'];
  $docusuario = $_SESSION['sdocumento'];

 
  $query = "INSERT INTO tbl_certificaciones(fecha,hora,tipodocumento,paciente,documento,direccion,telefono,edad,fechan,certificacion,usuario,docusuario) VALUES ('$fecha', '$hora', '$td', '$paciente','$documento','$dir','$tel','$edad','$fechan','$certificacion','$usuario','$docusuario')";
  $result = mysqli_query($mysqli, $query);
  
 $tarea = "Crea Certificacion";
    $queryb = "INSERT INTO tbl_bitacora(documento,nombre, tarea) VALUES ('$_SESSION[sdocumento]', '$_SESSION[snombre]', '$tarea')";
    $resultb = mysqli_query($mysqli, $queryb);
	
  if(!$result) {
    die("Query Fallo.");
  }



?>
