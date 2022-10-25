<?php
include("../db.php");
$title = '';
$description = '';

if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM parametros WHERE id=$id";
  $result = mysqli_query($mysqli, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $nombre = $row['nombre'];
    $nit = $row['nit'];
    $direccion = $row['direccion'];
    $telefono = $row['telefono'];
    $correo = $row['correo'];
  }
}

if (isset($_POST['update'])) {
  $id = $_GET['id'];
  $nombre = $_POST['nombre'];
  $nit = $_POST['nit'];
  $direccion = $_POST['direccion'];
  $telefono = $_POST['telefono'];
  $correo = $_POST['correo'];

  $query = "UPDATE parametros set nombre = '$nombre', nit = '$nit', direccion = '$direccion', telefono = '$telefono', correo = '$correo' WHERE id=$id";
  mysqli_query($mysqli, $query);
  $_SESSION['message'] = 'Parametro Actualizado Correctamente';
  $_SESSION['message_type'] = 'warning';
  header('Location: indexusuario.php');
}

?>
<?php include('includes/header.php'); ?>
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
        <form action="editusuario.php?id=<?php echo $_GET['id']; ?>" method="POST">
          <div class="form-group">
            <input name="nombre" type="text" class="form-control" value="<?php echo $nombre; ?>" placeholder="Actualizar Nombre">
          </div>
          <div class="form-group">
            <input name="nit" type="text" class="form-control" value="<?php echo $nit; ?>" placeholder="Actualizar Nit">
          </div>
          <div class="form-group">
            <input name="direccion" type="text" class="form-control" value="<?php echo $direccion; ?>" placeholder="Actualizar Direccion">
          </div>
          <div class="form-group">
            <input name="telefono" type="text" class="form-control" value="<?php echo $telefono; ?>" placeholder="Actualizar Telefono">
          </div>
          <div class="form-group">
            <input name="correo" type="text" class="form-control" value="<?php echo $correo; ?>" placeholder="Actualizar Correo">
          </div>
          <button class="btn-success" name="update">
            ACTUALIZAR PARAMETRO
          </button>
        </form>
      </div>
    </div>
  </div>
</div>
<?php include('includes/footer.php'); ?>