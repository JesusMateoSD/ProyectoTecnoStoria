<?php
session_start();

date_default_timezone_set('America/Bogota');
$fechahoy = date('Y-m-d');

$usuario = $_SESSION['snombre'];
$docusuario = $_SESSION['sdocumento'];

if (isset($_POST['salvarpagod'])) {
  $Pagos = new PagosControlador();
  $Pagos->registrarPagoTempControlador($usuario, $docusuario);
}

if (isset($_POST['salvarpago'])) {
  $Pagos = new PagosControlador();
  $Pagos->registrarPagoDControlador();
  $Pagos->registrarPagoControlador();
  $Pagos->BorrarPagosTempControlador();
}

if ($_GET['action'] == 'pagok') {
?>
  <script LANGUAGE="javascript">
    $(document).ready(function() {
      swal({
        title: 'TecnoStoria',
        text: "La Factura fue grabada Correctamente!",
        type: 'success',
        confirmButtonColor: '#3085d6',
        confirmButtonText: 'OK!'
      }).then((result) => {

      })
    });
  </script>
<?php
}

$Pagos = new PagosControlador();
$tFactura = $Pagos->TablaFacturaControlador();

// $result = mysqli_query($mysqli,"SELECT max(nfactura) AS max_page from tbl_factura");
// $rowf = mysqli_fetch_array($result);
$nfactura = $tFactura["max_page"] + 1;

$tTarifa = $Pagos->TablasTarifaControlador();
$tFactura = $Pagos->TablaFacturaOrdControlador();

if (isset($_SESSION['usuario'])) {
  include("header.php");
} else {
  header('location:index.php');
}
?>

<script type="text/javascript" src="views/js/MostrarDetallePago.js"></script>
<script language="javascript" src="views/js/valorTarifa.js"></script>
<script src="views/js/calcularPrecio.js"></script>
<main class="container ">
  <div class="p-2 mb-2 bg-primary text-white">Crear Pagos</div>
  <hr>

  <body onload="detalleinicio()">
    <div class="container">
      <div class="row">
        <form id="myForm" name="f" method="POST">
          <div class="form-row">
            <div class="col-md-1 mb-4">
              <input type="text" name="nfactura" class="form-control" value="<?php echo $nfactura; ?>" readonly>
            </div>

            <div class="col-md-2 mb-4">
              <input type="text" name="fecha" class="form-control" value="<?php echo $fechahoy = date('Y-m-d'); ?>" readonly>
            </div>

            <div class="col-md-3 mb-4">
              <input type="text" name="cedula" class="form-control" placeholder="Documento" onBlur="alerta()" autofocus autocomplete="off">
            </div>

            <div class="col-md-6 mb-4">
              <input type="text" name="paciente" id="paciente" class="form-control" placeholder="Paciente" autofocus autocomplete="off" readonly>
            </div>

            <div class="col-md-5 mb-4">
              <select class="custom-select mr-sm-2" name="productos" id="productos">
                <option value="0">Seleccione Producto:</option>
                <?php
                // $query = $mysqli -> query ("SELECT * FROM tbl_tarifa ");
                // while ($valores = mysqli_fetch_array($query)) {
                foreach ($tTarifa as $valores) {
                  echo '<option value="' . $valores['producto'] . '">' . $valores['producto'] . '</option>';
                }
                ?>
              </select>
            </div>
            <div class="col-md-3 mb-4">
              <select class="custom-select mr-sm-2" name="valor" id="valor"></select>
            </div>
            <br>
            <div class="col-md-2 mb-4">
              <input type="text" name="cantidad" id="cantidad" autocomplete="off" class="form-control" placeholder="Cantidad" onchange="cal()" onkeyup="cal()" autofocus>
            </div>

            <div class="col-md-2 mb-4">
              <input type="text" name="total" class="form-control" placeholder="Total" id="total" autocomplete="off">
            </div>
          </div>

          <input type="submit" name="salvarpagod" id="salvarpagod" class="btn btn-success" value="Grabar Detalle">
        </form>
      </div>
    </div>
    <br>
    <div class="bg-light p-2 mb-4" id="tabladetallep"></div>
    <form method="POST">
      <input type="submit" id="salvarpago" name="salvarpago" class="btn btn-primary " value="Grabar Pago">
    </form>
    <br>
    <div class="p-2 mb-2 bg-primary text-white">MOSTRAR FACTURAS</div>
    <script type="text/javascript" src="views/js/TablaFacturaOrd.js"></script>
    <div class="bg-light p-2 my-3">
      <table id="tablefactura" class="table table-striped table-bordered" style="width:100%">
        <thead>
          <tr class="table-primary">
            <th>ID</th>
            <th>Factura</th>
            <th>Fecha</th>
            <th>Cliente</th>
            <th>Documento</th>
            <th>Imprimir</th>
          </tr>
        </thead>
        <tbody>
          <?php

          // $query = "SELECT * FROM tbl_factura ORDER BY id DESC";
          // $result_tasks = mysqli_query($mysqli, $query);    

          // while($row = mysqli_fetch_assoc($result_tasks)) { 
          foreach ($tFactura as $row) { ?>
            <tr>
              <td><?php echo $row['id']; ?></td>
              <td><?php echo $row['nfactura']; ?></td>
              <td><?php echo $row['fecha']; ?></td>
              <td><?php echo $row['nombre']; ?></td>
              <td><?php echo $row['documento']; ?></td>
              <td>
                <a href="index.php?action=facturapdf&id=<?php echo $row['id'] ?>" target="_blank" class="btn btn-outline-success"><i class="fas fa-file-pdf"></i></a>
              </td>

            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
    </div>
  </div>
</main>

<script src="views/js/pagospac.js"></script>