<?php 
  // $title = '';
  // $description= '';

  if (isset($_POST['update'])) {
    $consultorio = new ConsultorioControlador();
    $consultorio->editarConsultorioControlador($_GET['id']);
  }

  $consultorio = new ConsultorioControlador();
  $datos = $consultorio->consultarConsultorioControlador($_GET['id']);

  foreach($datos as $v){
    $nombreE = $v['nombre'];
    $nitE = $v['nit']; 
    $direccionE = $v['direccion'];
    $telefonoE = $v['telefono'];
    $correoE = $v['correo'];
    $fotoE = $v['foto'];
    $ciudadE = $v['ciudad'];
    $deptoE = $v['depto'];
    $capbE = $v['capb'];
    $napbE = $v['napb'];      
  }
  
  if(isset($_SESSION['usuario'])){
    include("header.php");
  }
  else{
    header('location:index.php');
  }
?>

<div class="container">
  <div class="row">
    <br>
    <form method="POST" >
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

