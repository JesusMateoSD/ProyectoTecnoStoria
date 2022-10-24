<?php

require_once('../../controllers/PacienteControlador.php');
require_once('../../models/PacienteModelo.php');
  if($_SERVER["REQUEST_METHOD"] == "POST") {
    $documento = htmlspecialchars(trim($_POST["cedula"]));

    $pacC = new PacienteControlador();
    $pacienteR = $pacC->consultarPacienteAgendaControlador($documento);

    $pacientePDO = $pacienteR['paciente'];
    $telefonoPDO = $pacienteR['telefono'];

    echo json_encode([
       'paciente' => $pacientePDO,
       'telefono' => $telefonoPDO
    ]);

    } else {
        echo "<p>No se encontro el nombre en la DB!!</p>";
    }
?>