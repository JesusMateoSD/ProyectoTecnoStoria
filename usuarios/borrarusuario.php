<link href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.8.0/sweetalert2.min.css" rel="stylesheet" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.8.0/sweetalert2.min.js"></script>
<?php

  include("../db.php");

  if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM tbl_usuarios WHERE id = $id";
    $result = mysqli_query($mysqli, $query);
    if(!$result) {
      die("Query Failed.");
    }

?>
  
<script LANGUAGE="javascript">
  $(document).ready(function() {
    swal({
      title: 'Medicina Web!',
      text: "El Usuario Ha Sido Borrado Correctamente!",
      type: 'success',
      confirmButtonColor: '#3085d6',
      confirmButtonText: 'OK!'
    }).then((result) => {
      if (result.value) {
        window.location.href = "indexusuario.php";
      }
    })

  });
</script>
<?php
// $_SESSION['message'] = 'Usuario Borrado Correctamente';
// $_SESSION['message_type'] = 'danger';
// header('Location: indexusuario.php');
  }
?>
