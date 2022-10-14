<?php 

include_once('db.php');

class ConsultorioModelo extends Conexion{
  public function registrarConsultorioModelo($datosConsultorio){

    $sql = "INSERT INTO tbl_consultorios(nombre,nit,direccion,telefono,correo,foto,ciudad,depto,capb,napb) VALUES (:nombre,:nit,:direccion,:telefono,:correo,:foto,:ciudad,:depto,:capb,:napb)";
    try {
      $conexion = new Conexion();
      $stmt = $conexion->conectar()->prepare($sql);
      $stmt->bindParam(':nombre', $datosConsultorio['nombre'],PDO::PARAM_STR);
      $stmt->bindParam(':nit', $datosConsultorio['nit'],PDO::PARAM_STR);
      $stmt->bindParam(':direccion', $datosConsultorio['direccion'],PDO::PARAM_STR);
      $stmt->bindParam(':telefono', $datosConsultorio['telefono'],PDO::PARAM_STR);
      $stmt->bindParam(':correo', $datosConsultorio['correo'],PDO::PARAM_STR);
      $stmt->bindParam(':foto', $datosConsultorio['destino'],PDO::PARAM_STR);
      $stmt->bindParam(':ciudad', $datosConsultorio['ciudad'],PDO::PARAM_STR);
      $stmt->bindParam(':depto', $datosConsultorio['depto'],PDO::PARAM_STR);
      $stmt->bindParam(':capb', $datosConsultorio['capb'],PDO::PARAM_STR);
      $stmt->bindParam(':napb', $datosConsultorio['napb'],PDO::PARAM_STR);
      
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

  public function editarConsultorioModelo($datosConsultorio){
    $sql = "UPDATE tbl_consultorios SET nombre = :nombre , nit = :nit , direccion = :direccion , telefono = :telefono , correo = :correo , ciudad = :ciudad , depto = :depto , capb = :capb , napb = :napb WHERE id = :id";
    try{
      
      $conexion = new Conexion();
      $stmt = $conexion->conectar()->prepare($sql);
      $stmt->bindParam(':nombre', $datosConsultorio['nombre'],PDO::PARAM_STR);
      $stmt->bindParam(':nit', $datosConsultorio['nit'],PDO::PARAM_STR);
      $stmt->bindParam(':direccion', $datosConsultorio['direccion'],PDO::PARAM_STR);
      $stmt->bindParam(':telefono', $datosConsultorio['telefono'],PDO::PARAM_STR);
      $stmt->bindParam(':correo', $datosConsultorio['correo'],PDO::PARAM_STR);
      $stmt->bindParam(':ciudad', $datosConsultorio['ciudad'],PDO::PARAM_STR);
      $stmt->bindParam(':depto', $datosConsultorio['depto'],PDO::PARAM_STR);
      $stmt->bindParam(':capb', $datosConsultorio['capb'],PDO::PARAM_STR);
      $stmt->bindParam(':napb', $datosConsultorio['napb'],PDO::PARAM_STR);
      $stmt->bindParam(':id', $datosConsultorio['id'],PDO::PARAM_INT);

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

  public function tablaConsultoriosModelo(){
    $sql = "SELECT * FROM tbl_consultorios";
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

  public function eliminarConsultorioModelo($id){
    $sql = "DELETE FROM tbl_consultorios WHERE id = :id";
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

  public function consultarConsultorioModelo($id){
    $sql = "SELECT * FROM tbl_consultorios WHERE id = :id";
    try{
      $conexion = new Conexion();
      $stmt = $conexion->conectar()->prepare($sql);
      $stmt->bindParam(':id', $id,PDO::PARAM_INT);

      if($stmt->execute()){
        return $stmt->fetchAll();
      }else{
        return 'error';
      }
    } catch(Exception $e){
      return $e;
    }
  }

}
?>