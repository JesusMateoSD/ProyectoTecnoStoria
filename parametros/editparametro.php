<?php 
  include("../db.php");
  include('../header/header.php');
  $title = '';
  $description= '';

  if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM tbl_parametros WHERE id=$id";
    $result = mysqli_query($mysqli, $query);

    if (mysqli_num_rows($result) == 1) {
      $row = mysqli_fetch_array($result);
      $nombre = $row['nombre'];
      $nit = $row['nit'];
      $direccion = $row['direccion'];
      $telefono = $row['telefono'];
      $correo = $row['correo'];

      $ciudad = $row['ciudad'];
      $depto = $row['depto'];
      $capb = $row['capb'];
      $napb = $row['napb'];
    }
  }

  if (isset($_POST['update'])) {
    $id = $_GET['id'];
    $nombre= $_POST['nombre'];
    $nit = $_POST['nit'];
    $direccion = $_POST['direccion'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];

    $ciudad = $_POST['ciudad'];
    $depto = $_POST['depto'];
    $capb = $_POST['capb'];
    $napb = $_POST['napb'];

    $query = "UPDATE tbl_parametros set nombre = '$nombre', nit = '$nit', direccion = '$direccion', telefono = '$telefono', correo = '$correo' , ciudad = '$ciudad' , depto = '$depto', capb = '$capb', napb = '$napb' WHERE id=$id";
    mysqli_query($mysqli, $query);
    $_SESSION['message'] = 'Consultorio Actualizado Correctamente';
    $_SESSION['message_type'] = 'warning';

    header('Location: indexparametro.php');
  }
?>

<div class="container">
  <div class="row">
    <br>
    <form action="editparametro.php?id=<?php echo $_GET['id']; ?>" method="POST" >
      <p class="p-2 mb-4 bg-success text-white"">Actualizar  Parametros</p>
      <div class="form-row">
        <div class="col-md-4 mb-4">
          <label for="validationCustom02">Consultorio</label>
          <input type="text" name="nombre" class="form-control" id="validationCustom02"  value="<?php echo $nombre; ?>" required>
        </div>

        <div class="col-md-4 mb-4">
          <label for="validationCustom02">Nit</label>
          <input type="text" name="nit" class="form-control" id="validationCustom02" value="<?php echo $nit; ?>" required>
        </div>

        <div class="col-md-4 mb-4">
          <label for="validationCustom02">Direccion</label>
          <input type="text" name="direccion" class="form-control" id="validationCustom02" value="<?php echo $direccion; ?>" required>
        </div>

        <div class="col-md-4 mb-4">
          <label for="validationCustom02">Ciudad</label>
          <input type="text" name="ciudad" class="form-control" id="validationCustom02" value="<?php echo $ciudad; ?>" required>
        </div>

        <div class="col-md-4 mb-4">
          <label for="validationCustom02">Departamento</label>
          <input type="text" name="depto" class="form-control" id="validationCustom02" value="<?php echo $depto; ?>" required>
        </div>

        <div class="col-md-4 mb-4">
          <label for="validationCustom02">Codigo E.A.P.B</label>
          <input type="text" name="capb" class="form-control" id="validationCustom02" value="<?php echo $capb; ?>" required>
        </div>

        <div class="col-md-4 mb-4">
          <label for="validationCustom02">Nombre E.A.P.B</label>
          <input type="text" name="napb" class="form-control" id="validationCustom02" value="<?php echo $napb; ?>" required>
        </div>

        <div class="col-md-4 mb-4">
          <label for="validationCustom02">Telefono</label>
          <input type="text" name="telefono" class="form-control" id="validationCustom02" value="<?php echo $telefono; ?>" required>
        </div>

        <div class="col-md-4 mb-4">
          <label for="validationCustom02">Correo</label>
          <input type="text" name="correo" class="form-control" id="validationCustom02" value="<?php echo $correo; ?>" required>
        </div>
	    </div>
    </div>
    
	  <div class="col-md-4 mt-4 mx-auto">
	    <input type="submit" name="update" class="btn btn-success btn-block" value="Actualizar Consultorio">
	  </div>
  </form>
</div>





