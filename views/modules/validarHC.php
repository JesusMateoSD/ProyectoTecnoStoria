<?php
	$usuario = new UsuarioControlador();
	$respuesta = $usuario->validarDocumentoPacienteControlador($_GET['idp']);
	header('Location:index.php?action=indexhclinica'); 
?>