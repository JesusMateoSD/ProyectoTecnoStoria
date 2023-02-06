<?php 
  include_once('db.php');

  class RecetarioModelo extends Conexion{
    public function TablaRecetarioModelo(){
      $sql = "SELECT * FROM tbl_recetario";
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

    public function registrarRecetarioModelo($datosRece){
      $sql = "INSERT INTO tbl_recetario(fecha,hora,tipodocumento,paciente,documento,direccion,telefono,edad,fechan,modelos,recetario,usuario,docusuario) VALUES (:fecha, :hora, :td, :paciente, :documento, :dir, :tel, :edad, :fechan, :modelos, :recetario, :usuario, :docusuario)";
      try{
        $conexion = new Conexion();
        $stmt = $conexion->conectar()->prepare($sql);
        $stmt->bindParam(':fecha', $datosRece['fecha'],PDO::PARAM_STR);
        $stmt->bindParam(':hora', $datosRece['hora'],PDO::PARAM_STR);
        $stmt->bindParam(':td', $datosRece['td'],PDO::PARAM_STR);
        $stmt->bindParam(':paciente', $datosRece['paciente'],PDO::PARAM_STR);
        $stmt->bindParam(':documento', $datosRece['documento'],PDO::PARAM_STR);
        $stmt->bindParam(':dir', $datosRece['dir'],PDO::PARAM_STR);
        $stmt->bindParam(':tel', $datosRece['tel'],PDO::PARAM_STR);
        $stmt->bindParam(':edad', $datosRece['edad'],PDO::PARAM_STR);
        $stmt->bindParam(':fechan', $datosRece['fechan'],PDO::PARAM_STR);
        $stmt->bindParam(':modelos', $datosRece['modelos'],PDO::PARAM_STR);
        $stmt->bindParam(':recetario', $datosRece['recetario'],PDO::PARAM_STR);
        $stmt->bindParam(':usuario', $datosRece['usuario'],PDO::PARAM_STR);
        $stmt->bindParam(':docusuario', $datosRece['docusuario'],PDO::PARAM_STR);

        if($stmt->execute()){
          return 'success';
        }else{
          return 'error';
        }
      } catch(Exception $e){
        return $e;
      }
    }

    public function borrarRecetarioModelo($id){
      $sql = "DELETE FROM tbl_recetario WHERE id = :id";
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

    public function TablaRecetarioIdModelo($id){
      $sql ="SELECT * FROM tbl_recetario WHERE id=:id";
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