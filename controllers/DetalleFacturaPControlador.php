<?php
  error_reporting(E_ERROR | E_PARSE);
  class DetalleFacturaPControlador{
    public function TablaFacturaPagosControlador(){
      $Factura = new DetalleFacturaPModelo();
      $respuesta = $Factura->TablaFacturaPagosModelo();
      return $respuesta;
    }

    public function registrarPagoTempControlador($usuario,$docusuario){
      if(isset($_POST['salvarpagod'])){
        $datosPagoT = ['nfactura' => $_POST['nfactura'],
        'fecha' => $_POST['fecha'],
        'documento' => $_POST['cedula'],
        'nombre' => $_POST['paciente'],
        'productos' => $_POST['productos'],
        'valor' => $_POST['valor'],
        'cantidad' => $_POST['cantidad'],
        'total' => $_POST['total'],
        'usuario' => $usuario,
        'docusuario' => $docusuario];

        $Factura = new DetalleFacturaPModelo();
        $respuesta = $Factura->registrarPagoTempModelo($datosPagoT);

        if($respuesta == 'success'){
          header('location:index.php?action=pagos');
        } else if($respuesta == 'error'){
          header('location:index.php?action=pagos');
        }
      }
    }

    public function borrarPagoTempControlador($id){
      if(isset($id)){
        $Factura = new DetalleFacturaPModelo();
        $respuesta = $Factura->borrarPagoTempModelo($id);
      }
    }

    public function BorrarPagosTempControlador(){
      $Factura = new DetalleFacturaPModelo();
      $respuesta = $Factura->BorrarPagosTempModelo();
      if($respuesta == 'success'){
        header('location:index.php?action=pagok');
      } else if($respuesta == 'error'){
        header('location:index.php?action=pagos');
      }
    }

  }
?>