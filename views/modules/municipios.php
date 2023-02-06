<?php
  require_once('../../controllers/MunicipioControlador.php');
  require_once('../../models/MunicipioModelo.php');

  $dpto = $_POST['id_departamento'];

  $paciente = new MunicipioControlador();
  $municipios = $paciente->MunicipiosControlador($dpto);

  // $queryM = "SELECT id_municipio, municipio FROM tbl_municipios WHERE id_departamento = '$dpto' ";
  // $resultadoM = $mysqli->query($queryM);
  
  // while($rowM = $resultadoM->fetch_assoc()){
  foreach($municipios as $rowM){
    $html.= "<option value='".$rowM['id_municipio']."'>".$rowM['municipio']."</option>";
  }
  
  echo $html;
?>