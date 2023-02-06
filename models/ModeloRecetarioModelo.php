<?php 
  include_once('db.php');

  class ModeloRecetarioModelo extends Conexion{
    public function TablaModeloRecetarioModelo(){
      $sql = "SELECT * FROM tbl_modelor";
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
    
    public function TablaModeloRecetarioIdModelo($nombre){
      $sql = "SELECT * FROM tbl_modelor WHERE nombre = :nombre";
      try {
        $conexion = new Conexion();
        $stmt = $conexion->conectar()->prepare($sql);
        $stmt->bindParam(':nombre', $nombre,PDO::PARAM_STR);
        $stmt->execute();
        if($stmt->rowCount() == 1){
          return $stmt->fetch();
        }
      } catch (Exception $e) {
        return $e;
      }
    }

    public function registrarModeloRModelo($datosModR){
      $sql = "INSERT INTO tbl_modelor(nombre,modelo) VALUES (:nombre, :modelo)";
      try{
        $conexion = new Conexion();
        $stmt = $conexion->conectar()->prepare($sql);
        $stmt->bindParam(':nombre', $datosModR['nombre'],PDO::PARAM_STR);
        $stmt->bindParam(':modelo', $datosModR['modelo'],PDO::PARAM_STR);

        if($stmt->execute()){
          return 'success';
        }else{
          return 'error';
        }
      } catch(Exception $e){
        return $e;
      }
    }

    public function borrarModeloRModelo($id){
      $sql = "DELETE FROM tbl_modelor WHERE id = $id";
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
