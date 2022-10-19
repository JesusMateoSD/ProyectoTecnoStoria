<?php

include("../db.php");

  $id = $_GET['id'];
  $query = "DELETE FROM tbl_evolucion WHERE id = $id";
  $result = mysqli_query($mysqli, $query);
  if(!$result) {
    die("Query Failed.");
  }


?>
