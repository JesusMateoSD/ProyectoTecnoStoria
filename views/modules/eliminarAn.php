<?php
	$usuario = new AnanmesisControlador();
	echo $usuario->borrarAnanmesisControlador($_GET['id']);
	header('Location:index.php?action=ananmesis');
?>