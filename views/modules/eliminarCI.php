<?php
  $Recetario = new ConsInfControlador();
  $Recetario->borrarConsInfControlador($_GET['id']);
  header('Location:index.php?action=cinformados');
?>