<?php 
  include_once('db.php');

  class AgendaModelo extends Conexion{
    public function tablaAgenProModelo(){
      $sql = "SELECT * FROM tbl_usuarios WHERE nivel = :nivel";
      try {
        $nivel = 2;
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

    public function registrarAgendaModelo($datosCita){
      $sql = "INSERT INTO tbl_agenda(fecha,horag,nprofesional,dprofesional,npaciente,dpaciente,tpaciente,estado,obs) VALUES (:fecha, :hora, :profesional, :docp, :paciente, :cedula, :telefono, :nivel, :obs)";
      try{
        $conexion = new Conexion();
        $stmt = $conexion->conectar()->prepare($sql);
        $stmt->bindParam(':fecha', $datosCita['fecha'],PDO::PARAM_STR);
        $stmt->bindParam(':hora', $datosCita['hora'],PDO::PARAM_STR);
        $stmt->bindParam(':profesional', $datosCita['profesional'],PDO::PARAM_STR);
        $stmt->bindParam(':docp', $datosCita['docp'],PDO::PARAM_STR);
        $stmt->bindParam(':paciente', $datosCita['paciente'],PDO::PARAM_STR);
        $stmt->bindParam(':cedula', $datosCita['cedula'],PDO::PARAM_STR);
        $stmt->bindParam(':telefono', $datosCita['telefono'],PDO::PARAM_STR);
        $stmt->bindParam(':nivel', $datosCita['nivel'],PDO::PARAM_STR);
        $stmt->bindParam(':obs', $datosCita['obs'],PDO::PARAM_STR);

        if($stmt->execute()){
          return 'success';
        }else{
          return 'error';
        }
      } catch(Exception $e){
        return $e;
      }
    }

    public function borrarCitaModelo($id){
      $sql = "DELETE FROM tbl_agenda WHERE id = :id";
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

    public function consultarCitaAgendaModelo($id){
      $sql = "SELECT * FROM tbl_agenda WHERE id = :id";
      try{
        $conexion = new Conexion();
        $stmt = $conexion->conectar()->prepare($sql);
        $stmt->bindParam(':id', $id,PDO::PARAM_STR);
        if($stmt->execute()){
          return $stmt->fetchAll();
        }else{
          return 'error';
        }
      } catch(Exception $e){
        return $e;
      }
    }

    public function editarAgendaModelo($datosAgenda){
      $sql = "UPDATE tbl_agenda set fecha = :fecha, horag = :horag, nprofesional = :nprofesional, dprofesional = :docp, npaciente = :npaciente, dpaciente = :cedula , tpaciente = :tpaciente, estado = :nivel, obs = :obs WHERE id = :id";
      try{
        
        $conexion = new Conexion();
        $stmt = $conexion->conectar()->prepare($sql);
        $stmt->bindParam(':fecha', $datosAgenda['fecha'],PDO::PARAM_STR);
        $stmt->bindParam(':horag', $datosAgenda['hora'],PDO::PARAM_STR);
        $stmt->bindParam(':nprofesional', $datosAgenda['profesional'],PDO::PARAM_STR);
        $stmt->bindParam(':docp', $datosAgenda['docp'],PDO::PARAM_STR);
        $stmt->bindParam(':npaciente', $datosAgenda['paciente'],PDO::PARAM_STR);
        $stmt->bindParam(':cedula', $datosAgenda['cedula'],PDO::PARAM_STR);
        $stmt->bindParam(':tpaciente', $datosAgenda['telefono'],PDO::PARAM_STR);
        $stmt->bindParam(':nivel', $datosAgenda['nivel'],PDO::PARAM_STR);
        $stmt->bindParam(':obs', $datosAgenda['obs'],PDO::PARAM_STR);
        $stmt->bindParam(':id', $datosAgenda['id'],PDO::PARAM_INT);

        $stmt->execute();
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