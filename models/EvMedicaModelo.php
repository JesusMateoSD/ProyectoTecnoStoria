<?php
  include_once('db.php');

  class EvMedicaModelo extends Conexion{
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