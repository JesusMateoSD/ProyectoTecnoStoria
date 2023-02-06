<?php
  error_reporting(E_ERROR | E_PARSE);
  class FacturaControlador{
    public function TablaFacturaControlador(){
      $Factura = new FacturaModelo();
      $respuesta = $Factura->TablaFacturaModelo();
      return $respuesta;
    }

    public function TablaFacturaOrdControlador(){
      $Factura = new FacturaModelo();
      $respuesta = $Factura->TablaFacturaOrdModelo();
      return $respuesta;
    }

    public function registrarFacturaControlador(){
      $Factura = new FacturaModelo();
      $respuesta = $Factura->registrarFacturaModelo();
    }

    public function TablaFacturaIdControlador($id){
      $Factura = new FacturaModelo();
      $respuesta = $Factura->TablaFacturaIdModelo($id);
      return $respuesta;
    }
  }
?>