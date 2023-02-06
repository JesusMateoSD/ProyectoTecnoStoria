<?php
  error_reporting(E_ERROR | E_PARSE);
  class TarifaControlador{
    public function TablasTarifaControlador(){
      $Tarifa = new TarifaModelo();
      $respuesta = $Tarifa->TablasTarifaModelo();
      return $respuesta;
    }

    public function borrarTarifaControlador($id){
      if(isset($id)){
        $Tarifa = new TarifaModelo();
        $respuesta = $Tarifa->borrarTarifaModelo($id);
      }
    }

    public function registrarTarifaControlador(){
      $datosTarifa = ['producto' => $_POST['producto'],
        'precio' => $_POST['precio'],
        'precio1' => $_POST['precio1']];
      
      $Tarifa = new TarifaModelo();
      $respuesta = $Tarifa->registrarTarifaModelo($datosTarifa);
      
      if($respuesta == 'success'){
        header('location:index.php?action=tarok');
      } else{
        header('location:index.php?action=tarifa');
      }
    }

    public function TablaProductoTarifaControlador($producto){
      $Pagos = new TarifaModelo();
      $respuesta = $Pagos->TablaProductoTarifaModelo($producto);
      return $respuesta;
    }
  }
?>