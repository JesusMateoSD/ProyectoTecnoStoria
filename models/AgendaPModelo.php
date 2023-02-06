<?php 
  include_once('db.php');

  class AgendaPModelo extends Conexion{
    public function LimpiarAgendaPModelo(){
      $sql = "DELETE FROM tbl_agendap";
      try{
        $conexion = new Conexion();
        $stmt = $conexion->conectar()->prepare($sql);
        if($stmt->execute()){
          return 'success';
        }else{
          return 'error';
        }
      } catch(Exception $e){
        return $e;
      }
    }

    public function InsertarFechaAgendaPModelo($Cita){
      $sql = "INSERT INTO tbl_agendap(idh,hora,id,fecha,hora1,nprofesional,dprofesional,npaciente,dpaciente,tpaciente,estado,obs) VALUES (:idh, :hora, :idag, :fecha, :horag, :nprofesional, :dprofesional,:npaciente, :dpaciente,:tpaciente, :estado, :obs)";
      try{
        $conexion = new Conexion();
        $stmt = $conexion->conectar()->prepare($sql);
        $stmt->bindParam(':idh', $Cita['idh'],PDO::PARAM_INT);
        $stmt->bindParam(':hora', $Cita['hora'],PDO::PARAM_STR);
        $stmt->bindParam(':idag', $Cita['idag'],PDO::PARAM_INT);
        $stmt->bindParam(':fecha', $Cita['fecha'],PDO::PARAM_STR);
        $stmt->bindParam(':horag', $Cita['horag'],PDO::PARAM_STR);
        $stmt->bindParam(':nprofesional', $Cita['nprofesional'],PDO::PARAM_STR);
        $stmt->bindParam(':dprofesional', $Cita['dprofesional'],PDO::PARAM_STR);
        $stmt->bindParam(':npaciente', $Cita['npaciente'],PDO::PARAM_STR);
        $stmt->bindParam(':dpaciente', $Cita['dpaciente'],PDO::PARAM_STR);
        $stmt->bindParam(':tpaciente', $Cita['tpaciente'],PDO::PARAM_STR);
        $stmt->bindParam(':estado', $Cita['estado'],PDO::PARAM_STR);
        $stmt->bindParam(':obs', $Cita['obs'],PDO::PARAM_STR);

        if($stmt->execute()){
          return 'success';
        }else{
          return 'error';
        }
      } catch(Exception $e){
        return $e;
      }
    }

    public function TablaAgendaPModelo(){
      $sql = "SELECT hora,id,fecha,nprofesional,dpaciente,npaciente,tpaciente,estado,obs FROM tbl_agendap ORDER BY idh ASC";
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
  }
?>