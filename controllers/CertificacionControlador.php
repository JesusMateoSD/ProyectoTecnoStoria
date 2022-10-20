<?php
  error_reporting(E_ERROR | E_PARSE);
  class CertificacionControlador{
    public function TablaCertificacionControlador(){
      $Cert = new CertificacionModelo();
      $respuesta = $Cert->TablaCertificacionModelo();
      return $respuesta;
    }

    public function registrarCertificacionControlador(){
      if(isset($_POST['salvarrecetario'])){
        $datosCert = ['fecha' => $_POST['fecha'],
        'hora' => $_POST['hora'],
        'td' => $_POST['td'],
        'paciente' => $_POST['paciente'],
        'documento' => $_POST['documento'],
        'dir' => $_POST['dir'],
        'tel' => $_POST['tel'],
        'edad' => $_POST['edad'],
        'fechan' => $_POST['fechan'],
        'certificacion' => $_POST['certificacion'],
        'usuario' => $_SESSION['snombre'],
        'docusuario' => $_SESSION['sdocumento']];

        $Cert = new CertificacionModelo();
        $respuesta = $Cert->registrarCertificacionModelo($datosCert);

        if($respuesta == 'success'){
          header('location:index.php?action=certeok');
        } else if($respuesta == 'error'){
          header('location:index.php?action=certificacion');
        }
      }
    }
  }
?>