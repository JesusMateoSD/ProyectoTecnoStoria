<?php
  include_once('db.php');

  class HClinicaModelo extends Conexion{
    // public function validarDocumentoHCModelo($Doc){

    //   $sql = "SELECT * FROM tbl_pacientes WHERE documento=:cedula";
    //   try {
    //     $conexion = new Conexion();
    //     $stmt = $conexion->conectar()->prepare($sql);
    //     $stmt->bindParam(':cedula', $Doc,PDO::PARAM_STR);

    //     $stmt->execute();
    //     if($stmt->rowCount() == 1){
    //       $resulsql = $stmt->fetch();
    //       $_SESSION['activa'] = true;
    //       $_SESSION['scorreo'] = $resulsql['correo'];
    //       $_SESSION['sclave'] = $resulsql['pass'];
    //       $_SESSION['snombre'] = $resulsql['nombre'];
    //       $_SESSION['snivel'] = $resulsql['nivel'];
    //       $_SESSION['sregistro'] = $resulsql['registro'];

    //       $correo1 = $resulsql['correo'];
    //       $clave1 = $resulsql['clave'];
    //       $hash = $clave1;

    //       if (password_verify($clave, $hash)) {   
    //         return 'success';      
    //       } else{
    //         return 'error';
    //       }
    //     } else{
    //       return 'error';
    //     }
    //   } catch (Exception $e) {
    //     return $e;
    //   }
    // }
    public function TablaCausasExternasControlador(){
      $sql = "SELECT * FROM tbl_causaexterna";
      try {
        $conexion = new Conexion();
        $stmt = $conexion->conectar()->prepare($sql);
        if($stmt->execute()){
          return $stmt->fetchAll();
        }
      } catch (Exception $e) {
        return $e;
      }
    }

    public function TablaFinalidadConsultasModelo(){
      $sql = "SELECT * FROM tbl_finalidadc";
      try {
        $conexion = new Conexion();
        $stmt = $conexion->conectar()->prepare($sql);
        if($stmt->execute()){
          return $stmt->fetchAll();
        }
      } catch (Exception $e) {
        return $e;
      }
    }

    public function TablaHClinicaModelo(){
      $sql = "SELECT * FROM tbl_hclinica";
      try {
        $conexion = new Conexion();
        $stmt = $conexion->conectar()->prepare($sql);
        if($stmt->execute()){
          return $stmt->fetchAll();
        }
      } catch (Exception $e) {
        return $e;
      }
    }

    public function borrarHCModelo($id){
      $sql = "DELETE FROM tbl_hclinica WHERE id = :id";
      try{
        $conexion = new Conexion();
        $stmt = $conexion->conectar()->prepare($sql);
        $stmt->bindParam(':id', $id,PDO::PARAM_STR);
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