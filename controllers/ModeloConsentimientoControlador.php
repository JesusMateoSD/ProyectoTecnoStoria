<?php
  error_reporting(E_ERROR | E_PARSE);
  class ModeloConsentimientoControlador{
    public function TablaModeloCControlador(){
      $CInformados = new ModeloConsentimientoModelo();
      $respuesta = $CInformados->TablaModeloCModelo();
      return $respuesta;
    }

    public function TablaModeloConsControlador($nombre){
      $CInformados = new ModeloConsentimientoModelo();
      $respuesta = $CInformados->TablaModeloConsModelo($nombre);
      return $respuesta;
    }

    public function registrarModeloCControlador(){
      if(isset($_POST['salvarmodeloc'])){
        $datosModC = ['modelo' => $_POST['modelo'],
        'nombre' => $_POST['nombre']];

        $Recetario = new ModeloConsentimientoModelo();
        $respuesta = $Recetario->registrarModeloCModelo($datosModC);

        if($respuesta == 'success'){
          header('location:index.php?action=modcok');
        } else if($respuesta == 'error'){
          header('location:index.php?action=modeloc');
        }
      }
    }

    public function borrarModeloCControlador($id){
      if(isset($id)){
        $Recetario = new ModeloConsentimientoModelo();
        $respuesta = $Recetario->borrarModeloCModelo($id);
      }
    }
  }
?>