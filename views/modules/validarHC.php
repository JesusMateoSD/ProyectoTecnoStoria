<?php
	$usuario = new UsuarioControlador();
	$respuesta = $usuario->validarDocumentoPacienteControlador($_GET['id']);
?>