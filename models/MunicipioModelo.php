<?php 
  include_once('db.php');

  class MunicipioModelo extends Conexion{
    public function MunicipiosModelo($dpto){
      $sql = "SELECT id_municipio, municipio FROM tbl_municipios WHERE id_departamento = :dpto";
      try {
        $conexion = new Conexion();
        $stmt = $conexion->conectar()->prepare($sql);
        $stmt->bindParam(':dpto', $dpto,PDO::PARAM_STR);
        if($stmt->execute()){
          return $stmt->fetchAll();
        }
      } catch (Exception $e) {
        return $e;
      }
    }
  }
?>