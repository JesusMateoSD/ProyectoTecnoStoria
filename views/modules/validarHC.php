<?php
	$usuario = new PacienteControlador();
	$respuesta = $usuario->validarDocumentoPacienteControlador($_GET['id']);
?>