<?php
  error_reporting(E_ERROR | E_PARSE);
  class DepartamentoControlador{
    public function DptosControlador(){
      $departamento = new DepartamentoModelo();
      $respuesta = $departamento->DptosModelo();
      return $respuesta;
    }
  }
?>