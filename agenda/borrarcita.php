<?php

include("../db.php");

//if(isset($_GET['id'])) {
  $id = $_GET['id'];
  
  $query = "DELETE FROM tbl_agenda WHERE id = $id";
  $result = mysqli_query($mysqli, $query);
  if(!$result) {
    die("Query Failed.");
  }

//  $_SESSION['message'] = 'Cita Borrada Correctamente';
// $_SESSION['message_type'] = 'danger';
// header('Location: indexagenda.php');
//}

?>
