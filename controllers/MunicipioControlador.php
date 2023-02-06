<?php
  error_reporting(E_ERROR | E_PARSE);
  class MunicipioControlador{
    public function MunicipiosControlador($dpto){
      $paciente = new MunicipioModelo();
      $respuesta = $paciente->MunicipiosModelo($dpto);
      return $respuesta;
    }
  }
?>