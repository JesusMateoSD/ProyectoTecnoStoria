<?php
  error_reporting(E_ERROR | E_PARSE);
  class PagosControlador{
    public function TablasTarifaControlador(){
      $Pagos = new PagosModelo();
      $respuesta = $Pagos->TablasTarifaModelo();
      return $respuesta;
    }

    public function borrarTarifaControlador($id){
      if(isset($id)){
        $Pagos = new PagosModelo();
        $respuesta = $Pagos->borrarTarifaModelo($id);
      }
    }

    public function registrarTarifaControlador(){
      $datosTarifa = ['producto' => $_POST['producto'],
        'precio' => $_POST['precio'],
        'precio1' => $_POST['precio1']];
      
      $Pagos = new PagosModelo();
      $respuesta = $Pagos->registrarTarifaModelo($datosTarifa);
      
      if($respuesta == 'success'){
        header('location:index.php?action=tarok');
      } else{
        header('location:index.php?action=tarifa');
      }
    }

    public function TablaFacturaControlador(){
      $Pagos = new PagosModelo();
      $respuesta = $Pagos->TablaFacturaModelo();
      return $respuesta;
    }

    public function TablaProductoControlador($producto){
      $Pagos = new PagosModelo();
      $respuesta = $Pagos->TablaProductoModelo($producto);
      return $respuesta;
    }

    public function TablaFacturaOrdControlador(){
      $Pagos = new PagosModelo();
      $respuesta = $Pagos->TablaFacturaOrdModelo();
      return $respuesta;
    }

    public function TablaFacturaPagosControlador(){
      $Pagos = new PagosModelo();
      $respuesta = $Pagos->TablaFacturaPagosModelo();
      return $respuesta;
    }

    public function registrarPagoTempControlador($usuario,$docusuario){
      if(isset($_POST['salvarpagod'])){
        $datosPagoT = ['nfactura' => $_POST['nfactura'],
        'fecha' => $_POST['fecha'],
        'cedula' => $_POST['cedula'],
        'paciente' => $_POST['paciente'],
        'productos' => $_POST['productos'],
        'valor' => $_POST['valor'],
        'cantidad' => $_POST['cantidad'],
        'total' => $_POST['total'],
        'usuario' => $usuario,
        'docusuario' => $docusuario];

        $Pagos = new PagosModelo();
        $respuesta = $Pagos->registrarPagoTempModelo($datosPagoT);

        if($respuesta == 'success'){
          header('location:index.php?action=pagos');
        } else if($respuesta == 'error'){
          header('location:index.php?action=pagos');
        }
      }
    }

    public function borrarPagoTempControlador($id){
      if(isset($id)){
        $Pagos = new PagosModelo();
        $respuesta = $Pagos->borrarPagoTempModelo($id);
      }
    }

    public function registrarPagoDControlador(){
      $Pagos = new PagosModelo();
      $respuesta = $Pagos->registrarPagoDModelo();
    }

    public function registrarPagoControlador(){
      $Pagos = new PagosModelo();
      $respuesta = $Pagos->registrarPagoModelo();
    }

    public function BorrarPagosTempControlador(){
      $Pagos = new PagosModelo();
      $respuesta = $Pagos->BorrarPagosTempControlador();
      if($respuesta == 'success'){
        header('location:index.php?action=pagok');
      } else if($respuesta == 'error'){
        header('location:index.php?action=pagos');
      }
    }

    public function TablaFacturaIdControlador($id){
      $Pagos = new PagosModelo();
      $respuesta = $Pagos->TablaFacturaIdModelo($id);
      return $respuesta;
    }

    public function ValorTotalFacturaControlador($factura){
      $Pagos = new PagosModelo();
      $respuesta = $Pagos->ValorTotalFacturaModelo($factura);
      return $respuesta;
    }

    public function TablaFacturaDetControlador($factura){
      $Pagos = new PagosModelo();
      $respuesta = $Pagos->TablaFacturaDetControlador($factura);
      return $respuesta;
    }

    public function ValorFacturaTotalFControlador($fecha){
      $Pagos = new PagosModelo();
      $respuesta = $Pagos->ValorFacturaTotalFModelo($fecha);
      return $respuesta;
    }

    public function TablaFacturaDFechasControlador($fecha){
      $Pagos = new PagosModelo();
      $respuesta = $Pagos->TablaFacturaDFechasModelo($fecha);
      return $respuesta;
    }

    public function TablaFacturaFMensualControlador($fechai,$fechaf){
      $Pagos = new PagosModelo();
      $respuesta = $Pagos->TablaFacturaFMensualModelo($fechai,$fechaf);
      return $respuesta;
    }

    public function TablaDFacturaTodoControlador($fechai,$fechaf){
      $Pagos = new PagosModelo();
      $respuesta = $Pagos->TablaDFacturaTodoModelo($fechai,$fechaf);
      return $respuesta;
    }
  }
?>