<?php
  error_reporting(E_ERROR | E_PARSE);
  class ConsultaControlador{
    public function TablaConsultasControlador(){
      $Consulta = new ConsultaModelo();
      $respuesta = $Consulta->TablaConsultasModelo();
      return $respuesta;
    }
  }
?>