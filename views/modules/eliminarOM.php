<?php
	$usuario = new OrdMedControlador();
	echo $usuario->borrarOrdMedControlador($_GET['id']);
	header('Location:index.php?action=omedicas');
?>