<?php
  
  require_once('controllers/EnlacesPaginacionControlador.php');
  require_once('models/EnlacesPaginacionModelo.php');
  require_once('controllers/UsuarioControlador.php');
  require_once('models/UsuarioModelo.php');
  require_once('controllers/ConsultorioControlador.php');
  require_once('models/ConsultorioModelo.php');
  require_once('controllers/HClinicaControlador.php');
  require_once('models/HClinicaModelo.php');

  $obj = new EnlacesPaginacionControlador();
  $obj->mostrarPagina();

?>