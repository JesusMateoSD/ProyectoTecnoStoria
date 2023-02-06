<?php
  error_reporting(E_ERROR | E_PARSE);
  class AgendaPControlador{
    public function LimpiarAgendaPControlador(){
      $agendaP = new AgendaPModelo();
      $respuesta = $agendaP->LimpiarAgendaPModelo();
    }

    public function InsertarFechaAgendaPControlador($Cita){
      $agendaP = new AgendaPModelo();
      $respuesta = $agendaP->InsertarFechaAgendaPModelo($Cita);
    }

    public function TablaAgendaPControlador(){
      $agendaP = new AgendaPModelo();
      $respuesta = $agendaP->TablaAgendaPModelo();
      return $respuesta;
    }
  }
?>