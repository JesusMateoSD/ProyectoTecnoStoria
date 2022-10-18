<?php
	$usuario = new HClinicaControlador();
	$usuario->borrarHCControlador($_GET['id']);
	header('Location:index.php?action=hclinica'); 
?>