<?php
  error_reporting(E_ERROR | E_PARSE);
  class ConsultorioControlador{
    public function registrarConsultorioControlador(){
      if(isset($_POST['salvarconsultorio'])){
        $foto=$_FILES["foto"]["name"];
        $ruta=$_FILES["foto"]["tmp_name"];
        $destino="fotospr/".$foto; 

        $datosConsultorio = ['nombre' => $_POST['nombre'],
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

        $consultorio = new ConsultorioModelo();
        $respuesta = $consultorio->registrarConsultorioModelo($datosConsultorio);

        if($respuesta == 'success'){
          ?>
          <script LANGUAGE="javascript">
            $(document).ready(function() {
              swal({
                title: 'TecnoStoria',
                text: "El Consultorio Ha Sido Grabado Correctamente!",
                type: 'success',
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'OK!'
              }).then((result) => {
                
              })
            });
          </script>
          <?php

          header('location:index.php?action=ok');
        } else if($respuesta == 'error'){
          ?>
          <script LANGUAGE="javascript">
            $(document).ready(function() {
              swal({
                title: 'TecnoStoria',
                text: "El Consultorio NO se grabo con exito, parece que ha surgido un error",
                type: 'error',
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'OK!'
              }).then((result) => {
                
              })
            });
          </script>
          <?php
          header('location:index.php?action=consultorio');

        }
      }
    }

    public function tablaConsultoriosControlador(){
      $respuesta = new ConsultorioModelo();
      $respuesta = $respuesta->tablaConsultoriosModelo();
      return $respuesta;
    }

    public function borrarConsultorioControlador($id){
      if(isset($id)){
        $usuario = new ConsultorioModelo();
        $respuesta = $usuario->eliminarConsultorioModelo($id);
      }
    }

    public function consultarConsultorioControlador($id){
      $usuario = new ConsultorioModelo();
      $respuesta = $usuario->consultarConsultorioModelo($id);
      return $respuesta;
    }

    public function editarUsuarioControlador($id){
      if(isset($id)){
        $usuario = new ConsultorioModelo();
        $respuesta = $usuario->editarConsultorioModelo($id);
      }
    }

  }
?>

