<?php
include('../db.php');
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars(trim($_POST["modelos"]));


    $sqlsi = "SELECT * FROM tbl_modeloc WHERE nombre = '$nombre'";
    $resultado = $mysqli->query($sqlsi);
    if (mysqli_num_rows($resultado) == 1) {
    $dato = $resultado->fetch_assoc();

    $modelo = $dato['modelo'];
    

    echo json_encode([
       'modelo' => $modelo
       
    ]);
   }

  else{
  
      echo json_encode([
      
       'message' => 'vacio',
       
    ]);
   }

}


?>