<?php
	include_once('db.php');
	class DetalleFacturaModelo extends Conexion{
	  public function registrarPagoDModelo(){
	  	$sql = "INSERT INTO tbl_dfactura(nfactura,fecha,documento,nombre,producto,valor,cantidad,total,usuario,docusuario) SELECT nfactura, fecha,documento,nombre,producto,valor,cantidad,total,usuario,docusuario FROM tbl_dfacturap";
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

	  public function ValorTotalFacturaModelo($factura){
	  	$sql = "SELECT SUM(total) as mtotal FROM tbl_dfactura WHERE nfactura = :factura";
	    try {
	      $conexion = new Conexion();
	      $stmt = $conexion->conectar()->prepare($sql);
	      $stmt->bindParam(':factura', $factura, PDO::PARAM_STR);
	      $stmt->execute();
	      if($stmt->rowCount() == 1){
	        $resulsql = $stmt->fetch();
	        return $resulsql;
	      } else {
	        return 'error';
	      }
	    } catch (Exception $e) {
	      return $e;
	    }
	  }

	  public function TablaFacturaDetModelo($factura){
	  	$sql = "SELECT * FROM tbl_dfactura WHERE nfactura = :factura";
      try {
        $conexion = new Conexion();
        $stmt = $conexion->conectar()->prepare($sql);
        $stmt->bindParam(':factura', $factura,PDO::PARAM_INT);
        if($stmt->execute()){
          return $stmt->fetchAll();
        }
      } catch (Exception $e) {
        return $e;
      }
	  }

	  public function ValorFacturaTotalFModelo($fecha){
	  	$sql = "SELECT SUM(total) as mtotal FROM tbl_dfactura WHERE fecha = :fecha";
	    try {
	      $conexion = new Conexion();
	      $stmt = $conexion->conectar()->prepare($sql);
	      $stmt->bindParam(':fecha', $fecha, PDO::PARAM_STR);
	      $stmt->execute();
	      if($stmt->rowCount() == 1){
	        $resulsql = $stmt->fetch();
	        return $resulsql;
	      } else {
	        return 'error';
	      }
	    } catch (Exception $e) {
	      return $e;
	    }
	  }

	  public function TablaFacturaDFechaModelo($fecha){
	  	$sql = "SELECT * FROM tbl_dfactura WHERE fecha = :fecha";
      try {
        $conexion = new Conexion();
        $stmt = $conexion->conectar()->prepare($sql);
        $stmt->bindParam(':fecha', $fecha,PDO::PARAM_STR);
        if($stmt->execute()){
          return $stmt->fetchAll();
        }
      } catch (Exception $e) {
        return $e;
      }
	  }

	  public function TablaFacturaFMensualModelo($fechai,$fechaf){
	  	$sql = "SELECT SUM(total) as mtotal FROM tbl_dfactura WHERE fecha BETWEEN :fechai AND :fechaf";
	    try {
	      $conexion = new Conexion();
	      $stmt = $conexion->conectar()->prepare($sql);
	      $stmt->bindParam(':fechai', $fechai, PDO::PARAM_STR);
	      $stmt->bindParam(':fechaf', $fechaf, PDO::PARAM_STR);
	      $stmt->execute();
	      if($stmt->rowCount() == 1){
	        $resulsql = $stmt->fetch();
	        return $resulsql;
	      } else {
	        return 'error';
	      }
	    } catch (Exception $e) {
	      return $e;
	    }
	  }

	  public function TablaDFacturaFechasModelo($fechai,$fechaf){
	  	$sql = "SELECT * FROM tbl_dfactura WHERE fecha BETWEEN :fechai AND :fechaf";
	    try {
	      $conexion = new Conexion();
	      $stmt = $conexion->conectar()->prepare($sql);
	      $stmt->bindParam(':fechai', $fechai, PDO::PARAM_STR);
	      $stmt->bindParam(':fechaf', $fechaf, PDO::PARAM_STR);
	      if($stmt->execute()){
          return $stmt->fetchAll();
        }
	    } catch (Exception $e) {
	      return $e;
	    }
	  }
	}
?>