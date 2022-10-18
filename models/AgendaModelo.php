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

    public function tablaHorasModelo(){
      $sql = "SELECT * FROM tbl_horas";
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

    public function UnionAgendaModelo($fechahoy){
      $sql = "SELECT * FROM tbl_horas H LEFT JOIN tbl_agenda A ON H.hora=A.horag AND A.fecha = :fechahoy";
      try {
        $conexion = new Conexion();
        $stmt = $conexion->conectar()->prepare($sql);
        $stmt->bindParam(':fechahoy', $fechahoy,PDO::PARAM_STR);
        if($stmt->execute()){
          return $stmt->fetchAll();
        }
      } catch (Exception $e) {
        return $e;
      }
    }

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

    public function TablaAgendaModelo(){
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

    public function registrarAgendaModelo($datosCita){
      $sql = "INSERT INTO tbl_agenda(fecha,horag,nprofesional,dprofesional,npaciente,dpaciente,tpaciente,estado,obs) VALUES (:fecha, :hora, :profesional, :docp, :paciente, :cedula, :telefono, :nivel, :obs)";
      try{
        $conexion = new Conexion();
        $stmt = $conexion->conectar()->prepare($sql);
        $stmt->bindParam(':fecha', $datosCita['fecha'],PDO::PARAM_INT);
        $stmt->bindParam(':hora', $datosCita['hora'],PDO::PARAM_STR);
        $stmt->bindParam(':profesional', $datosCita['profesional'],PDO::PARAM_INT);
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