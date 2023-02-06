<?php
	$usuario = new Cie10Controlador();
	$usuario->borrarCIE10Controlador($_GET['id']);
	header('Location:index.php?action=cie10'); 
?>