<?php
  $Cert = new CertificacionControlador();
  $Cert->borrarCertificacionControlador($_GET['id']);
  header('Location:index.php?action=certificacion');
?>