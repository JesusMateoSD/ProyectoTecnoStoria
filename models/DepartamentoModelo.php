<?php 
  include_once('db.php');

  class DepartamentoModelo extends Conexion{
    public function DptosModelo(){
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
  }
?>