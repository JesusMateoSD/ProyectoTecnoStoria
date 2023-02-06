<?php
  $Pagos = new TarifaControlador();
  $Pagos->borrarTarifaControlador($_GET['id']);
  header('Location:index.php?action=tarifa');
?>