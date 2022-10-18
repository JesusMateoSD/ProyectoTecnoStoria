<?php
  $paciente = new PacienteControlador();
  $paciente->borrarPacienteControlador($_GET['id']);
  header('Location:index.php?action=paciente');
?>