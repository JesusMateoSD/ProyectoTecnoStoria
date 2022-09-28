<?php
session_start();
include('../db.php');

//if (isset($_POST['salvaragenda'])) {
  $docp = $_POST['docp'];
  $profesional = $_POST['profesional'];
  $fecha = $_POST['fecha'];
  $hora = $_POST['hora'];
  $cedula = $_POST['cedula'];
  $paciente = $_POST['paciente'];
  $telefono = $_POST['telefono'];
  $nivel = $_POST['nivel'];
  $obs = $_POST['obs'];
  
 
  $query = "INSERT INTO tbl_agenda(fecha,horag,nprofesional,dprofesional,npaciente,dpaciente,tpaciente,estado,obs) VALUES ('$fecha', '$hora', '$profesional', '$docp', '$paciente', '$cedula', '$telefono', '$nivel', '$obs')";
  $result = mysqli_query($mysqli, $query);
  if(!$result) {
    die("Query Fallo.");
  }
//}
?>
