<?php
	$DetPFactura = new DetalleFacturaPControlador();
	$DetPFactura->borrarPagoTempControlador($_GET['id']);
	header('Location:index.php?action=pagos');
?>