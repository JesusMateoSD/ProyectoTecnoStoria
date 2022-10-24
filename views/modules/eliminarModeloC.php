<?php
	$usuario = new ConsInfControlador();
	echo $usuario->borrarModeloCControlador($_GET['id']);
	header('Location:index.php?action=modeloc');
?>