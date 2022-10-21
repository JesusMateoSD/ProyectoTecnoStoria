<?php
  error_reporting(E_ERROR | E_PARSE);
  class RemisionControlador{
    public function TablaRemisionControlador(){
      $Remision = new RemisionModelo();
      $respuesta = $Remision->TablaRemisionModelo();
      return $respuesta;
    }

    
    public function registrarRemisionControlador(){
      if(isset($_POST['salvarremision'])){
        $datosRemision = ['fecha' => $_POST['fecha'],
        'hora' => $_POST['hora'],
        'td' => $_POST['td'],
        'paciente' => $_POST['paciente'],
        'documento' => $_POST['documento'],
        'dir' => $_POST['dir'],
        'tel' => $_POST['tel'],
        'edad' => $_POST['edad'],
        'fechan' => $_POST['fechan'],
        'mconsulta' => $_POST['mconsulta'],
        'diagprin' => $_POST['diagprin'],
        'diagrel1' => $_POST['diagrel1'],
        'diagrel2' => $_POST['diagrel2'],
        'especialidadremite' => $_POST['especialidadremite'],
        'remision' => $_POST['remision'],
        'usuario' => $_SESSION['snombre'],
        'docusuario' => $_SESSION['sdocumento']];
        
        $Remision = new RemisionModelo();
        $respuesta = $Remision->registrarRemisionModelo($datosRemision);
        
        if($respuesta == 'success'){
          header('location:index.php?action=remok');
        } else if($respuesta == 'error'){
          header('location:index.php?action=remision');
        }
      }
    }
    
    public function borrarRemisionControlador($id){
      if(isset($id)){
        $Remision = new RemisionModelo();
        $respuesta = $Remision->borrarRemisionModelo($id);
      }
    }

    public function TablaRemisionIdControlador($id){
      $Remision = new RemisionModelo();
      $respuesta = $Remision->TablaRemisionIdModelo($id);
      return $respuesta;
    }
  }
?>