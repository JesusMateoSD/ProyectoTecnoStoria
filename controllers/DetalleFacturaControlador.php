<?php
  error_reporting(E_ERROR | E_PARSE);
  class DetalleFacturaControlador{
    public function registrarPagoDControlador(){
      $Factura = new DetalleFacturaModelo();
      $respuesta = $Factura->registrarPagoDModelo();
    }

    public function ValorTotalFacturaControlador($factura){
      $Factura = new DetalleFacturaModelo();
      $respuesta = $Factura->ValorTotalFacturaModelo($factura);
      return $respuesta;
    }

    public function TablaFacturaDetControlador($factura){
      $Factura = new DetalleFacturaModelo();
      $respuesta = $Factura->TablaFacturaDetModelo($factura);
      return $respuesta;
    }

    public function ValorFacturaTotalFControlador($fecha){
      $Factura = new DetalleFacturaModelo();
      $respuesta = $Factura->ValorFacturaTotalFModelo($fecha);
      return $respuesta;
    }

    public function TablaFacturaDFechaControlador($fecha){
      $Factura = new DetalleFacturaModelo();
      $respuesta = $Factura->TablaFacturaDFechaModelo($fecha);
      return $respuesta;
    }

    public function TablaFacturaFMensualControlador($fechai,$fechaf){
      $Factura = new DetalleFacturaModelo();
      $respuesta = $Factura->TablaFacturaFMensualModelo($fechai,$fechaf);
      return $respuesta;
    }

    public function TablaDFacturaFechasControlador($fechai,$fechaf){
      $Factura = new DetalleFacturaModelo();
      $respuesta = $Factura->TablaDFacturaFechasModelo($fechai,$fechaf);
      return $respuesta;
    }
  }
?>