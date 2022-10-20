<?php
  error_reporting(E_ERROR | E_PARSE);
  class RecetarioControlador{
    public function TablaModeloRecetarioControlador(){
      $Recetario = new RecetarioModelo();
      $respuesta = $Recetario->TablaModeloRecetarioModelo();
      return $respuesta;
    }

    public function TablaRecetarioControlador(){
      $Recetario = new RecetarioModelo();
      $respuesta = $Recetario->TablaRecetarioModelo();
      return $respuesta;
    }
  }
?>