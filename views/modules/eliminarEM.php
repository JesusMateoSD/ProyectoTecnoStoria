<?php
	$EM = new EvMedicaControlador();
	$EM->borrarEMControlador($_GET['id']);
	header('Location:index.php?action=evolucion');
?>