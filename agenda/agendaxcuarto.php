<?php

include("../db.php");

  $queryb = "DELETE FROM tbl_horas";
  $resultb = mysqli_query($mysqli, $queryb);
  if(!$resultb) {
    die("Query Failed.");
  }

  $query = "INSERT INTO tbl_horas (idh,hora) SELECT idh,hora FROM tbl_horasc";
  $result = mysqli_query($mysqli, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Agenda Cambiada Correctamente';
  $_SESSION['message_type'] = 'danger';
  header('Location: horasagenda.php');


?>
