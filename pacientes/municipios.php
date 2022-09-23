<?php
  include('../db.php');

  $dpto = $_POST['id_departamento'];
  $queryM = "SELECT id_municipio, municipio FROM tbl_municipios WHERE id_departamento = '$dpto' ";
  $resultadoM = $mysqli->query($queryM);
  
  while($rowM = $resultadoM->fetch_assoc()){
    $html.= "<option value='".$rowM['id_municipio']."'>".$rowM['municipio']."</option>";
  }
  
  echo $html;
?>