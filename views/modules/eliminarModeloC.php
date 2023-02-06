<?php
	$usuario = new ModeloConsentimientoControlador();
	echo $usuario->borrarModeloCControlador($_GET['id']);
	header('Location:index.php?action=modeloc');
?>