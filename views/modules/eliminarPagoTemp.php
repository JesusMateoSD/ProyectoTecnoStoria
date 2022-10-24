<?php
	$EM = new PagosControlador();
	$EM->borrarPagoTempControlador($_GET['id']);
	header('Location:index.php?action=pagos');
?>