<?php
	$usuario = new EvMedicaControlador();
	$usuario->borrarCUPSControlador($_GET['id']);
	header('Location:index.php?action=cups'); 
?>