<?php
  require_once('../../controllers/UsuarioControlador.php');
  require_once('../../models/UsuarioModelo.php');

  if($_SERVER["REQUEST_METHOD"] == "POST") {
    $codigo = htmlspecialchars(trim($_POST["profesional"]));

    $profesionalC = new UsuarioControlador();
    $profesional = $profesionalC->validarProfesionalControlador($codigo);
    // $sqlsi = "SELECT * FROM tbl_usuarios WHERE nombre = '$codigo'";
    // $resultado = $mysqli->query($sqlsi);

    // if(mysqli_num_rows($resultado) == 1) {
      $registro = $profesional['registro'];
        echo json_encode([
        'registro' => $registro
      ]);
    // } 
  } 
?>