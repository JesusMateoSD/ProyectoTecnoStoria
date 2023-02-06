<?php
  error_reporting(E_ERROR | E_PARSE);
  class CupsControlador{
    public function TablaCUPSControlador(){
      $Cups = new CupsModelo();
      $respuesta = $Cups->TablaCUPSModelo();
      return $respuesta;
    }

    public function registrarCUPSControlador(){
      if(isset($_POST['salvarcups'])){
        $datosCUPS = ['codigo' => $_POST['codigo'],
        'nombre' => $_POST['nombre']];

        $Cups = new CupsModelo();
        $respuesta = $Cups->registrarCUPSModelo($datosCUPS);

        if($respuesta == 'success'){
          header('location:index.php?action=cupsok');
        } else if($respuesta == 'error'){
          header('location:index.php?action=cups');
        }
      }
    }

    public function borrarCUPSControlador($id){
      if(isset($id)){
        $Cups = new CupsModelo();
        $respuesta = $Cups->borrarCUPSModelo($id);
      }
    }
  }
?>