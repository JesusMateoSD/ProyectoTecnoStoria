<?php
session_start();
include('../db.php');
date_default_timezone_set('America/Bogota'); 

  
  $fecha = $_POST['fecha'];
  $hora = $_POST['hora'];
  $td = $_POST['td'];
  $paciente = $_POST['paciente'];
  $documento = $_POST['documento'];
  $dir = $_POST['dir'];
  $tel = $_POST['tel'];
  $edad = $_POST['edad'];
  $fechan = $_POST['fechan'];
  $causaexterna = $_POST['causaexterna'];
  $finalidadconsulta = $_POST['finalidadconsulta'];
  $mconsulta = $_POST['mconsulta'];
  $eactual = $_POST['eactual'];
  $rsistema = $_POST['rsistema'];
  $uanti = $_POST['uanti'];
  $menarquia = $_POST['menarquia'];
  $fum = $_POST['fum'];
  $g = $_POST['g'];
  $a = $_POST['a'];
  $p = $_POST['p'];
  $c = $_POST['c'];
  $fuparto = $_POST['fuparto'];
  $cv = $_POST['cv'];
  $pulm = $_POST['pulm'];
  $dige = $_POST['dige'];
  $diab = $_POST['diab'];
  $rnl = $_POST['rnl'];
  $quirur = $_POST['quirur'];
  $traum = $_POST['traum'];
  $aler = $_POST['aler'];
  $trfs = $_POST['trfs'];
  $mdcm = $_POST['mdcm'];
  $alc = $_POST['alc'];
  $drogas = $_POST['drogas'];
  $ciga = $_POST['ciga'];
  $inm = $_POST['inm'];
  $otros = $_POST['otros'];
  $afm = $_POST['afm'];
  $cabeza = $_POST['cabeza'];
  $cara = $_POST['cara'];
  $cuello = $_POST['cuello'];
  $torax = $_POST['torax'];
  $corazon = $_POST['corazon'];
  $pulmones = $_POST['pulmones'];
  $abdpelvis = $_POST['abdpelvis'];
  $genext = $_POST['genext'];
  $colver = $_POST['colver'];
  $neurologico = $_POST['neurologico'];
  $miemsup = $_POST['miemsup'];
  $mieminf = $_POST['mieminf'];
  $pifan = $_POST['pifan'];
  $articu = $_POST['articu'];
  $fuermus = $_POST['fuermus'];
  $reflejos = $_POST['reflejos'];
  $parescraneales = $_POST['parescraneales'];
  $psicoemocional = $_POST['psicoemocional'];
  $fc = $_POST['fc'];
  $fr = $_POST['fr'];
  $ta = $_POST['ta'];
  $t= $_POST['t'];
  $so2 = $_POST['so2'];
  $pesokg = $_POST['pesokg'];
  $tallacm = $_POST['tallacm'];
  $imc = $_POST['imc'];
  $lectura = $_POST['lectura'];
  $imd = $_POST['imd'];
  $conds = $_POST['conds'];
  $incap = $_POST['incap'];



   $usuario = $_SESSION['snombre'];
   $docusuario = $_SESSION['sdocumento'];

 
  $query = "INSERT INTO tbl_hclinica(fecha,hora,tipodocumento,paciente,documento,direccion,telefono,edad,fechan,causaexterna,finalidadconsulta,motivodelaconsulta,enfermedadactual,revisionxsistema,uanticonceptivos,menarquia,fum,g,a,p,c,feultparto,cardvasculares,pulmonares,digestivos,diabetes,renales,quirurgicos,traumaticos,alergicos,transfusiones,medicamentos,alcohol,drogas,cigarrillo,inmunizaciones,otros,antfam,cabeza,cara,cuello,torax,corazon,pulmones,abdypel,genext,colvert,neurologico,miemsup,mieminf,pielyfaneras,artic,fuerzmus,reflejos,parescraneales,psicoemocional,fc,fr,ta,t,so2,pesokg,tallacm,imc,resultadoimc,impdiag,condseguir,incapacidad,usuario,docusuario) VALUES ('$fecha', '$hora', '$td', '$paciente','$documento','$dir','$tel','$edad','$fechan','$causaexterna','$finalidadconsulta','$mconsulta','$eactual','$rsistema','$uanti','$menarquia','$fum','$g','$a','$p','$c','$fuparto','$cv','$pulm','$dige','$diab','$rnl','$quirur','$traum','$aler','$trfs','$mdcm','$alc','$drogas','$ciga','$inm','$otros','$afm','$cabeza','$cara','$cuello','$torax','$corazon','$pulmones','$abdpelvis','$genext','$colver','$neurologico','$miemsup','$mieminf','$pifan','$articu','$fuermus','$reflejos','$parescraneales','$psicoemocional','$fc','$fr','$ta','$t','$so2','$pesokg','$tallacm','$imc','$lectura','$imd','$conds','$incap','$usuario','$docusuario')";
  $result = mysqli_query($mysqli, $query);

   $tarea = "Crea Historia Clinica";
   
	
  if(!$result) {
    die("Query Fallo.");
  }



?>
