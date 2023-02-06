<?php
	$usuario = new CupsControlador();
	$usuario->borrarCUPSControlador($_GET['id']);
	header('Location:index.php?action=cups'); 
?>