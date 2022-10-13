<?php
  $usuario = new UsuarioControlador();
  $usuario->borrarUsuarioAdmControlador($_GET['id']);
  header('Location:index.php?action=usuarioadm');
?>