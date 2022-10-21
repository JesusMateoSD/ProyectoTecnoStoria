<?php
  $Recetario = new RecetarioControlador();
  $Recetario->borrarRecetarioControlador($_GET['id']);
  header('Location:index.php?action=cinformados');
?>