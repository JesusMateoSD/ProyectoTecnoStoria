<?php
  include('../db.php');
  if($_SERVER["REQUEST_METHOD"] == "POST") {
    $codigo = htmlspecialchars(trim($_POST["profesional"]));
    $sqlsi = "SELECT * FROM tbl_usuarios WHERE nombre = '$codigo'";
    $resultado = $mysqli->query($sqlsi);

    if(mysqli_num_rows($resultado) == 1) {
      $dato = $resultado->fetch_assoc();
      $registro = $dato['registro'];
        echo json_encode([
        'registro' => $registro
      ]);
    } else{
      echo json_encode([
        'message' => 'vacio',
      ]);
    }
  }
?>