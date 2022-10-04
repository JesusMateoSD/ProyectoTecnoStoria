<?php
  error_reporting(E_ALL ^ E_NOTICE);

  session_start();

  $mysqli=new mysqli("localhost","root","Mateoclombia11","bd_tecnostoria"); //servidor, usuario de base de datos, contraseña del usuario, nombre de base de datos

  if(mysqli_connect_errno()){
    echo 'Conexion Fallida : ', mysqli_connect_error();
  }


  //para autocompletar
  $contraseña = "Mateoclombia11";
  $usuario = "root";
  $nombre_base_de_datos = "bd_tecnostoria";
  try {
    $bd = new PDO('mysql:host=localhost;dbname=' . $nombre_base_de_datos, $usuario, $contraseña);
    $bd->query("set names utf8;");
    $bd->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    $bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $bd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    return $bd;
  } catch (Exception $e) {
    echo "Ocurrió algo con la base de datos: " . $e->getMessage();
    return null;
  }

?>
