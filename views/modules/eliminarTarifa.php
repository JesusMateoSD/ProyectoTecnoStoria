<?php
  $Pagos = new PagosControlador();
  $Pagos->borrarTarifaControlador($_GET['id']);
  header('Location:index.php?action=tarifa');
?>