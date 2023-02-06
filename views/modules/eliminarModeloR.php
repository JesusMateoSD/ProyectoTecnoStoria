<?php
	$usuario = new ModeloRecetarioControlador();
	$usuario->borrarModeloRControlador($_GET['id']);
	header('Location:index.php?action=modelorec');
?>