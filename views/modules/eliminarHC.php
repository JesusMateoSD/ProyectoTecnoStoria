<?php
	$usuario = new HClinicaControlador();
	echo $usuario->borrarHCControlador($_GET['id']);
	header('Location:index.php?action=hclinica');
?>