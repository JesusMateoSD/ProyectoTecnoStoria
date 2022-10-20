<?php 
  include_once('db.php');

  class RecetarioModelo extends Conexion{
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
  }
?>