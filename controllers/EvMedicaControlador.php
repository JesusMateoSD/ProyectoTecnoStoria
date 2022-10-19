<?php
  error_reporting(E_ERROR | E_PARSE);
  class EvMedicaControlador{
    public function TablaCIE10Controlador(){
      $HClinica = new EvMedicaModelo();
      $respuesta = $HClinica->TablaCIE10Modelo();
      return $respuesta;
    }

    public function TablaCUPSControlador(){
      $HClinica = new EvMedicaModelo();
      $respuesta = $HClinica->TablaCUPSModelo();
      return $respuesta;
    }

    public function TablaConsultasControlador(){
      $HClinica = new EvMedicaModelo();
      $respuesta = $HClinica->TablaConsultasModelo();
      return $respuesta;
    }
  }
?>