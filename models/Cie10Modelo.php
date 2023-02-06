<?php 
  include_once('db.php');

  class Cie10Modelo extends Conexion{
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

    public function registrarCIE10Modelo($datosCIE10){
      $sql = "INSERT INTO tbl_cie10(codigo,nombre) VALUES (:codigo, :nombre)";
      try{
        $conexion = new Conexion();
        $stmt = $conexion->conectar()->prepare($sql);
        $stmt->bindParam(':codigo', $datosCIE10['codigo'],PDO::PARAM_STR);
        $stmt->bindParam(':nombre', $datosCIE10['nombre'],PDO::PARAM_STR);

        if($stmt->execute()){
          return 'success';
        }else{
          return 'error';
        }
      } catch(Exception $e){
        return $e;
      }
    }

    public function borrarCIE10Modelo($id){
      $sql = "DELETE FROM tbl_cie10 WHERE id = :id";
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