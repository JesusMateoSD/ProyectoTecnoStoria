<?php 

include_once('db.php');

class UsuarioModelo extends Conexion{
  public function registrarUsuarioModelo($datosUsuario){
    $sql = "INSERT INTO tbl_usuarios VALUES(null,:nombre,:correo,:clave,:nivel,:documento,:creado,:registro,:fecha,:foto)";
    try {
      $conexion = new Conexion();
      $stmt = $conexion->conectar()->prepare($sql);
      $stmt->bindParam(':nombre', $datosUsuario['nombre'],PDO::PARAM_STR);
      $stmt->bindParam(':correo', $datosUsuario['correo'],PDO::PARAM_STR);
      $stmt->bindParam(':clave', $datosUsuario['pass'],PDO::PARAM_STR);
      $stmt->bindParam(':nivel', $datosUsuario['nivel'],PDO::PARAM_INT);
      $stmt->bindParam(':documento', $datosUsuario['documento'],PDO::PARAM_STR);
      $stmt->bindParam(':creado', $datosUsuario['creado'],PDO::PARAM_STR);
      $stmt->bindParam(':registro', $datosUsuario['registro'],PDO::PARAM_STR);
      $stmt->bindParam(':fecha', $datosUsuario['fecha'],PDO::PARAM_STR);
      $stmt->bindParam(':foto', $datosUsuario['destino'],PDO::PARAM_STR);
      if($stmt->execute()){
        return 'success';
      }
      else{
        return 'error';
      }
    } catch (Exception $e) {
      return $e;
    }
  }

  public function registrarUsuarioAdmModelo($datosUsuario){
    
    $sql = "INSERT INTO tbl_usuarios(nombre,correo,clave,nivel,documento,fecha) VALUES(:nombre,:correo,:clave,:nivel,:documento, CURDATE())";
    try {
      $conexion = new Conexion();
      $stmt = $conexion->conectar()->prepare($sql);
      $stmt->bindParam(':nombre', $datosUsuario['nombre'],PDO::PARAM_STR);
      $stmt->bindParam(':correo', $datosUsuario['correo'],PDO::PARAM_STR);
      $stmt->bindParam(':clave', $datosUsuario['pass'],PDO::PARAM_STR);
      $stmt->bindParam(':nivel', $datosUsuario['nivel'],PDO::PARAM_INT);
      $stmt->bindParam(':documento', $datosUsuario['documento'],PDO::PARAM_STR);
      if($stmt->execute()){
        return 'success';
      }
      else{
        return 'error';
      }
    } catch (Exception $e) {
      return $e;
    }
  }

  public function tablaUsuariosModelo(){
    $sql = "SELECT * FROM tbl_usuarios WHERE nivel > :nivel";
    try {
      $nivel = 1;
      $conexion = new Conexion();
      $stmt = $conexion->conectar()->prepare($sql);
      $stmt->bindParam(':nivel', $nivel,PDO::PARAM_STR);
      if($stmt->execute()){
        return $stmt->fetchAll();
      }
    } catch (Exception $e) {
      return $e;
    }
  }

  public function tablaUsuariosAdmModelo(){
    $sql = "SELECT * FROM tbl_usuarios WHERE nivel = :nivel";
    try {
      $nivel = 1;
      $conexion = new Conexion();
      $stmt = $conexion->conectar()->prepare($sql);
      $stmt->bindParam(':nivel', $nivel,PDO::PARAM_STR);
      if($stmt->execute()){
        return $stmt->fetchAll();
      }
    } catch (Exception $e) {
      return $e;
    }
  }

