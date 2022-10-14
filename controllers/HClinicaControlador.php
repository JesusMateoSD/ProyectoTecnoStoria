<?php
  error_reporting(E_ERROR | E_PARSE);
  class HClinicaControlador{
    public function validarDocumentoHCControlador(){
      if(isset($_POST['salvarparametro'])){
        $_SESSION['scedulap'] = 0;
        $_SESSION['scedula'] = $_POST['documento'];

        $usuario = new HClinicaModelo();
        $respuesta = $usuario->validarDocumentoHCModelo($_SESSION['scedula']);
      }
    }
  }
?>