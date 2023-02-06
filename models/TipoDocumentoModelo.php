<?php 
	include_once('db.php');

	class TipoDocumentoModelo extends Conexion{
		public function tipoDocumentoModelo(){
      $sql = "SELECT * FROM tbl_tipodocumento";
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