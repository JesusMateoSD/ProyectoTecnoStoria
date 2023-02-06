<?php
  error_reporting(E_ERROR | E_PARSE);
  class ModeloRecetarioControlador{
    public function TablaModeloRecetarioControlador(){
      $MRecetario = new ModeloRecetarioModelo();
      $respuesta = $MRecetario->TablaModeloRecetarioModelo();
      return $respuesta;
    }

    public function TablaModeloRecetarioIdControlador($nombre){
      $MRecetario = new ModeloRecetarioModelo();
      $respuesta = $MRecetario->TablaModeloRecetarioIdModelo($nombre);
      return $respuesta;
    }

    public function registrarModeloRControlador(){
      if(isset($_POST['salvarmodelor'])){
        $datosModR = ['modelo' => $_POST['modelo'],
        'nombre' => $_POST['nombre']];

        $MRecetario = new ModeloRecetarioModelo();
        $respuesta = $MRecetario->registrarModeloRModelo($datosModR);

        if($respuesta == 'success'){
          header('location:index.php?action=modrok');
        } else if($respuesta == 'error'){
          header('location:index.php?action=modelorec');
        }
      }
    }

    public function borrarModeloRControlador($id){
      if(isset($id)){
        $MRecetario = new ModeloRecetarioModelo();
        $respuesta = $MRecetario->borrarModeloRModelo($id);
      }
    }
  }
?>