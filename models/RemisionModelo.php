<?php
  include_once('db.php');

  class RemisionModelo extends Conexion{
    public function TablaRemisionModelo(){
      $sql = "SELECT * FROM tbl_remisiones";
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

    public function registrarRemisionModelo($datosRemision){
      $sql = "INSERT INTO tbl_remisiones(fecha,hora,tipodocumento,paciente,documento,direccion,telefono,edad,fechan,mconsulta,diagprin,diagrel1,diagrel2,especialidadremite,remision,usuario,docusuario) VALUES (:fecha, :hora, :td, :paciente, :documento, :dir, :tel, :edad, :fechan, :mconsulta, :diagprin, :diagrel1, :diagrel2, :especialidadremite, :remision, :usuario, :docusuario)";
      try{
        $conexion = new Conexion();
        $stmt = $conexion->conectar()->prepare($sql);
        $stmt->bindParam(':fecha', $datosRemision['fecha'],PDO::PARAM_STR);
        $stmt->bindParam(':hora', $datosRemision['hora'],PDO::PARAM_STR);
        $stmt->bindParam(':td', $datosRemision['td'],PDO::PARAM_STR);
        $stmt->bindParam(':paciente', $datosRemision['paciente'],PDO::PARAM_STR);
        $stmt->bindParam(':documento', $datosRemision['documento'],PDO::PARAM_STR);
        $stmt->bindParam(':dir', $datosRemision['dir'],PDO::PARAM_STR);
        $stmt->bindParam(':tel', $datosRemision['tel'],PDO::PARAM_STR);
        $stmt->bindParam(':edad', $datosRemision['edad'],PDO::PARAM_STR);
        $stmt->bindParam(':fechan', $datosRemision['fechan'],PDO::PARAM_STR);
        $stmt->bindParam(':mconsulta', $datosRemision['mconsulta'],PDO::PARAM_STR);
        $stmt->bindParam(':diagprin', $datosRemision['diagprin'],PDO::PARAM_STR);
        $stmt->bindParam(':diagrel1', $datosRemision['diagrel1'],PDO::PARAM_STR);
        $stmt->bindParam(':diagrel2', $datosRemision['diagrel2'],PDO::PARAM_STR);
        $stmt->bindParam(':especialidadremite', $datosRemision['especialidadremite'],PDO::PARAM_STR);
        $stmt->bindParam(':remision', $datosRemision['remision'],PDO::PARAM_STR);
        $stmt->bindParam(':usuario', $datosRemision['usuario'],PDO::PARAM_STR);
        $stmt->bindParam(':docusuario', $datosRemision['docusuario'],PDO::PARAM_STR);

        if($stmt->execute()){
          return 'success';
        }else{
          return 'error';
        }
      } catch(Exception $e){
        return $e;
      }
    }

    public function borrarRemisionModelo($id){
      $sql ="DELETE FROM tbl_remisiones WHERE id = :id";
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

    public function TablaRemisionIdModelo($id){
      $sql = "SELECT * FROM tbl_remisiones WHERE id = :id";
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