<?php
  error_reporting(E_ERROR | E_PARSE);
  class HoraControlador{
    public function tablaHorasControlador(){
      $agenda = new HoraModelo();
      $respuesta = $agenda->tablaHorasModelo();
      return $respuesta;
    }

    public function UnionAgendaControlador($fechahoy){
      $agenda = new HoraModelo();
      $respuesta = $agenda->UnionAgendaModelo($fechahoy);
      return $respuesta;
    }

  }
?>