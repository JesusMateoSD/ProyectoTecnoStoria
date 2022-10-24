<?php
	$usuario = new RecetarioControlador();
	echo $usuario->borrarModeloRControlador($_GET['id']);
	header('Location:index.php?action=modelorec');
?>