<?php 
  include_once('db.php');

  class ModeloConsentimientoModelo extends Conexion{
    public function TablaModeloCModelo(){
      $sql = "SELECT * FROM tbl_modeloc";
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

    public function TablaModeloConsModelo($nombre){
      $sql = "SELECT * FROM tbl_modeloc WHERE nombre = :nombre";
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

    public function registrarModeloCModelo($datosModC){
      $sql = "INSERT INTO tbl_modeloc(nombre,modelo) VALUES (:nombre, :modelo)";
      try{
        $conexion = new Conexion();
        $stmt = $conexion->conectar()->prepare($sql);
        $stmt->bindParam(':nombre', $datosModC['nombre'],PDO::PARAM_STR);
        $stmt->bindParam(':modelo', $datosModC['modelo'],PDO::PARAM_STR);

        if($stmt->execute()){
          return 'success';
        }else{
          return 'error';
        }
      } catch(Exception $e){
        return $e;
      }
    }

    public function borrarModeloCModelo($id){
      $sql = "DELETE FROM tbl_modeloc WHERE id = :id";
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
