<?php
	$Remision = new RemisionControlador();
	$Remision->borrarRemisionControlador($_GET['id']);
	header('Location:index.php?action=remision');
?>