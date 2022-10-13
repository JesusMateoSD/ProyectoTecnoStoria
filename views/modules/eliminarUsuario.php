<?php
  $usuario = new UsuarioControlador();
  $usuario->borrarUsuarioControlador($_GET['id']);
  header('Location:index.php?action=usuario');  
?>