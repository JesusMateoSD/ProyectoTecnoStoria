<?php
  
  require_once('controllers/EnlacesPaginacionControlador.php');
  require_once('models/EnlacesPaginacionModelo.php');
  require_once('controllers/UsuarioControlador.php');
  require_once('models/UsuarioModelo.php');
  require_once('controllers/ConsultorioControlador.php');
  require_once('models/ConsultorioModelo.php');
  require_once('controllers/HClinicaControlador.php');
  require_once('models/HClinicaModelo.php');
  require_once('controllers/AgendaControlador.php');
  require_once('models/AgendaModelo.php');
  require_once('controllers/PacienteControlador.php');
  require_once('models/PacienteModelo.php');
  require_once('controllers/EvMedicaControlador.php');
  require_once('models/EvMedicaModelo.php');
  require_once('controllers/RecetarioControlador.php');
  require_once('models/RecetarioModelo.php');
  require_once('controllers/CertificacionControlador.php');
  require_once('models/CertificacionModelo.php');
  require_once('controllers/OrdMedControlador.php');
  require_once('models/OrdMedModelo.php');
  require_once('controllers/RemisionControlador.php');
  require_once('models/RemisionModelo.php');
  require_once('controllers/ConsInfControlador.php');
  require_once('models/ConsInfModelo.php');
  require_once('controllers/PagosControlador.php');
  require_once('models/PagosModelo.php');

  $obj = new EnlacesPaginacionControlador();
  $obj->mostrarPagina();

?>