<?php 
  include_once('db.php');

  class CupsModelo extends Conexion{
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

    public function registrarCUPSModelo($datosCUPS){
      $sql = "INSERT INTO tbl_cups(codigo,nombre) VALUES (:codigo, :nombre)";
      try{
        $conexion = new Conexion();
        $stmt = $conexion->conectar()->prepare($sql);
        $stmt->bindParam(':codigo', $datosCUPS['codigo'],PDO::PARAM_STR);
        $stmt->bindParam(':nombre', $datosCUPS['nombre'],PDO::PARAM_STR);

        if($stmt->execute()){
          return 'success';
        }else{
          return 'error';
        }
      } catch(Exception $e){
        return $e;
      }
    }

    public function borrarCUPSModelo($id){
      $sql = "DELETE FROM tbl_cups WHERE id = :id";
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