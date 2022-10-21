<?php
  include_once('db.php');

  class OrdMedModelo extends Conexion{
    public function TablaRecetarioModelo(){
      $sql ="SELECT * FROM tbl_omedicas";
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

    public function registrarOrdMedModelo($datosOM){
      $sql = "INSERT INTO tbl_omedicas(fecha,hora,tipodocumento,paciente,documento,direccion,telefono,edad,fechan,ordenmedica,usuario,docusuario) VALUES (:fecha, :hora, :td, :paciente, :documento, :dir, :tel, :edad, :fechan, :ordenmedica, :usuario, :docusuario)";
      try{
        $conexion = new Conexion();
        $stmt = $conexion->conectar()->prepare($sql);
        $stmt->bindParam(':fecha', $datosOM['fecha'],PDO::PARAM_STR);
        $stmt->bindParam(':hora', $datosOM['hora'],PDO::PARAM_STR);
        $stmt->bindParam(':td', $datosOM['td'],PDO::PARAM_STR);
        $stmt->bindParam(':paciente', $datosOM['paciente'],PDO::PARAM_STR);
        $stmt->bindParam(':documento', $datosOM['documento'],PDO::PARAM_STR);
        $stmt->bindParam(':dir', $datosOM['dir'],PDO::PARAM_STR);
        $stmt->bindParam(':tel', $datosOM['tel'],PDO::PARAM_STR);
        $stmt->bindParam(':edad', $datosOM['edad'],PDO::PARAM_STR);
        $stmt->bindParam(':fechan', $datosOM['fechan'],PDO::PARAM_STR);
        $stmt->bindParam(':ordenmedica', $datosOM['ordenmedica'],PDO::PARAM_STR);
        $stmt->bindParam(':usuario', $datosOM['usuario'],PDO::PARAM_STR);
        $stmt->bindParam(':docusuario', $datosOM['docusuario'],PDO::PARAM_STR);

        if($stmt->execute()){
          return 'success';
        }else{
          return 'error';
        }
      } catch(Exception $e){
        return $e;
      }
    }

    public function borrarOrdMedModelo($id){
      $sql = "DELETE FROM tbl_omedicas WHERE id = :id";
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

    public function TablaOrdMedIdModelo($id){
      $sql = "SELECT * FROM tbl_omedicas WHERE id = :id";
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