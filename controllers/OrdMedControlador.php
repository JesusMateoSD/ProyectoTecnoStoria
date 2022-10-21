<?php
  error_reporting(E_ERROR | E_PARSE);
  class OrdMedControlador{
    public function tablaOrdenMedicaControlador(){
      $OM = new OrdMedModelo();
      $respuesta = $OM->TablaRecetarioModelo();
      return $respuesta;
    }

    public function registrarOrdMedControlador(){
      if(isset($_POST['salvarom'])){
        $datosOM = ['fecha' => $_POST['fecha'],
        'hora' => $_POST['hora'],
        'td' => $_POST['td'],
        'paciente' => $_POST['paciente'],
        'documento' => $_POST['documento'],
        'dir' => $_POST['dir'],
        'tel' => $_POST['tel'],
        'edad' => $_POST['edad'],
        'fechan' => $_POST['fechan'],
        'ordenmedica' => $_POST['ordenmedica'],
        'usuario' => $_SESSION['snombre'],
        'docusuario' => $_SESSION['sdocumento']];

        $Recetario = new OrdMedModelo();
        $respuesta = $Recetario->registrarOrdMedModelo($datosOM);

        if($respuesta == 'success'){
          header('location:index.php?action=omok');
        } else if($respuesta == 'error'){
          header('location:index.php?action=omedicas');
        }
      }
    }

    public function borrarOrdMedControlador($id){
      if(isset($id)){
        $OM = new OrdMedModelo();
        $respuesta = $OM->borrarOrdMedModelo($id);
      }
    }

    public function tablaOrdMedIdControlador($id){
      $OM = new OrdMedModelo();
      $respuesta = $OM->TablaOrdMedIdModelo($id);
      return $respuesta;
    }
  }
?>