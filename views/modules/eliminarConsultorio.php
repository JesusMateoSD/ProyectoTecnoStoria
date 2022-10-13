<?php
  $consultorio = new ConsultorioControlador();
  $consultorio->borrarConsultorioControlador($_GET['id']);
  header('Location:index.php?action=consultorio');  
?>