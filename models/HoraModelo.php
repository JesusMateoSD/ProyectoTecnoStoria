<?php 
  include_once('db.php');

  class HoraModelo extends Conexion{
    public function tablaHorasModelo(){
      $sql = "SELECT * FROM tbl_horas";
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

    public function UnionAgendaModelo($fechahoy){
      $sql = "SELECT * FROM tbl_horas H LEFT JOIN tbl_agenda A ON H.hora=A.horag AND A.fecha = :fechahoy";
      try {
        $conexion = new Conexion();
        $stmt = $conexion->conectar()->prepare($sql);
        $stmt->bindParam(':fechahoy', $fechahoy,PDO::PARAM_STR);
        if($stmt->execute()){
          return $stmt->fetchAll();
        }
      } catch (Exception $e) {
        return $e;
      }
    }
  }
?>