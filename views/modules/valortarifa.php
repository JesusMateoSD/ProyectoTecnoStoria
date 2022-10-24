<?php
  require_once('../../controllers/PagosControlador.php');
  require_once('../../models/PagosModelo.php');

  $producto = $_POST['producto'];

  $Pagos = new PagosControlador();
  $PagosT = $Pagos->TablaProductoControlador($producto);
  
  // $queryM = "SELECT precio, precio1 FROM tbl_tarifa WHERE producto = '$producto' ";
  // $resultadoM = $mysqli->query($queryM);
  
  // while($rowM = $resultadoM->fetch_assoc()){
  foreach($PagosT as $rowM){
    $html.= "<option value='".$rowM['precio']."'>".$rowM['precio']."</option>
             <option value='".$rowM['precio1']."'>".$rowM['precio1']."</option>";
  }
  
  echo $html;

?>