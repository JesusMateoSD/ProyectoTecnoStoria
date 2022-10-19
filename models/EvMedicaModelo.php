<?php
  include_once('db.php');

  class EvMedicaModelo extends Conexion{
    public function TablaCIE10Modelo(){
      $sql = "SELECT * FROM tbl_cie10";
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

    public function TablaCUPSModelo(){
      $sql = "SELECT * FROM tbl_cups";
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

    public function TablaConsultasModelo(){
      $sql = "SELECT * FROM tbl_consulta";
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

    public function TablaEvolucionMedicaModelo(){
      $sql = "SELECT * FROM tbl_evolucion";
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

    public function registrarEvMedicaModelo($datosEM){
      $sql = "INSERT INTO tbl_evolucion(fecha,hora,tipodocumento,paciente,documento,direccion,telefono,edad,fechan,mconsulta,alerta,tipodiagprin,diagprin,diagrel1,diagrel2,procedimiento,consulta,complicacion,evolucion,usuario,docusuario) VALUES (:fecha, :hora, :td, :paciente, :documento, :dir, :tel, :edad, :fechan, :mconsulta,:alerta, :tipodiagprin, :diagprin, :diagrel1, :diagrel2, :procedimiento, :consulta, :complicacion, :evolucion, :usuario, :docusuario)";
      try{
        $conexion = new Conexion();
        $stmt = $conexion->conectar()->prepare($sql);
        $stmt->bindParam(':fecha', $datosEM['fecha'],PDO::PARAM_STR);
        $stmt->bindParam(':hora', $datosEM['hora'],PDO::PARAM_STR);
        $stmt->bindParam(':td', $datosEM['td'],PDO::PARAM_STR);
        $stmt->bindParam(':paciente', $datosEM['paciente'],PDO::PARAM_STR);
        $stmt->bindParam(':documento', $datosEM['documento'],PDO::PARAM_STR);
        $stmt->bindParam(':dir', $datosEM['dir'],PDO::PARAM_STR);
        $stmt->bindParam(':tel', $datosEM['tel'],PDO::PARAM_STR);
        $stmt->bindParam(':edad', $datosEM['edad'],PDO::PARAM_STR);
        $stmt->bindParam(':fechan', $datosEM['fechan'],PDO::PARAM_STR);
        $stmt->bindParam(':mconsulta', $datosEM['mconsulta'],PDO::PARAM_STR);
        $stmt->bindParam(':alerta', $datosEM['alerta'],PDO::PARAM_STR);
        $stmt->bindParam(':tipodiagprin', $datosEM['tipodiagprin'],PDO::PARAM_STR);
        $stmt->bindParam(':diagprin', $datosEM['diagprin'],PDO::PARAM_STR);
        $stmt->bindParam(':diagrel1', $datosEM['diagrel1'],PDO::PARAM_STR);
        $stmt->bindParam(':diagrel2', $datosEM['diagrel2'],PDO::PARAM_STR);
        $stmt->bindParam(':procedimiento', $datosEM['procedimiento'],PDO::PARAM_STR);
        $stmt->bindParam(':consulta', $datosEM['consulta'],PDO::PARAM_STR);
        $stmt->bindParam(':complicacion', $datosEM['complicacion'],PDO::PARAM_STR);
        $stmt->bindParam(':evolucion', $datosEM['evolucion'],PDO::PARAM_STR);
        $stmt->bindParam(':usuario', $datosEM['usuario'],PDO::PARAM_STR);
        $stmt->bindParam(':docusuario', $datosEM['docusuario'],PDO::PARAM_STR);

        if($stmt->execute()){
          return 'success';
        }else{
          return 'error';
        }
      } catch(Exception $e){
        return $e;
      }
    }

    public function borrarEMModelo($id){
      $sql = "DELETE FROM tbl_evolucion WHERE id = :id";
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
  }
?>