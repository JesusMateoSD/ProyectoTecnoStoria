<?php
  error_reporting(E_ERROR | E_PARSE);
  class Cie10Controlador{
    public function TablaCIE10Controlador(){
      $Cie10 = new Cie10Modelo();
      $respuesta = $Cie10->TablaCIE10Modelo();
      return $respuesta;
    }

    public function registrarCIE10Controlador(){
      if(isset($_POST['salvarcie10'])){
        $datosCIE10 = ['codigo' => $_POST['codigo'],
        'nombre' => $_POST['nombre']];

        $Cie10 = new Cie10Modelo();
        $respuesta = $Cie10->registrarCIE10Modelo($datosCIE10);

        if($respuesta == 'success'){
          header('location:index.php?action=cie10ok');
        } else if($respuesta == 'error'){
          header('location:index.php?action=cie10');
        }
      }
    }

    public function borrarCIE10Controlador($id){
      if(isset($id)){
        $Cie10 = new Cie10Modelo();
        $respuesta = $Cie10->borrarCIE10Modelo($id);
      }
    }

  }
?>