  public function validarUsuarioModelo($datosUsuario){
    $clave = $datosUsuario['clave'];
    $correo = $datosUsuario['correo'];

    $sql = "SELECT * FROM tbl_usuarios WHERE correo=:correo";
     try {
      $conexion = new Conexion();
      $stmt = $conexion->conectar()->prepare($sql);
      $stmt->bindParam(':correo', $datosUsuario['correo'],PDO::PARAM_STR);

      $stmt->execute();
      if($stmt->rowCount() == 1){
        $resulsql = $stmt->fetch();
        $_SESSION['activa'] = true;
        $_SESSION['scorreo'] = $resulsql['correo'];
        $_SESSION['sclave'] = $resulsql['pass'];
        $_SESSION['snombre'] = $resulsql['nombre'];
        $_SESSION['sdocumento'] = $resulsql['documento'];
        $_SESSION['snivel'] = $resulsql['nivel'];
        $_SESSION['sregistro'] = $resulsql['registro'];

        $correo1 = $resulsql['correo'];
        $clave1 = $resulsql['clave'];
        $hash = $clave1;

        if (password_verify($clave, $hash)) {   
          return 'success';      
        } else{
          return 'error';
        }
      } else{
        return 'error';
      }
    } catch (Exception $e) {
      return $e;
    }
  }

   public function eliminarUsuarioModelo($id){
      $sql = "DELETE FROM tbl_usuarios WHERE id = :id";
      try{
        $conexion = new Conexion();
        $stmt = $conexion->conectar()->prepare($sql);
        $stmt->bindParam(':id', $id,PDO::PARAM_INT);
        if($stmt->execute()){
          return 'success';
        }else{
          return 'error';
        }
      } catch(Exception $e){
        return $e;
      }
   }

  public function validarProfesionalModelo($profesional){
    $sql = "SELECT * FROM tbl_usuarios WHERE nombre = :profesional";
    try {
      $conexion = new Conexion();
      $stmt = $conexion->conectar()->prepare($sql);
      $stmt->bindParam(':profesional', $profesional,PDO::PARAM_STR);
      $stmt->execute();
      if($stmt->rowCount() == 1){
        $resulsql = $stmt->fetch();
        return $resulsql;
      }
    } catch (Exception $e) {
      return $e;
    }
  }

  public function consultarDocumentoPacModelo($documento){
    $sql = "SELECT * FROM tbl_usuarios WHERE documento = :documento";
    try {
      $conexion = new Conexion();
      $stmt = $conexion->conectar()->prepare($sql);
      $stmt->bindParam(':documento', $documento, PDO::PARAM_STR);
      if($stmt->execute()){
        return $stmt->fetchAll();
      } else {
        return 'error';
      }
    } catch (Exception $e) {
      return $e;
    }
  }

  public function TablaUsuarioClaveModelo($correo){
    $sql = "SELECT * FROM tbl_usuarios WHERE correo = :correo";
    try {
      $conexion = new Conexion();
      $stmt = $conexion->conectar()->prepare($sql);
      $stmt->bindParam(':correo', $correo,PDO::PARAM_STR);
      $stmt->execute();
      if($stmt->rowCount() == 1){
        return $stmt->fetch();
      }
    } catch (Exception $e) {
      return $e;
    }
  }

  public function UsuarioClaveModelo($id){
    $sql = "SELECT * FROM tbl_usuarios WHERE id = :id";
    try{
      $conexion = new Conexion();
      $stmt = $conexion->conectar()->prepare($sql);
      $stmt->bindParam(':id', $id,PDO::PARAM_INT);

      if($stmt->execute()){
        return $stmt->fetchAll();
      }else{
        return 'error';
      }
    } catch(Exception $e){
      return $e;
    }
  }

  public function CambiarClaveModelo($datosUsuarioCC){
    $sql = "UPDATE tbl_usuarios set clave = :pass WHERE id = :id";
    try{
      $conexion = new Conexion();
      $stmt = $conexion->conectar()->prepare($sql);
      $stmt->bindParam(':pass', $datosUsuarioCC['pass'],PDO::PARAM_STR);
      $stmt->bindParam(':id', $datosUsuarioCC['id'],PDO::PARAM_INT);

      if($stmt->execute()){
        return 'success';
      }else{
        return 'error';
      }
    } catch(Exception $e){
      return $e;
    }
  }
}
?>