<?php
	include_once('db.php');
	class PagosModelo extends Conexion{
		public function TablasTarifaModelo(){
			$sql = "SELECT * FROM tbl_tarifa";
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

		public function borrarTarifaModelo($id){
			$sql = "DELETE FROM tbl_tarifa WHERE id = :id";
      try{
        $conexion = new Conexion();
        $stmt = $conexion->conectar()->prepare($sql);
        $stmt->bindParam(':id', $id,PDO::PARAM_INT);
        if($stmt->execute()){
          return 'success';
        }else{
          return 'error';
        }
      } catch(Exception $e){
        return $e;
      }
		}

		public function registrarTarifaModelo($datosTarifa){
			$sql = "INSERT INTO tbl_tarifa(producto,precio,precio1) VALUES (:producto, :precio, :precio1)";
	    try {
	      $conexion = new Conexion();
	      $stmt = $conexion->conectar()->prepare($sql);
	      $stmt->bindParam(':producto', $datosTarifa['producto'],PDO::PARAM_STR);
	      $stmt->bindParam(':precio', $datosTarifa['precio'],PDO::PARAM_STR);
	      $stmt->bindParam(':precio1', $datosTarifa['precio1'],PDO::PARAM_STR);
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

	  public function TablaProductoModelo($producto){
	  	$sql = "SELECT precio, precio1 FROM tbl_tarifa WHERE producto = :producto";
	    try {
	      $conexion = new Conexion();
	      $stmt = $conexion->conectar()->prepare($sql);
	      $stmt->bindParam(':producto', $producto,PDO::PARAM_STR);
	      if($stmt->execute()){
	        return $stmt->fetchAll();
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

	  public function TablaFacturaPagosModelo(){
	  	$sql = "SELECT * FROM tbl_dfacturap";
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

	  public function registrarPagoTempModelo($datosPagoT){
	  	$sql = "INSERT INTO tbl_dfacturap(nfactura, fecha,documento,nombre,producto,valor,cantidad,total,usuario,docusuario) VALUES (:nfactura, :fecha, :cedula, :paciente, :productos, :valor, :cantidad, :total, :usuario, :docusuario)";
      try {
        $conexion = new Conexion();
        $stmt = $conexion->conectar()->prepare($sql);
        $stmt->bindParam(':nfactura', $datosPagoT['nfactura'],PDO::PARAM_STR);
        $stmt->bindParam(':fecha', $datosPagoT['fecha'],PDO::PARAM_STR);
        $stmt->bindParam(':cedula', $datosPagoT['cedula'],PDO::PARAM_STR);
        $stmt->bindParam(':paciente', $datosPagoT['paciente'],PDO::PARAM_STR);
        $stmt->bindParam(':productos', $datosPagoT['productos'],PDO::PARAM_STR);
        $stmt->bindParam(':valor', $datosPagoT['valor'],PDO::PARAM_INT);
        $stmt->bindParam(':cantidad', $datosPagoT['cantidad'],PDO::PARAM_STR);
        $stmt->bindParam(':total', $datosPagoT['total'],PDO::PARAM_INT);
        $stmt->bindParam(':usuario', $datosPagoT['usuario'],PDO::PARAM_STR);
        $stmt->bindParam(':docusuario', $datosPagoT['docusuario'],PDO::PARAM_STR);
        
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

	  public function borrarPagoTempModelo($id){
	  	$sql = "DELETE FROM tbl_dfacturap WHERE id = :id";
      try{
        $conexion = new Conexion();
        $stmt = $conexion->conectar()->prepare($sql);
        $stmt->bindParam(':id', $id,PDO::PARAM_INT);
        if($stmt->execute()){
          return 'success';
        }else{
          return 'error';
        }
      } catch(Exception $e){
        return $e;
      }
	  }

	  public function registrarPagoDModelo(){
	  	$sql = "INSERT INTO tbl_dfactura(nfactura, fecha,documento,nombre,producto,valor,cantidad,total,usuario,docusuario) SELECT nfactura, fecha,documento,nombre,producto,valor,cantidad,total,usuario,docusuario FROM tbl_dfacturap";
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

	  public function registrarPagoModelo(){
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

	  public function BorrarPagosTempControlador(){
	  	$sql = "DELETE FROM tbl_dfacturap";
      try{
        $conexion = new Conexion();
        $stmt = $conexion->conectar()->prepare($sql);
        if($stmt->execute()){
          return 'success';
        }else{
          return 'error';
        }
      } catch(Exception $e){
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

	  public function TablaFacturaDetControlador($factura){
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

	  public function TablaFacturaDFechasModelo($fecha){
	  	$sql = "SELECT * FROM tbl_dfactura  WHERE fecha = :fecha";
      try {
        $conexion = new Conexion();
        $stmt = $conexion->conectar()->prepare($sql);
        $stmt->bindParam(':fecha', $fecha,PDO::PARAM_INT);
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

	  public function TablaDFacturaTodoModelo($fechai,$fechaf){
	  	$sql = "SELECT * FROM tbl_dfactura  WHERE fecha BETWEEN :fechai AND :fechaf";
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