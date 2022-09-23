<?php

include('../db.php');
session_start();

$Alerta = '';

if(!empty($_SESSION['activa'])){
	
	header('Location: index.php');
}

else {

if (isset($_POST['salvarusuario'])) {
  $clave = $_POST['clave'];
  $correo = $_POST['correo'];
  
  $query = "SELECT * FROM tbl_usuarios WHERE correo='$correo'";
  $result = mysqli_query($mysqli, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
	
	$_SESSION['activa'] = true;
	$_SESSION['scorreo'] = $row['correo'];
	$_SESSION['sclave'] = $row['clave'];
  $_SESSION['snombre'] = $row['nombre'];
  $_SESSION['snivel'] = $row['nivel'];
	$_SESSION['sdocumento'] = $row['documento'];
	
    $correo1 = $row['correo'];
    $clave1 = $row['clave'];
	  $hash = $clave1;
	
  if (password_verify($clave, $hash)) {
    
    $tarea = "Inicio de Session";
    $queryb = "INSERT INTO tbl_bitacora(documento,nombre, tarea) VALUES ('$_SESSION[sdocumento]', '$_SESSION[snombre]', '$tarea')";
    $result = mysqli_query($mysqli, $queryb);

    header('Location: ../inicio/inicio.php');
    
} else {
    $alerta = 'La Clave No Es Correcta';
    $_SESSION['salerta'] = $alerta;
    header('Location: ../index.php');
    
    
}	
  }
  else{
	  
    $alerta = 'El Correo No Existe';
    $_SESSION['salerta'] = $alerta;
    header('Location: ../index.php');

	
  }
 
  
  
}
}

?>
