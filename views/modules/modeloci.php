<?php
  require_once('../../controllers/ConsInfControlador.php');
  require_once('../../models/ConsInfModelo.php');
  
  if($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars(trim($_POST["modelos"]));
    // $sqlsi = "SELECT * FROM tbl_modeloc WHERE nombre = '$nombre'";
    // $resultado = $mysqli->query($sqlsi);
    // $dato = $resultado->fetch_assoc();
    
    $CInformados = new ConsInfControlador();
    $rslModeloC = $CInformados->TablaModeloConsControlador($nombre);

    $modelo = $rslModeloC['modelo'];
  
    echo json_encode([
        'modelo' => $modelo
    ]);
  }
?>
