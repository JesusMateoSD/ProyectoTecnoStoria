<?php

include("../db.php");

function ver_precio(){
    
    $id = $_POST['id'];
    $query = $mysqli->prepare("SELECT * FROM tbl_usuarios  WHERE nombre ='$id'");
    $query->execute();
    $row = $query->fetch();
    $list = $row['registro'];
    return $list;
  }
  echo ver_precio();

?>
