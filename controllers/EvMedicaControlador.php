<?php
  error_reporting(E_ERROR | E_PARSE);
  class EvMedicaControlador{
    public function TablaCIE10Controlador(){
      $HClinica = new EvMedicaModelo();
      $respuesta = $HClinica->TablaCIE10Modelo();
      return $respuesta;
    }

    public function TablaCUPSControlador(){
      $HClinica = new EvMedicaModelo();
      $respuesta = $HClinica->TablaCUPSModelo();
      return $respuesta;
    }

    public function TablaConsultasControlador(){
      $HClinica = new EvMedicaModelo();
      $respuesta = $HClinica->TablaConsultasModelo();
      return $respuesta;
    }

    public function TablaEvolucionMedicaControlador(){
      $HClinica = new EvMedicaModelo();
      $respuesta = $HClinica->TablaEvolucionMedicaModelo();
      return $respuesta;
    }

    public function registrarEvMedicaControlador(){
      if(isset($_POST['salvarevolucion'])){
        $datosEM = ['fecha' => $_POST['fecha'],
        'hora' => $_POST['hora'],
        'td' => $_POST['td'],
        'paciente' => $_POST['paciente'],
        'documento' => $_POST['documento'],
        'dir' => $_POST['dir'],
        'tel' => $_POST['tel'],
        'edad' => $_POST['edad'],
        'fechan' => $_POST['fechan'],
        'mconsulta' => $_POST['mconsulta'],
        'alerta' => $_POST['alerta'],
        'tipodiagprin' => $_POST['tipodiagprin'],
        'diagprin' => $_POST['diagprin'],
        'diagrel1' => $_POST['diagrel1'],
        'diagrel2' => $_POST['diagrel2'],
        'procedimiento' => $_POST['procedimiento'],
        'consulta' => $_POST['consulta'],
        'complicacion' => $_POST['complicacion'],
        'evolucion' => $_POST['evolucion'],
        'usuario' => $_SESSION['snombre'],
        'docusuario' => $_SESSION['sdocumento']];

        $EvMed = new EvMedicaModelo();
        $respuesta = $EvMed->registrarEvMedicaModelo($datosEM);

        if($respuesta == 'success'){
          header('location:index.php?action=emok');
        } else if($respuesta == 'error'){
          header('location:index.php?action=evolucion');
        }
      }
    }

    public function borrarEMControlador($id){
      if(isset($id)){
        $EvMed = new EvMedicaModelo();
        $respuesta = $EvMed->borrarEMModelo($id);
      }
    }

    public function TablaEvolucionMedicaIdControlador($id){
      $HClinica = new EvMedicaModelo();
      $respuesta = $HClinica->TablaEvolucionMedicaIdModelo($id);
      return $respuesta;
    }
  }
?>