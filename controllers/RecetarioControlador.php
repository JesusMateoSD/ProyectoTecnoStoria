<?php
  error_reporting(E_ERROR | E_PARSE);
  class RecetarioControlador{
    public function TablaModeloRecetarioControlador(){
      $Recetario = new RecetarioModelo();
      $respuesta = $Recetario->TablaModeloRecetarioModelo();
      return $respuesta;
    }

    public function TablaModeloRecetarioIdControlador($nombre){
      $Recetario = new RecetarioModelo();
      $respuesta = $Recetario->TablaModeloRecetarioIdModelo($nombre);
      return $respuesta;
    }

    public function TablaRecetarioControlador(){
      $Recetario = new RecetarioModelo();
      $respuesta = $Recetario->TablaRecetarioModelo();
      return $respuesta;
    }

    public function registrarRecetarioControlador(){
      if(isset($_POST['salvarrecetario'])){
        $datosRece = ['fecha' => $_POST['fecha'],
        'hora' => $_POST['hora'],
        'td' => $_POST['td'],
        'paciente' => $_POST['paciente'],
        'documento' => $_POST['documento'],
        'dir' => $_POST['dir'],
        'tel' => $_POST['tel'],
        'edad' => $_POST['edad'],
        'fechan' => $_POST['fechan'],
        'modelos' => $_POST['modelos'],
        'recetario' => $_POST['recetario'],
        'usuario' => $_SESSION['snombre'],
        'docusuario' => $_SESSION['sdocumento']];

        $Recetario = new RecetarioModelo();
        $respuesta = $Recetario->registrarRecetarioModelo($datosRece);

        if($respuesta == 'success'){
          header('location:index.php?action=receok');
        } else if($respuesta == 'error'){
          header('location:index.php?action=recetario');
        }
      }
    }

    public function borrarRecetarioControlador($id){
      if(isset($id)){
        $Recetario = new RecetarioModelo();
        $respuesta = $Recetario->borrarRecetarioModelo($id);
      }
    }

    public function TablaRecetarioIdControlador($id){
      $Recetario = new RecetarioModelo();
      $respuesta = $Recetario->TablaRecetarioIdModelo($id);
      return $respuesta;
    }
  }
?>