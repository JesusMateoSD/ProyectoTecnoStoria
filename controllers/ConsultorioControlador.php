<?php
  error_reporting(E_ERROR | E_PARSE);
  class ConsultorioControlador{
    public function registrarConsultorioControlador(){
      if(isset($_POST['salvarconsultorio'])){
        $foto=$_FILES["foto"]["name"];
        $ruta=$_FILES["foto"]["tmp_name"];
        $destino="views/img/fotospr/".$foto; 

        $datosConsultorio = ['nombre' => $_POST['nombre'],
        'nit' => $_POST['nit'],
        'direccion' => $_POST['direccion'],
        'telefono' => $_POST['telefono'],
        'correo' => $_POST['correo'],
        'municipio' => $_POST['ciudad'],
        'dpto' => $_POST['depto'],
        'capb' => $_POST['capb'],
        'napb' => $_POST['napb'],
        'destino' => $destino];
        copy($ruta,$destino);

        $consultorio = new ConsultorioModelo();
        $respuesta = $consultorio->registrarConsultorioModelo($datosConsultorio);

        if($respuesta == 'success'){
          header('location:index.php?action=conok');
        } else if($respuesta == 'error'){
          header('location:index.php?action=consultorio');
        }
      }
    }

    public function tablaConsultoriosControlador(){
      $consultorio = new ConsultorioModelo();
      $respuesta = $consultorio->tablaConsultoriosModelo();
      return $respuesta;
    }

    public function borrarConsultorioControlador($id){
      if(isset($id)){
        $consultorio = new ConsultorioModelo();
        $respuesta = $consultorio->eliminarConsultorioModelo($id);
      }
    }

    public function consultarConsultorioControlador($id){
      $consultorio = new ConsultorioModelo();
      $respuesta = $consultorio->consultarConsultorioModelo($id);
      return $respuesta;
    }
    
    public function editarConsultorioControlador($id){
      if(isset($_POST['update'])){
        $datosConsultorio = ['id' => $id,
        'nombre' => $_POST['nombre'],
        'nit' => $_POST['nit'],
        'direccion' => $_POST['direccion'],
        'telefono' => $_POST['telefono'],
        'correo' => $_POST['correo'],
        'ciudad' => $_POST['ciudad'],
        'depto' => $_POST['depto'],
        'capb' => $_POST['capb'],
        'napb' => $_POST['napb']];

        $consultorio = new ConsultorioModelo();
        $respuesta = $consultorio->editarConsultorioModelo($datosConsultorio);

        if($respuesta == 'success'){
          header('location:index.php?action=conAct');
        } else if($respuesta == 'error'){
          header('location:index.php?action=editconsultorio');
        }
      }
    }

  }
?>

