<?php
  error_reporting(E_ERROR | E_PARSE);
  class TipoDocumentoControlador{
    public function tipoDocumentoControlador(){
      $paciente = new TipoDocumentoModelo();
      $respuesta = $paciente->tipoDocumentoModelo();
      return $respuesta;
    }
  }
?>