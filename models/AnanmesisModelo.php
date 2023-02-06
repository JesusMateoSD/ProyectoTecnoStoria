<?php
  include_once('db.php');

  class AnanmesisModelo extends Conexion{
    public function TablaCausasExternasControlador(){
      $sql = "SELECT * FROM tbl_causaexterna";
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

    public function TablaFinalidadConsultasModelo(){
      $sql = "SELECT * FROM tbl_finalidadc";
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

    public function TablaAnanmesisModelo(){
      $sql = "SELECT * FROM tbl_ananmesis";
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
    
    public function TablaAnanmesisIdModelo($id){
      $sql = "SELECT * FROM tbl_ananmesis WHERE id = :id";
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

    public function borrarAnanmesisModelo($id){
      $sql = "DELETE FROM tbl_ananmesis WHERE id = :id";
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

  public function registrarAnanmesisModelo($datosAn){
    $sql = "INSERT INTO tbl_ananmesis(fecha,hora,tipodocumento,paciente,documento,direccion,telefono,edad,fechan,causaexterna,finalidadconsulta,motivodelaconsulta,enfermedadactual,revisionxsistema,uanticonceptivos,menarquia,fum,g,a,p,c,feultparto,cardvasculares,pulmonares,digestivos,diabetes,renales,quirurgicos,traumaticos,alergicos,transfusiones,medicamentos,alcohol,drogas,cigarrillo,inmunizaciones,otros,antfam,cabeza,cara,cuello,torax,corazon,pulmones,abdypel,genext,colvert,neurologico,miemsup,mieminf,pielyfaneras,artic,fuerzmus,reflejos,parescraneales,psicoemocional,fc,fr,ta,t,so2,pesokg,tallacm,imc,resultadoimc,impdiag,condseguir,incapacidad,usuario,docusuario)  VALUES (:fecha, :hora, :td, :paciente,:documento,:dir,:tel,:edad,:fechan,:causaexterna,:finalidadconsulta,:mconsulta,:eactual,:rsistema,:uanti,:menarquia,:fum,:g,:a,:p,:c,:fuparto,:cv,:pulm,:dige,:diab,:rnl,:quirur,:traum,:aler,:trfs,:mdcm,:alc,:drogas,:ciga,:inm,:otros,:afm,:cabeza,:cara,:cuello,:torax,:corazon,:pulmones,:abdpelvis,:genext,:colver,:neurologico,:miemsup,:mieminf,:pifan,:articu,:fuermus,:reflejos,:parescraneales,:psicoemocional,:fc,:fr,:ta,:t,:so2,:pesokg,:tallacm,:imc,:lectura,:imd,:conds,:incap,:usuario,:docusuario)";
      try{
        $conexion = new Conexion();
        $stmt = $conexion->conectar()->prepare($sql);
        $stmt->bindParam(':fecha', $datosAn['fecha'],PDO::PARAM_STR);
        $stmt->bindParam(':hora', $datosAn['hora'],PDO::PARAM_STR);
        $stmt->bindParam(':td', $datosAn['td'],PDO::PARAM_STR);
        $stmt->bindParam(':paciente', $datosAn['paciente'],PDO::PARAM_STR);
        $stmt->bindParam(':documento', $datosAn['documento'],PDO::PARAM_STR);
        $stmt->bindParam(':dir', $datosAn['dir'],PDO::PARAM_STR);
        $stmt->bindParam(':tel', $datosAn['tel'],PDO::PARAM_STR);
        $stmt->bindParam(':edad', $datosAn['edad'],PDO::PARAM_STR);
        $stmt->bindParam(':fechan', $datosAn['fechan'],PDO::PARAM_STR);
        $stmt->bindParam(':causaexterna', $datosAn['causaexterna'],PDO::PARAM_STR);
        $stmt->bindParam(':finalidadconsulta', $datosAn['finalidadconsulta'],PDO::PARAM_STR);
        $stmt->bindParam(':mconsulta', $datosAn['mconsulta'],PDO::PARAM_STR);
        $stmt->bindParam(':eactual', $datosAn['eactual'],PDO::PARAM_STR);
        $stmt->bindParam(':rsistema', $datosAn['rsistema'],PDO::PARAM_STR);
        $stmt->bindParam(':uanti', $datosAn['uanti'],PDO::PARAM_STR);
        $stmt->bindParam(':menarquia', $datosAn['menarquia'],PDO::PARAM_STR);
        $stmt->bindParam(':fum', $datosAn['fum'],PDO::PARAM_STR);
        $stmt->bindParam(':g', $datosAn['g'],PDO::PARAM_STR);
        $stmt->bindParam(':a', $datosAn['a'],PDO::PARAM_STR);
        $stmt->bindParam(':p', $datosAn['p'],PDO::PARAM_STR);
        $stmt->bindParam(':c', $datosAn['c'],PDO::PARAM_STR);
        $stmt->bindParam(':fuparto', $datosAn['fuparto'],PDO::PARAM_STR);
        $stmt->bindParam(':cv', $datosAn['cv'],PDO::PARAM_STR);
        $stmt->bindParam(':pulm', $datosAn['pulm'],PDO::PARAM_STR);
        $stmt->bindParam(':dige', $datosAn['dige'],PDO::PARAM_STR);
        $stmt->bindParam(':diab', $datosAn['diab'],PDO::PARAM_STR);
        $stmt->bindParam(':rnl', $datosAn['rnl'],PDO::PARAM_STR);
        $stmt->bindParam(':quirur', $datosAn['quirur'],PDO::PARAM_STR);
        $stmt->bindParam(':traum', $datosAn['traum'],PDO::PARAM_STR);
        $stmt->bindParam(':aler', $datosAn['aler'],PDO::PARAM_STR);
        $stmt->bindParam(':trfs', $datosAn['trfs'],PDO::PARAM_STR);
        $stmt->bindParam(':mdcm', $datosAn['mdcm'],PDO::PARAM_STR);
        $stmt->bindParam(':alc', $datosAn['alc'],PDO::PARAM_STR);
        $stmt->bindParam(':drogas', $datosAn['drogas'],PDO::PARAM_STR);
        $stmt->bindParam(':ciga', $datosAn['ciga'],PDO::PARAM_STR);
        $stmt->bindParam(':inm', $datosAn['inm'],PDO::PARAM_STR);
        $stmt->bindParam(':otros', $datosAn['otros'],PDO::PARAM_STR);
        $stmt->bindParam(':afm', $datosAn['afm'],PDO::PARAM_STR);
        $stmt->bindParam(':cabeza', $datosAn['cabeza'],PDO::PARAM_STR);
        $stmt->bindParam(':cara', $datosAn['cara'],PDO::PARAM_STR);
        $stmt->bindParam(':cuello', $datosAn['cuello'],PDO::PARAM_STR);
        $stmt->bindParam(':torax', $datosAn['torax'],PDO::PARAM_STR);
        $stmt->bindParam(':corazon', $datosAn['corazon'],PDO::PARAM_STR);
        $stmt->bindParam(':pulmones', $datosAn['pulmones'],PDO::PARAM_STR);
        $stmt->bindParam(':abdpelvis', $datosAn['abdpelvis'],PDO::PARAM_STR);
        $stmt->bindParam(':genext', $datosAn['genext'],PDO::PARAM_STR);
        $stmt->bindParam(':colver', $datosAn['colver'],PDO::PARAM_STR);
        $stmt->bindParam(':neurologico', $datosAn['neurologico'],PDO::PARAM_STR);
        $stmt->bindParam(':miemsup', $datosAn['miemsup'],PDO::PARAM_STR);
        $stmt->bindParam(':mieminf', $datosAn['mieminf'],PDO::PARAM_STR);
        $stmt->bindParam(':pifan', $datosAn['pifan'],PDO::PARAM_STR);
        $stmt->bindParam(':articu', $datosAn['articu'],PDO::PARAM_STR);
        $stmt->bindParam(':fuermus', $datosAn['fuermus'],PDO::PARAM_STR);
        $stmt->bindParam(':reflejos', $datosAn['reflejos'],PDO::PARAM_STR);
        $stmt->bindParam(':parescraneales', $datosAn['parescraneales'],PDO::PARAM_STR);
        $stmt->bindParam(':psicoemocional', $datosAn['psicoemocional'],PDO::PARAM_STR);
        $stmt->bindParam(':fc', $datosAn['fc'],PDO::PARAM_STR);
        $stmt->bindParam(':fr', $datosAn['fr'],PDO::PARAM_STR);
        $stmt->bindParam(':ta', $datosAn['ta'],PDO::PARAM_STR);
        $stmt->bindParam(':t', $datosAn['t'],PDO::PARAM_STR);
        $stmt->bindParam(':so2', $datosAn['so2'],PDO::PARAM_STR);
        $stmt->bindParam(':pesokg', $datosAn['pesokg'],PDO::PARAM_STR);
        $stmt->bindParam(':tallacm', $datosAn['tallacm'],PDO::PARAM_STR);
        $stmt->bindParam(':imc', $datosAn['imc'],PDO::PARAM_STR);
        $stmt->bindParam(':lectura', $datosAn['lectura'],PDO::PARAM_STR);
        $stmt->bindParam(':imd', $datosAn['imd'],PDO::PARAM_STR);
        $stmt->bindParam(':conds', $datosAn['conds'],PDO::PARAM_STR);
        $stmt->bindParam(':incap', $datosAn['incap'],PDO::PARAM_STR);
        $stmt->bindParam(':usuario', $datosAn['usuario'],PDO::PARAM_STR);
        $stmt->bindParam(':docusuario', $datosAn['docusuario'],PDO::PARAM_STR);

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