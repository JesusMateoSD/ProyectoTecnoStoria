<?php
	$usuario = new EvMedicaControlador();
	$usuario->borrarCIE10Controlador($_GET['id']);
	header('Location:index.php?action=cie10'); 
?>