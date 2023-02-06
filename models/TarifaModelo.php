<?php
	include_once('db.php');
	class TarifaModelo extends Conexion{
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

		public function TablaProductoTarifaModelo($producto){
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
	}
?>