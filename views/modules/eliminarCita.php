<?php
	$usuario = new AgendaControlador();
	$usuario->borrarCitaControlador($_GET['id']);
	header('Location:index.php?action=cie10'); 
?>