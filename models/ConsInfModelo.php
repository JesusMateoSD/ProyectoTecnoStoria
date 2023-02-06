<?php
  include_once('db.php');
  class ConsInfModelo{
    public function tablaConsInfModelo(){
      $sql = "SELECT * FROM tbl_cinformados";
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

    public function registrarConsInfModelo($datosCI){
      $sql = "INSERT INTO tbl_cinformados(fecha,hora,tipodocumento,paciente,documento,direccion,telefono,edad,fechan,consentimiento,modelos,usuario,docusuario) VALUES (:fecha, :hora, :td, :paciente, :documento, :dir, :tel, :edad, :fechan, :consentimiento, :modelos, :usuario, :docusuario)";
      try{
        $conexion = new Conexion();
        $stmt = $conexion->conectar()->prepare($sql);
        $stmt->bindParam(':fecha', $datosCI['fecha'],PDO::PARAM_STR);
        $stmt->bindParam(':hora', $datosCI['hora'],PDO::PARAM_STR);
        $stmt->bindParam(':td', $datosCI['td'],PDO::PARAM_STR);
        $stmt->bindParam(':paciente', $datosCI['paciente'],PDO::PARAM_STR);
        $stmt->bindParam(':documento', $datosCI['documento'],PDO::PARAM_STR);
        $stmt->bindParam(':dir', $datosCI['dir'],PDO::PARAM_STR);
        $stmt->bindParam(':tel', $datosCI['tel'],PDO::PARAM_STR);
        $stmt->bindParam(':edad', $datosCI['edad'],PDO::PARAM_STR);
        $stmt->bindParam(':fechan', $datosCI['fechan'],PDO::PARAM_STR);
        $stmt->bindParam(':consentimiento', $datosCI['consentimiento'],PDO::PARAM_STR);
        $stmt->bindParam(':modelos', $datosCI['modelos'],PDO::PARAM_STR);
        $stmt->bindParam(':usuario', $datosCI['usuario'],PDO::PARAM_STR);
        $stmt->bindParam(':docusuario', $datosCI['docusuario'],PDO::PARAM_STR);

        if($stmt->execute()){
          return 'success';
        }else{
          return 'error';
        }
      } catch(Exception $e){
        return $e;
      }
    }

    public function borrarConsInfModelo($id){
      $sql = "DELETE FROM tbl_cinformados WHERE id = :id";
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

    public function tablaConsInfIdModelo($id){
      $sql = "SELECT * FROM tbl_cinformados WHERE id = :id";
      try {
        $conexion = new Conexion();
        $stmt = $conexion->conectar()->prepare($sql);
        $stmt->bindParam(':id', $id,PDO::PARAM_INT);
        if($stmt->execute()){
          return $stmt->fetchAll();
        }
      } catch (Exception $e) {
        return $e;
      }
    }
  }
?>