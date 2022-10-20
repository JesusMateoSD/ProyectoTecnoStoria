<?php
  require_once('../../controllers/RecetarioControlador.php');
  require_once('../../models/RecetarioModelo.php');

  if($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars(trim($_POST["modelos"]));
    // $sqlsi = "SELECT * FROM tbl_modelor WHERE nombre = '$nombre'";
    // $resultado = $mysqli->query($sqlsi);
    // $dato = $resultado->fetch_assoc();

    $recetario = new RecetarioControlador();
    $rslRecetario = $recetario->TablaModeloRecetarioIdControlador($nombre);

    $modelo = $rslRecetario['modelo'];

    echo json_encode([
      'modelo' => $modelo
    ]);
  }
?>
