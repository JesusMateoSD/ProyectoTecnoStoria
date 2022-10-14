<?php 
  include_once('db.php');

  class AgendaModelo extends Conexion{
    public function tablaAgenProModelo(){
      $sql = "SELECT * FROM tbl_usuarios WHERE nivel > :nivel";
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
        $nivel = 2;
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