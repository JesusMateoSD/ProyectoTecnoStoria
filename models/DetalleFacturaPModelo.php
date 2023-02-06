<?php
	include_once('db.php');
	class DetalleFacturaPModelo extends Conexion{
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
	  	$sql = "INSERT INTO tbl_dfacturap(nfactura, fecha,documento,nombre,producto,valor,cantidad,total,usuario,docusuario) VALUES (:nfactura, :fecha, :documento, :nombre, :productos, :valor, :cantidad, :total, :usuario, :docusuario)";
      try {
        $conexion = new Conexion();
        $stmt = $conexion->conectar()->prepare($sql);
        $stmt->bindParam(':nfactura', $datosPagoT['nfactura'],PDO::PARAM_STR);
        $stmt->bindParam(':fecha', $datosPagoT['fecha'],PDO::PARAM_STR);
        $stmt->bindParam(':documento', $datosPagoT['documento'],PDO::PARAM_STR);
        $stmt->bindParam(':nombre', $datosPagoT['nombre'],PDO::PARAM_STR);
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

	  public function BorrarPagosTempModelo(){
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
	}
?>