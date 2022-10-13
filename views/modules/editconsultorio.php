<link href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.8.0/sweetalert2.min.css" rel="stylesheet" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.8.0/sweetalert2.min.js"></script>

<?php 
  include('header.php');
  $consultorio = new ConsultorioControlador();
  $datos = $consultorio->consultarConsultorioControlador($_GET['id']);

  $title = '';
  $description= '';


  // if (isset($_POST['update'])) {
  //   $consultorio = new ConsultorioControlador();
  //   $consultorio->editarConsultorioControlador();

  //   $id = $_GET['id'];
  //   $nombre= $_POST['nombre'];
  //   $nit = $_POST['nit'];
  //   $direccion = $_POST['direccion'];
  //   $telefono = $_POST['telefono'];
  //   $correo = $_POST['correo'];

  //   $ciudad = $_POST['ciudad'];
  //   $depto = $_POST['depto'];
  //   $capb = $_POST['capb'];
  //   $napb = $_POST['napb'];

  //   $query = "UPDATE tbl_consultorios set nombre = '$nombre', nit = '$nit', direccion = '$direccion', telefono = '$telefono', correo = '$correo' , ciudad = '$ciudad' , depto = '$depto', capb = '$capb', napb = '$napb' WHERE id=$id";
  //   mysqli_query($mysqli, $query);

  
?>
<!-- <script>
    $(document).ready(function() {
    swal({
      title: 'Medicina Web!',
      text: "El Consultorio Ha Sido Actualizado con exito!",
      type: 'success',
      confirmButtonColor: '#3085d6',
      confirmButtonText: 'OK!'
    }).then((result) => {
      if (result.value) {
        window.location.href = "indexconsultorio.php";
      }
    })
  });
</script> -->
<?php
  // }
  foreach($datos as $v){
    echo $nombreE = $v['nombre'];
    echo $nitE = $v['nit']; 
    echo $direccionE = $v['direccion'];
    echo $telefonoE = $v['telefono'];
    echo $correoE = $v['correo'];
    echo $fotoE = $v['foto'];
    echo $ciudadE = $v['ciudad'];
    echo $deptoE = $v['depto'];
    echo $capb = $v['capb'];
    echo $napb = $v['napb'];      
  } 
?>

<div class="container">
  <div class="row">
    <br>
    <form action="editconsultorio.php?id=<?php echo $_GET['id']; ?>" method="POST" >
      <p class="p-2 mb-4 bg-success text-white">Actualizar  Consultorios</p>
      <div class="form-row">
        <div class="col-md-4 mb-4">
          <label for="validationCustom02">Consultorio</label>
          <input type="text" name="nombre" class="form-control" id="validationCustom02"  value="<?php echo $nombreE; ?>" required>
        </div>

        <div class="col-md-4 mb-4">
          <label for="validationCustom02">Nit</label>
          <input type="text" name="nit" class="form-control" id="validationCustom02" value="<?php echo $nitE; ?>" required>
        </div>

        <div class="col-md-4 mb-4">
          <label for="validationCustom02">Direccion</label>
          <input type="text" name="direccion" class="form-control" id="validationCustom02" value="<?php echo $direccionE; ?>" required>
        </div>

        <div class="col-md-4 mb-4">
          <label for="validationCustom02">Ciudad</label>
          <input type="text" name="ciudad" class="form-control" id="validationCustom02" value="<?php echo $ciudadE; ?>" required>
        </div>

        <div class="col-md-4 mb-4">
          <label for="validationCustom02">Departamento</label>
          <input type="text" name="depto" class="form-control" id="validationCustom02" value="<?php echo $deptoE; ?>" required>
        </div>

        <div class="col-md-4 mb-4">
          <label for="validationCustom02">Codigo E.A.P.B</label>
          <input type="text" name="capb" class="form-control" id="validationCustom02" value="<?php echo $capbE; ?>" required>
        </div>

        <div class="col-md-4 mb-4">
          <label for="validationCustom02">Nombre E.A.P.B</label>
          <input type="text" name="napb" class="form-control" id="validationCustom02" value="<?php echo $napbE; ?>" required>
        </div>

        <div class="col-md-4 mb-4">
          <label for="validationCustom02">Telefono</label>
          <input type="text" name="telefono" class="form-control" id="validationCustom02" value="<?php echo $telefonoE; ?>" required>
        </div>

        <div class="col-md-4 mb-4">
          <label for="validationCustom02">Correo</label>
          <input type="text" name="correo" class="form-control" id="validationCustom02" value="<?php echo $correoE; ?>" required>
        </div>
	    </div>
    </div>
    
	  <div class="col-md-4 mt-4 mx-auto">
	    <input type="submit" name="update" class="btn btn-success btn-block" value="Actualizar Consultorio">
	  </div>
  </form>
</div>





