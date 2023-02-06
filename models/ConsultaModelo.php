<?php 
  include_once('db.php');

  class ConsultaModelo extends Conexion{
    public function TablaConsultasModelo(){
      $sql = "SELECT * FROM tbl_consulta";
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