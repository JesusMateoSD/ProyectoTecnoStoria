<?php
	$usuario = new UsuarioControlador();
	$respuesta = $usuario->validarDocumentoPacienteControlador($_GET['id']);
	header('Location:index.php?action=indexhclinica'); 
?>