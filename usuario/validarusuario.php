<?php

include('../connection/db.php');
session_start();

$Alerta = '';

if(!empty($_SESSION['activa'])){
  echo "<script>console.log('POOTIS' );</script>";
	header('Location: index.php');
} else {
  if (isset($_POST['salvarusuario'])) {
    $clave = $_POST['contrasena'];
    $correo = $_POST['correo'];

    $query = "SELECT * FROM usuario WHERE correo = '$correo'";
    $result = mysqli_query($mysqli, $query);
    if (mysqli_num_rows($result) == 1) {
      $row = mysqli_fetch_array($result);

      $_SESSION['scorreo'] = $row['correo'];
      $_SESSION['scontrasena'] = $row['contrasena'];
      $_SESSION['snombre'] = $row['nombre'];
      $_SESSION['snivel'] = $row['nivel'];

      $correo1 = $row['correo'];
      $clave1 = $row['contrasena'];
      $hash = $clave1;

      if (password_verify($clave, $hash)) {
        header('Location: inicio.php');
      } else {
        $alerta = 'La Clave No Es Correcta';
        $_SESSION['salerta'] = $alerta;
        header('Location: index.php');
      }
    }
    else{
      $alerta = 'El Correo No Existe';
      $_SESSION['salerta'] = $alerta;
      header('Location: index.php');
    }
  }
}
