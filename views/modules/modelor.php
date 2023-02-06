<?php
  require_once('../../controllers/ModeloRecetarioControlador.php');
  require_once('../../models/ModeloRecetarioModelo.php');

  if($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars(trim($_POST["modelos"]));
    // $sqlsi = "SELECT * FROM tbl_modelor WHERE nombre = '$nombre'";
    // $resultado = $mysqli->query($sqlsi);
    // $dato = $resultado->fetch_assoc();

    $recetario = new ModeloRecetarioControlador();
    $rslRecetario = $recetario->TablaModeloRecetarioIdControlador($nombre);

    $modelo = $rslRecetario['modelo'];

    echo json_encode([
      'modelo' => $modelo
    ]);
  }
?>
