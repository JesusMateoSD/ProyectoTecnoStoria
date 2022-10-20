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

  $modelos = $_POST['modelos'];
  $recetario = $_POST['recetario'];
  

  $usuario = $_SESSION['snombre'];
  $docusuario = $_SESSION['sdocumento'];

 
  $query = "INSERT INTO tbl_recetario(fecha,hora,tipodocumento,paciente,documento,direccion,telefono,edad,fechan,modelos,recetario,usuario,docusuario) VALUES ('$fecha', '$hora', '$td', '$paciente','$documento','$dir','$tel','$edad','$fechan','$modelos','$recetario','$usuario','$docusuario')";
  $result = mysqli_query($mysqli, $query);
  
 
	$tarea = "Crea Recetario";
    $queryb = "INSERT INTO tbl_bitacora(documento,nombre, tarea) VALUES ('$_SESSION[sdocumento]', '$_SESSION[snombre]', '$tarea')";
    $resultb = mysqli_query($mysqli, $queryb);

  if(!$result) {
    die("Query Fallo.");
  }



?>
