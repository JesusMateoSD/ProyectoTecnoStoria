<?php
session_start();

if (isset($_POST['salvarmodelor'])) {
  $HClinicaS = new RecetarioControlador();
  $HClinicaS->registrarModeloRControlador();
}

if ($_GET['action'] == 'modrok') {
?>
  <script>
    $(document).ready(function() {
      swal({
        title: 'TecnoStoria',
        text: "El modelo recetario ha sido creada con exito",
        type: 'success',
        confirmButtonColor: '#3085d6',
        confirmButtonText: 'OK!'
      }).then((result) => {

      })
    });
  </script>
<?php
}

$Recetario = new RecetarioControlador();
$tablaR = $Recetario->TablaModeloRecetarioControlador();

if (isset($_SESSION['usuario']) && $_SESSION['snivel'] <= 3) {
  include("header.php");
} else {
  header('location:index.php');
}
?>

<head>
  <script type="text/javascript" src="views/js/mostrarMR.js"></script>
</head>

<main class="container">
  <div class="p-2 mb-2 bg-primary text-white">Crear Modelo Recetario</div>
  <hr>
  <form method="POST">
    <div class="form-row">
      <div class="col-md-12 mb-4">
        <input type="text" onkeyup="javascript:this.value=this.value.toUpperCase();" name="nombre" class="form-control" placeholder="Nombre" autofocus autocomplete="off">
      </div>

      <div class="col-md-12 mb-4">
        <textarea class="form-control rounded-0" name="modelo" id="modelo" placeholder="Modelo" rows="4"></textarea>
      </div>

      <div class="col-md-12 mt-2">
        <div class="p-2 mb-2 bg-primary "></div>
      </div>

    </div>
    <div class="my-3">
      <input type="submit" name="salvarmodelor" class="btn btn-primary " value="Grabar Modelo Recetario">
    </div>
  </form>

  <div class="bg-light px-2 pb-2 mb-2">
    <br>
    <table id="tabler" class="table table-hover">
      <thead>
        <tr class="table-primary">
          <th>ID</th>
          <th>Nombre</th>
          <th>Borrar Modelo</th>
        </tr>
      </thead>
      <tbody>
        <?php
        // $query = "SELECT * FROM tbl_modelor";
        // $result_tasks = mysqli_query($mysqli, $query);    

        // while($row = mysqli_fetch_assoc($result_tasks)) { 
        foreach ($tablaR as $row) { ?>
          <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['nombre']; ?></td>
            <td>
              <!-- <a href="editusuario.php?id=<?php echo $row['id'] ?>" class="btn btn-success">
                <i class="fas fa-marker"></i>
              </a>
                      <a href="verusuario.php?id=<?php echo $row['id'] ?>" class="btn btn-success">
                <i <i class="far fa-eye"></i></i> 
              </a>-->
              <a href="index.php?action=delModR&id=<?php echo $row['id'] ?>" class="btn btn-danger">
                <i class="fas fa-trash-alt"></i>
              </a>
            </td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</main>