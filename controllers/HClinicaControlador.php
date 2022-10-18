<?php
  error_reporting(E_ERROR | E_PARSE);
  class HClinicaControlador{
    // public function validarDocumentoHCControlador(){
    //   if(isset($_POST['salvarparametro'])){
    //     $_SESSION['scedulap'] = 0;
    //     $_SESSION['scedula'] = $_POST['documento'];

    //     $usuario = new HClinicaModelo();
    //     $respuesta = $usuario->validarDocumentoHCModelo($_SESSION['scedula']);
    //   }
    // }
    public function TablaCausasExternasControlador(){
      $HClinica = new HClinicaModelo();
      $respuesta = $HClinica->TablaCausasExternasControlador();
      return $respuesta;
    }

    public function TablaFinalidadConsultasControlador(){
      $HClinica = new HClinicaModelo();
      $respuesta = $HClinica->TablaFinalidadConsultasModelo();
      return $respuesta;
    }

    public function TablaHClinicaControlador(){
      $HClinica = new HClinicaModelo();
      $respuesta = $HClinica->TablaHClinicaModelo();
      return $respuesta;
    }

    public function borrarHCControlador($id){
      if(isset($id)){
        $HClinica = new HClinicaModelo();
        $respuesta = $HClinica->borrarHCModelo($id);
      }
    }

    public function registrarHistoriaClinicaControlador(){
      if(isset($_POST['salvarhistoria'])){
        $datosHC = ['nombre' => $_POST['nombre'],
        'nit' => $_POST['nit'],
        'direccion' => $_POST['direccion'],
        'telefono' => $_POST['telefono'],
        'correo' => $_POST['correo'],
        'ciudad' => $_POST['ciudad'],
        'depto' => $_POST['depto'],
        'capb' => $_POST['capb'],
        'napb' => $_POST['napb'],
        'destino' => $destino];
        copy($ruta,$destino);

        $HClinica = new ConsultorioModelo();
        $respuesta = $HClinica->registrarHistoriaClinicaModelo($datosHC);

        if($respuesta == 'success'){
          header('location:index.php?action=hcok');
        } else if($respuesta == 'error'){
          header('location:index.php?action=hclinica');
        }
      }
    }
  }
?>