<?php
  error_reporting(E_ERROR | E_PARSE);
  class UsuarioControlador{
    public function registrarUsuarioControlador(){
      if(isset($_POST['salvarusuario'])) {
        $fechas = $_POST['fecha'];
        $foto=$_FILES["foto"]["name"];
        $ruta=$_FILES["foto"]["tmp_name"];
        $destino="firmasus/".$foto; 

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
          ?>
            <script LANGUAGE="javascript">
              $(document).ready(function() {
                swal({
                  title: 'TecnoStoria',
                  text: "El Usuario NO se grabo con exito, parece que ha surgido un error",
                  type: 'error',
                  confirmButtonColor: '#3085d6',
                  confirmButtonText: 'OK!'
                }).then((result) => {
                  
                })
              });
            </script>
          <?php
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
      ?>
        <script LANGUAGE="javascript">
          $(document).ready(function() {
            swal({
              title: 'TecnoStoria',
              text: "El Usuario Administrador NO se grabo con exito, parece que ha surgido un error",
              type: 'error',
              confirmButtonColor: '#3085d6',
              confirmButtonText: 'OK!'
            }).then((result) => {
              
            })
          });
        </script>
        <?php
        header('location:index.php?action=usuario');
      }
    }

    public function tablaUsuariosControlador(){
      $respuesta = new UsuarioModelo();
      $respuesta = $respuesta->tablaUsuariosModelo();
      return $respuesta;
    }

    public function tablaUsuariosAdmControlador(){
      $respuesta = new UsuarioModelo();
      $respuesta = $respuesta->tablaUsuariosAdmModelo();
      return $respuesta;
    }

    public function validarUsuarioControlador(){
        if(isset($_POST['validarusuario'])) {
          $datosUsuario = ['clave' => $_POST['clave'], 'correo' => $_POST['correo']];
          $usuario = new UsuarioModelo();
          $respuesta = $usuario->validarUsuarioModelo($datosUsuario);

          print $respuesta;
          if($respuesta == 'success'){
            session_start();
            $_SESSION['usuario'] = $_POST['correo'];
            
            header('location: index.php?action=inicio');
          } else{

            header('location:index.php?action=err');
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
  }
?>

