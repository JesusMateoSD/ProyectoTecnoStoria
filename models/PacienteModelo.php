<?php 
	include_once('db.php');

	class PacienteModelo extends Conexion{
		public function consultarPacienteAgendaModelo($documento){
      $sql = "SELECT * FROM tbl_pacientes WHERE documento = :documento";
      try {
        $conexion = new Conexion();
        $stmt = $conexion->conectar()->prepare($sql);
        $stmt->bindParam(':documento', $documento,PDO::PARAM_STR);
        $stmt->execute();
        if($stmt->rowCount() == 1){
          return $stmt->fetch();
        }
      } catch (Exception $e) {
        return $e;
      }
    }

    public function tipoDocumentoModelo(){
      $sql = "SELECT * FROM tbl_tipodocumento";
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

    public function DepartamentosPacienteModelo(){
      $sql = "SELECT * FROM tbl_departamentos";
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

    public function TablaPacientesModelo(){
      $sql = "SELECT * FROM tbl_pacientes";
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

    public function registrarPacienteModelo($datosPaciente){

      $sql = "INSERT INTO tbl_pacientes(paciente,tipodocumento,documento,fecha,fechan,edad,sexo,direccion,telefono,correo,ocupacion,eps,dpto,municipio,acudiente,direcciona,telefonoa,usuario,docusuario) VALUES (:paciente, :tipodocumento, :documento, :fecha, :fechan, :edad, :sexo, :direccion, :telefono, :correo, :ocupacion, :eps,:dpto, :municipio, :acudiente, :direcciona, :telefonoa, :usuario, :docusuario)";
      try {
        $conexion = new Conexion();
        $stmt = $conexion->conectar()->prepare($sql);
        $stmt->bindParam(':paciente', $datosPaciente['paciente'],PDO::PARAM_STR);
        $stmt->bindParam(':tipodocumento', $datosPaciente['tipodocumento'],PDO::PARAM_STR);
        $stmt->bindParam(':documento', $datosPaciente['documento'],PDO::PARAM_STR);
        $stmt->bindParam(':fecha', $datosPaciente['fecha'],PDO::PARAM_STR);
        $stmt->bindParam(':fechan', $datosPaciente['fechan'],PDO::PARAM_STR);
        $stmt->bindParam(':edad', $datosPaciente['edad'],PDO::PARAM_STR);
        $stmt->bindParam(':sexo', $datosPaciente['sexo'],PDO::PARAM_STR);
        $stmt->bindParam(':direccion', $datosPaciente['dir'],PDO::PARAM_STR);
        $stmt->bindParam(':telefono', $datosPaciente['telefono'],PDO::PARAM_STR);
        $stmt->bindParam(':correo', $datosPaciente['correo'],PDO::PARAM_STR);
        $stmt->bindParam(':ocupacion', $datosPaciente['ocupacion'],PDO::PARAM_STR);
        $stmt->bindParam(':eps', $datosPaciente['eps'],PDO::PARAM_STR);
        $stmt->bindParam(':dpto', $datosPaciente['dpto'],PDO::PARAM_STR);
        $stmt->bindParam(':municipio', $datosPaciente['municipio'],PDO::PARAM_STR);
        $stmt->bindParam(':acudiente', $datosPaciente['acudiente'],PDO::PARAM_STR);
        $stmt->bindParam(':direcciona', $datosPaciente['direcciona'],PDO::PARAM_STR);
        $stmt->bindParam(':telefonoa', $datosPaciente['telefonoa'],PDO::PARAM_STR);
        $stmt->bindParam(':usuario', $datosPaciente['usuario'],PDO::PARAM_STR);
        $stmt->bindParam(':docusuario', $datosPaciente['docusuario'],PDO::PARAM_STR);
        
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

    public function MunicipiosPacienteModelo($dpto){
      $sql = "SELECT id_municipio, municipio FROM tbl_municipios WHERE id_departamento = :dpto";
      try {
        $conexion = new Conexion();
        $stmt = $conexion->conectar()->prepare($sql);
        $stmt->bindParam(':dpto', $dpto,PDO::PARAM_STR);
        if($stmt->execute()){
          return $stmt->fetchAll();
        }
      } catch (Exception $e) {
        return $e;
      }
    }

    public function borrarPacienteModelo($id){
      $sql = "DELETE FROM tbl_pacientes WHERE id = :id";
      try{
        $conexion = new Conexion();
        $stmt = $conexion->conectar()->prepare($sql);
        $stmt->bindParam(':id', $id,PDO::PARAM_INT);
        if($stmt->execute()){
          echo 'Bien';
        }else{
          echo 'Mal';
        }
      } catch(Exception $e){
        return $e;
      }
   }
	}
?>
