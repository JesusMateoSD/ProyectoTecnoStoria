<?php
  error_reporting(E_ERROR | E_PARSE);
  class UsuarioControlador{
    public function registrarUsuarioControlador(){
      if(isset($_POST['salvarusuario'])) {
        $fechas = $_POST['fecha'];
        $foto=$_FILES["foto"]["name"];
        $ruta=$_FILES["foto"]["tmp_name"];
        $destino="views/img/firmasus/".$foto; 

        $datosUsuario = ['nombre' => $_POST['nombre'],
        'correo' => $_POST['correo'],
        'nivel' => $_POST['nivel'],
        'documento' => $_POST['documento'],
        'registro' => $_POST['registro'],
        'fecha' => date('Y-m-d', strtotime($fechas)),
        'pass' => password_hash($_POST['clave'], PASSWORD_BCRYPT),
        'ruta' => $ruta,
        'destino' => $destino];
        copy($ruta, $destino);

        $usuario = new UsuarioModelo();
        $respuesta = $usuario->registrarUsuarioModelo($datosUsuario);
        
        if($respuesta == 'success'){
          header('location:index.php?action=usuok');
        } else{
          header('location:index.php?action=usuario');
        }
      }            
    }

    public function registrarUsuarioAdmControlador(){
      $datosUsuario = ['nombre' => $_POST['nombre'],
      'correo' => $_POST['correo'],
      'nivel' => '1',
      'documento' => $_POST['documento'],
      'pass' => password_hash($_POST['clave'], PASSWORD_BCRYPT)];

      $usuario = new UsuarioModelo();
      $respuesta = $usuario->registrarUsuarioAdmModelo($datosUsuario);
      
      if($respuesta == 'success'){
        header('location:index.php?action=usuadmok');
      } else{
        header('location:index.php?action=usuarioadm');
      }
    }

    public function tablaUsuariosControlador(){
      $usuario = new UsuarioModelo();
      $respuesta = $usuario->tablaUsuariosModelo();
      return $respuesta;
    }

    public function tablaUsuariosAdmControlador(){
      $usuario = new UsuarioModelo();
      $respuesta = $usuario->tablaUsuariosAdmModelo();
      return $respuesta;
    }

    public function validarUsuarioControlador($inten){
        if(isset($_POST['validarusuario'])) {
          $datosUsuario = ['clave' => $_POST['clave'], 'correo' => $_POST['correo']];
          $usuario = new UsuarioModelo();
          $respuesta = $usuario->validarUsuarioModelo($datosUsuario);
          if($respuesta == 'success'){
            session_start();
            $_SESSION['usuario'] = $_POST['correo'];
            $inten = 0;
            header('location: index.php?action=inicio');
          } else{
            $inten ++;
            header('location:index.php?action=err&int='.$inten);
          }
        }
      }

    public function borrarUsuarioControlador($id){
      if(isset($id)){
        $usuario = new UsuarioModelo();
        $respuesta = $usuario->eliminarUsuarioModelo($id);
      }
    }

    public function borrarUsuarioAdmControlador($id){
      if(isset($id)){
        $usuario = new UsuarioModelo();
        $respuesta = $usuario->eliminarUsuarioModelo($id);
      }
    }

    public function validarProfesionalControlador($profesional){
      $usuario = new UsuarioModelo();
      $respuesta = $usuario->validarProfesionalModelo($profesional);
      return $respuesta;
    }

    public function consultarDocumentoProfesionalPacControlador($docusuario){
      $usuario = new UsuarioModelo();
      $respuesta = $usuario->consultarDocumentoPacModelo($docusuario);
      return $respuesta;
    }

    public function TablaUsuarioClaveControlador($correo){
      $usuario = new UsuarioModelo();
      $respuesta = $usuario->TablaUsuarioClaveModelo($correo);
      return $respuesta;
    }

    public function UsuarioClaveControlador($id){
      $usuario = new UsuarioModelo();
      $respuesta = $usuario->UsuarioClaveModelo($id);
      return $respuesta;
    }

    public function CambiarClaveControlador($id){
      if(isset($_POST['update'])) {
        $datosUsuarioCC = ['id' => $id,
        'nombre' => $_POST['nombre'],
        'correo' => $_POST['correo'],
        'pass' => password_hash($_POST['clave'], PASSWORD_BCRYPT)];

        $usuario = new UsuarioModelo();
        $respuesta = $usuario->CambiarClaveModelo($datosUsuarioCC);
        
        if($respuesta == 'success'){
          header('location:index.php?action=usuccok');
        } else{
          header('location:index.php?action=editusuariocc');
        }
      } 
    }
  }
?>

