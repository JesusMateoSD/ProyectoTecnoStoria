<?php
  include_once('db.php');
  class CertificacionModelo extends Conexion{
    public function TablaCertificacionModelo(){
      $sql = "SELECT * FROM tbl_certificaciones";
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

    public function registrarCertificacionModelo($datosCert){
      $sql = "INSERT INTO tbl_certificaciones(fecha,hora,tipodocumento,paciente,documento,direccion,telefono,edad,fechan,certificacion,usuario,docusuario) VALUES (:fecha, :hora, :td, :paciente, :documento, :dir, :tel, :edad, :fechan, :certificacion, :usuario, :docusuario)";
      try{
        $conexion = new Conexion();
        $stmt = $conexion->conectar()->prepare($sql);
        $stmt->bindParam(':fecha', $datosCert['fecha'],PDO::PARAM_STR);
        $stmt->bindParam(':hora', $datosCert['hora'],PDO::PARAM_STR);
        $stmt->bindParam(':td', $datosCert['td'],PDO::PARAM_STR);
        $stmt->bindParam(':paciente', $datosCert['paciente'],PDO::PARAM_STR);
        $stmt->bindParam(':documento', $datosCert['documento'],PDO::PARAM_STR);
        $stmt->bindParam(':dir', $datosCert['dir'],PDO::PARAM_STR);
        $stmt->bindParam(':tel', $datosCert['tel'],PDO::PARAM_STR);
        $stmt->bindParam(':edad', $datosCert['edad'],PDO::PARAM_STR);
        $stmt->bindParam(':fechan', $datosCert['fechan'],PDO::PARAM_STR);
        $stmt->bindParam(':certificacion', $datosCert['certificacion'],PDO::PARAM_STR);
        $stmt->bindParam(':usuario', $datosCert['usuario'],PDO::PARAM_STR);
        $stmt->bindParam(':docusuario', $datosCert['docusuario'],PDO::PARAM_STR);

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