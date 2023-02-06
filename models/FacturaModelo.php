<?php
	include_once('db.php');
	class FacturaModelo extends Conexion{
		public function TablaFacturaModelo(){
	    $sql = "SELECT max(nfactura) AS max_page from tbl_factura";
	    try {
	      $conexion = new Conexion();
	      $stmt = $conexion->conectar()->prepare($sql);
	      $stmt->execute();
	      if($stmt->rowCount() == 1){
	        return $stmt->fetch();
	      }
	    } catch (Exception $e) {
	      return $e;
	    }
	  }

	  public function TablaFacturaOrdModelo(){
	  	$sql = "SELECT * FROM tbl_factura ORDER BY id DESC";
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

	  public function registrarFacturaModelo(){
	  	$sql = "INSERT INTO tbl_factura(nfactura, fecha,documento,nombre,usuario,docusuario) SELECT nfactura, fecha,documento,nombre,usuario,docusuario FROM tbl_dfacturap LIMIT 1";
	    try {
	      $conexion = new Conexion();
	      $stmt = $conexion->conectar()->prepare($sql);
	      if($stmt->execute()){
          return 'success';
        }
        else{
          return 'error';
        }
	    } catch (Exception $e) {
	      return $e;
	    }
	  }

	  public function TablaFacturaIdModelo($id){
	  	$sql = "SELECT * FROM tbl_factura WHERE id = :id";
      try {
        $conexion = new Conexion();
        $stmt = $conexion->conectar()->prepare($sql);
        $stmt->bindParam(':id', $id,PDO::PARAM_INT);
        if($stmt->execute()){
          return $stmt->fetchAll();
        }
      } catch (Exception $e) {
        return $e;
      }
	  }
	}
?>