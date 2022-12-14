<?php
  error_reporting(E_ERROR | E_PARSE);
  class ConsInfControlador{
    public function TablaModeloCControlador(){
      $CInformados = new ConsInfModelo();
      $respuesta = $CInformados->TablaModeloCModelo();
      return $respuesta;
    }

    public function TablaModeloConsControlador($nombre){
      $CInformados = new ConsInfModelo();
      $respuesta = $CInformados->TablaModeloConsModelo($nombre);
      return $respuesta;
    }

    public function tablaConsInfControlador(){
      $CInformados = new ConsInfModelo();
      $respuesta = $CInformados->tablaConsInfModelo();
      return $respuesta;
    }

    public function registrarConsInfControlador(){
      if(isset($_POST['salvarcinformados'])){
        $datosCI = ['fecha' => $_POST['fecha'],
        'hora' => $_POST['hora'],
        'td' => $_POST['td'],
        'paciente' => $_POST['paciente'],
        'documento' => $_POST['documento'],
        'dir' => $_POST['dir'],
        'tel' => $_POST['tel'],
        'edad' => $_POST['edad'],
        'fechan' => $_POST['fechan'],
        'consentimiento' => $_POST['consentimientos'],
        'modelos' => $_POST['modelos'],
        'usuario' => $_SESSION['snombre'],
        'docusuario' => $_SESSION['sdocumento']];;

        $CInformados = new ConsInfModelo();
        $respuesta = $CInformados->registrarConsInfModelo($datosCI);

        if($respuesta == 'success'){
          header('location:index.php?action=ciok');
        } else if($respuesta == 'error'){
          header('location:index.php?action=cinformados');
        }
      }
    }

    public function borrarConsInfControlador($id){
      if(isset($id)){
        $CInformados = new ConsInfModelo();
        $respuesta = $CInformados->borrarConsInfModelo($id);
      }
    }

    public function tablaConsInfIdControlador($id){
      $CInformados = new ConsInfModelo();
      $respuesta = $CInformados->tablaConsInfIdModelo($id);
      return $respuesta;
    }

    public function registrarModeloCControlador(){
      if(isset($_POST['salvarmodeloc'])){
        $datosModC = ['modelo' => $_POST['modelo'],
        'nombre' => $_POST['nombre']];

        $Recetario = new ConsInfModelo();
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
        $Recetario = new ConsInfModelo();
        $respuesta = $Recetario->borrarModeloCModelo($id);
      }
    }
  }
?>