<link href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.8.0/sweetalert2.min.css" rel="stylesheet" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.8.0/sweetalert2.min.js"></script>

<?php
  include('../db.php');

  if (isset($_POST['salvarparametro'])) {
    $nombre = $_POST['nombre'];
    $nit = $_POST['nit'];
    $direccion = $_POST['direccion'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];

    $ciudad = $_POST['ciudad'];
    $depto = $_POST['depto'];

    $capb = $_POST['capb'];
    $napb = $_POST['napb'];
    
  

    $foto=$_FILES["foto"]["name"];
    $ruta=$_FILES["foto"]["tmp_name"];
    $destino="fotospr/".$foto;
    copy($ruta,$destino);
    
    $query = "INSERT INTO tbl_parametros(nombre, nit,direccion,telefono,correo,foto,ciudad,depto,capb,napb) VALUES ('$nombre', '$nit', '$direccion', '$telefono', '$correo', '$destino', '$ciudad', '$depto', '$capb', '$napb')";
    $result = mysqli_query($mysqli, $query);

    if(!$result) {
      die("Query Fallo.");
    }
?>
<script LANGUAGE="javascript">
  $(document).ready(function() {
    swal({
      title: 'Medicina Web!',
      text: "El Parametro Ha Sido Grabado Correctamente!",
      type: 'success',
      confirmButtonColor: '#3085d6',
      confirmButtonText: 'OK!'
    }).then((result) => {
      if (result.value) {
        window.location.href = "indexparametro.php";
      }
    })
  });
</script>
<?php
 // $_SESSION['message'] = 'Consultorio Grabado Correctamente';
 // $_SESSION['message_type'] = 'success';
//  header('Location: indexparametro.php');
  }
?>
