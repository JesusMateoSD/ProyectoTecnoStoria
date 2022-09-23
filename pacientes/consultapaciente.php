<?php
  include('../db.php');

  if($_SERVER["REQUEST_METHOD"] == "POST") {
    $documento = htmlspecialchars(trim($_POST["documento"]));

    if (empty($documento)) {
      //echo '$var es o bien 0, vacía, o no se encuentra definida en absoluto';
    } else{
    
      $sqlsi = "SELECT * FROM tbl_pacientes WHERE documento = '$documento'";
      $resultado = $mysqli->query($sqlsi);

      if (mysqli_num_rows($resultado) == 1) {
        $dato = $resultado->fetch_assoc();
      //$paciente = $dato['paciente'];   
        echo json_encode([
      //  'paciente' => $paciente
          'message' => 'vacio',
        ]);
      } else{
        echo json_encode([
        //    'message' => 'vacio', 
        ]);
      }
    }
  }
?>