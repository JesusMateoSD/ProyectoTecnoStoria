<?php
  error_reporting(E_ERROR | E_PARSE);
  class AgendaControlador{
    public function tablaAgenProControlador(){
      $respuesta = new AgendaModelo();
      $respuesta = $respuesta->tablaAgenProModelo();
      return $respuesta;
    }

    public function tablaHorasControlador(){
      $respuesta = new AgendaModelo();
      $respuesta = $respuesta->tablaHorasModelo();
      return $respuesta;
    }
  }
?>