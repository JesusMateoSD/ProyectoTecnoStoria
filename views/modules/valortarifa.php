<?php
  require_once('../../controllers/TarifaControlador.php');
  require_once('../../models/TarifaModelo.php');

  $producto = $_POST['producto'];

  $Pagos = new TarifaControlador();
  $PagosT = $Pagos->TablaProductoTarifaControlador($producto);
  
  // $queryM = "SELECT precio, precio1 FROM tbl_tarifa WHERE producto = '$producto' ";
  // $resultadoM = $mysqli->query($queryM);
  
  // while($rowM = $resultadoM->fetch_assoc()){
  foreach($PagosT as $rowM){
    $html.= "<option value='".$rowM['precio']."'>".$rowM['precio']."</option>
             <option value='".$rowM['precio1']."'>".$rowM['precio1']."</option>";
  }
  
  echo $html;

?>