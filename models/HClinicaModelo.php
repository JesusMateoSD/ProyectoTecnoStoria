<?php
  include_once('db.php');

  class HClinicaModelo extends Conexion{
    // public function validarDocumentoHCModelo($Doc){

    //   $sql = "SELECT * FROM tbl_pacientes WHERE documento=:cedula";
    //   try {
    //     $conexion = new Conexion();
    //     $stmt = $conexion->conectar()->prepare($sql);
    //     $stmt->bindParam(':cedula', $Doc,PDO::PARAM_STR);

    //     $stmt->execute();
    //     if($stmt->rowCount() == 1){
    //       $resulsql = $stmt->fetch();
    //       $_SESSION['activa'] = true;
    //       $_SESSION['scorreo'] = $resulsql['correo'];
    //       $_SESSION['sclave'] = $resulsql['pass'];
    //       $_SESSION['snombre'] = $resulsql['nombre'];
    //       $_SESSION['snivel'] = $resulsql['nivel'];
    //       $_SESSION['sregistro'] = $resulsql['registro'];

    //       $correo1 = $resulsql['correo'];
    //       $clave1 = $resulsql['clave'];
    //       $hash = $clave1;

    //       if (password_verify($clave, $hash)) {   
    //         return 'success';      
    //       } else{
    //         return 'error';
    //       }
    //     } else{
    //       return 'error';
    //     }
    //   } catch (Exception $e) {
    //     return $e;
    //   }
    // }
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

    public function TablaHClinicaModelo(){
      $sql = "SELECT * FROM tbl_hclinica";
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
    
    public function TablaHClinicaIndModelo($id){
      $sql = "SELECT * FROM tbl_hclinica WHERE id = :id";
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

    public function borrarHCModelo($id){
      $sql = "DELETE FROM tbl_hclinica WHERE id = :id";
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

  public function registrarHistoriaClinicaModelo($datosHC){
    $sql = "INSERT INTO tbl_hclinica(fecha,hora,tipodocumento,paciente,documento,direccion,telefono,edad,fechan,causaexterna,finalidadconsulta,motivodelaconsulta,enfermedadactual,revisionxsistema,uanticonceptivos,menarquia,fum,g,a,p,c,feultparto,cardvasculares,pulmonares,digestivos,diabetes,renales,quirurgicos,traumaticos,alergicos,transfusiones,medicamentos,alcohol,drogas,cigarrillo,inmunizaciones,otros,antfam,cabeza,cara,cuello,torax,corazon,pulmones,abdypel,genext,colvert,neurologico,miemsup,mieminf,pielyfaneras,artic,fuerzmus,reflejos,parescraneales,psicoemocional,fc,fr,ta,t,so2,pesokg,tallacm,imc,resultadoimc,impdiag,condseguir,incapacidad,usuario,docusuario)  VALUES (:fecha, :hora, :td, :paciente,:documento,:dir,:tel,:edad,:fechan,:causaexterna,:finalidadconsulta,:mconsulta,:eactual,:rsistema,:uanti,:menarquia,:fum,:g,:a,:p,:c,:fuparto,:cv,:pulm,:dige,:diab,:rnl,:quirur,:traum,:aler,:trfs,:mdcm,:alc,:drogas,:ciga,:inm,:otros,:afm,:cabeza,:cara,:cuello,:torax,:corazon,:pulmones,:abdpelvis,:genext,:colver,:neurologico,:miemsup,:mieminf,:pifan,:articu,:fuermus,:reflejos,:parescraneales,:psicoemocional,:fc,:fr,:ta,:t,:so2,:pesokg,:tallacm,:imc,:lectura,:imd,:conds,:incap,:usuario,:docusuario)";
      try{
        $conexion = new Conexion();
        $stmt = $conexion->conectar()->prepare($sql);
        $stmt->bindParam(':fecha', $datosHC['fecha'],PDO::PARAM_STR);
        $stmt->bindParam(':hora', $datosHC['hora'],PDO::PARAM_STR);
        $stmt->bindParam(':td', $datosHC['td'],PDO::PARAM_STR);
        $stmt->bindParam(':paciente', $datosHC['paciente'],PDO::PARAM_STR);
        $stmt->bindParam(':documento', $datosHC['documento'],PDO::PARAM_STR);
        $stmt->bindParam(':dir', $datosHC['dir'],PDO::PARAM_STR);
        $stmt->bindParam(':tel', $datosHC['tel'],PDO::PARAM_STR);
        $stmt->bindParam(':edad', $datosHC['edad'],PDO::PARAM_STR);
        $stmt->bindParam(':fechan', $datosHC['fechan'],PDO::PARAM_STR);
        $stmt->bindParam(':causaexterna', $datosHC['causaexterna'],PDO::PARAM_STR);
        $stmt->bindParam(':finalidadconsulta', $datosHC['finalidadconsulta'],PDO::PARAM_STR);
        $stmt->bindParam(':mconsulta', $datosHC['mconsulta'],PDO::PARAM_STR);
        $stmt->bindParam(':eactual', $datosHC['eactual'],PDO::PARAM_STR);
        $stmt->bindParam(':rsistema', $datosHC['rsistema'],PDO::PARAM_STR);
        $stmt->bindParam(':uanti', $datosHC['uanti'],PDO::PARAM_STR);
        $stmt->bindParam(':menarquia', $datosHC['menarquia'],PDO::PARAM_STR);
        $stmt->bindParam(':fum', $datosHC['fum'],PDO::PARAM_STR);
        $stmt->bindParam(':g', $datosHC['g'],PDO::PARAM_STR);
        $stmt->bindParam(':a', $datosHC['a'],PDO::PARAM_STR);
        $stmt->bindParam(':p', $datosHC['p'],PDO::PARAM_STR);
        $stmt->bindParam(':c', $datosHC['c'],PDO::PARAM_STR);
        $stmt->bindParam(':fuparto', $datosHC['fuparto'],PDO::PARAM_STR);
        $stmt->bindParam(':cv', $datosHC['cv'],PDO::PARAM_STR);
        $stmt->bindParam(':pulm', $datosHC['pulm'],PDO::PARAM_STR);
        $stmt->bindParam(':dige', $datosHC['dige'],PDO::PARAM_STR);
        $stmt->bindParam(':diab', $datosHC['diab'],PDO::PARAM_STR);
        $stmt->bindParam(':rnl', $datosHC['rnl'],PDO::PARAM_STR);
        $stmt->bindParam(':quirur', $datosHC['quirur'],PDO::PARAM_STR);
        $stmt->bindParam(':traum', $datosHC['traum'],PDO::PARAM_STR);
        $stmt->bindParam(':aler', $datosHC['aler'],PDO::PARAM_STR);
        $stmt->bindParam(':trfs', $datosHC['trfs'],PDO::PARAM_STR);
        $stmt->bindParam(':mdcm', $datosHC['mdcm'],PDO::PARAM_STR);
        $stmt->bindParam(':alc', $datosHC['alc'],PDO::PARAM_STR);
        $stmt->bindParam(':drogas', $datosHC['drogas'],PDO::PARAM_STR);
        $stmt->bindParam(':ciga', $datosHC['ciga'],PDO::PARAM_STR);
        $stmt->bindParam(':inm', $datosHC['inm'],PDO::PARAM_STR);
        $stmt->bindParam(':otros', $datosHC['otros'],PDO::PARAM_STR);
        $stmt->bindParam(':afm', $datosHC['afm'],PDO::PARAM_STR);
        $stmt->bindParam(':cabeza', $datosHC['cabeza'],PDO::PARAM_STR);
        $stmt->bindParam(':cara', $datosHC['cara'],PDO::PARAM_STR);
        $stmt->bindParam(':cuello', $datosHC['cuello'],PDO::PARAM_STR);
        $stmt->bindParam(':torax', $datosHC['torax'],PDO::PARAM_STR);
        $stmt->bindParam(':corazon', $datosHC['corazon'],PDO::PARAM_STR);
        $stmt->bindParam(':pulmones', $datosHC['pulmones'],PDO::PARAM_STR);
        $stmt->bindParam(':abdpelvis', $datosHC['abdpelvis'],PDO::PARAM_STR);
        $stmt->bindParam(':genext', $datosHC['genext'],PDO::PARAM_STR);
        $stmt->bindParam(':colver', $datosHC['colver'],PDO::PARAM_STR);
        $stmt->bindParam(':neurologico', $datosHC['neurologico'],PDO::PARAM_STR);
        $stmt->bindParam(':miemsup', $datosHC['miemsup'],PDO::PARAM_STR);
        $stmt->bindParam(':mieminf', $datosHC['mieminf'],PDO::PARAM_STR);
        $stmt->bindParam(':pifan', $datosHC['pifan'],PDO::PARAM_STR);
        $stmt->bindParam(':articu', $datosHC['articu'],PDO::PARAM_STR);
        $stmt->bindParam(':fuermus', $datosHC['fuermus'],PDO::PARAM_STR);
        $stmt->bindParam(':reflejos', $datosHC['reflejos'],PDO::PARAM_STR);
        $stmt->bindParam(':parescraneales', $datosHC['parescraneales'],PDO::PARAM_STR);
        $stmt->bindParam(':psicoemocional', $datosHC['psicoemocional'],PDO::PARAM_STR);
        $stmt->bindParam(':fc', $datosHC['fc'],PDO::PARAM_STR);
        $stmt->bindParam(':fr', $datosHC['fr'],PDO::PARAM_STR);
        $stmt->bindParam(':ta', $datosHC['ta'],PDO::PARAM_STR);
        $stmt->bindParam(':t', $datosHC['t'],PDO::PARAM_STR);
        $stmt->bindParam(':so2', $datosHC['so2'],PDO::PARAM_STR);
        $stmt->bindParam(':pesokg', $datosHC['pesokg'],PDO::PARAM_STR);
        $stmt->bindParam(':tallacm', $datosHC['tallacm'],PDO::PARAM_STR);
        $stmt->bindParam(':imc', $datosHC['imc'],PDO::PARAM_STR);
        $stmt->bindParam(':lectura', $datosHC['lectura'],PDO::PARAM_STR);
        $stmt->bindParam(':imd', $datosHC['imd'],PDO::PARAM_STR);
        $stmt->bindParam(':conds', $datosHC['conds'],PDO::PARAM_STR);
        $stmt->bindParam(':incap', $datosHC['incap'],PDO::PARAM_STR);
        $stmt->bindParam(':usuario', $datosHC['usuario'],PDO::PARAM_STR);
        $stmt->bindParam(':docusuario', $datosHC['docusuario'],PDO::PARAM_STR);

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