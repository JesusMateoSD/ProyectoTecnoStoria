<?php
  require_once('../../controllers/PacienteControlador.php');
  require_once('../../models/PacienteModelo.php');

  $dpto = $_POST['id_departamento'];

  $paciente = new PacienteControlador();
  $pacienteM = $paciente->MunicipiosPacienteControlador($dpto);

  // $queryM = "SELECT id_municipio, municipio FROM tbl_municipios WHERE id_departamento = '$dpto' ";
  // $resultadoM = $mysqli->query($queryM);
  
  // while($rowM = $resultadoM->fetch_assoc()){
  foreach($pacienteM as $rowM){
    $html.= "<option value='".$rowM['id_municipio']."'>".$rowM['municipio']."</option>";
  }
  
  echo $html;
?>