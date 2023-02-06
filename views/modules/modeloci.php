<?php
  require_once('../../controllers/ModeloConsentimientoControlador.php');
  require_once('../../models/ModeloConsentimientoModelo.php');
  
  if($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars(trim($_POST["modelos"]));
    // $sqlsi = "SELECT * FROM tbl_modeloc WHERE nombre = '$nombre'";
    // $resultado = $mysqli->query($sqlsi);
    // $dato = $resultado->fetch_assoc();
    
    $CInformados = new ModeloConsentimientoControlador();
    $rslModeloC = $CInformados->TablaModeloConsControlador($nombre);

    $modelo = $rslModeloC['modelo'];
  
    echo json_encode([
        'modelo' => $modelo
    ]);
  }
?>
