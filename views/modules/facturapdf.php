<?php
  session_start();
  include('views/fpdf/fpdf.php');
  date_default_timezone_set('America/Bogota'); 

  $id = $_GET['id'];
  global $nombre;
  global $nit;
  global $direccion;
  global $telefono;
  global $correo;

  global $factura;
  global $fecha;
  global $nombrec;
  global $documento;

  global $valor;

  global $correo;

  // $querym = "SELECT * FROM tbl_parametros";
  // $resultm = mysqli_query($mysqli, $querym);
  // $rowm = mysqli_fetch_array($resultm);
  $consultorios = new ConsultorioControlador();
  $tConsultorios = $consultorios->tablaConsultoriosControlador();

  foreach($tConsultorios as $rowm){
    $nombre = $rowm['nombre'];
    $nit = $rowm['nit'];
    $direccion = $rowm['direccion'];
    $telefono = $rowm['telefono'];
    $correo = $rowm['correo'];
    $foto = $rowm['foto'];
    $ciudad = $rowm['ciudad'];
    $depto = $rowm['depto'];
  }

  $Factura = new FacturaControlador();
  $tFactura = $Factura->TablaFacturaIdControlador($id);

  // $queryf = "SELECT * FROM tbl_factura WHERE id=$id";
  // $resultf = mysqli_query($mysqli, $queryf);
  // $rowf = mysqli_fetch_array($resultf);
  foreach($tFactura as $rowf){
    $factura = $rowf['nfactura'];
    $fecha = $rowf['fecha'];
    $nombrec = $rowf['nombre'];
    $documento = $rowf['documento'];
  }
  
  $DetFactura = new DetalleFacturaControlador();
  $valorT = $DetFactura->ValorTotalFacturaControlador($factura);
  // $queryag = "SELECT SUM(total) as mtotal FROM tbl_dfactura WHERE nfactura=$factura";
  // $resultag = mysqli_query($mysqli, $queryag);
  // $rowag = mysqli_fetch_array($resultag);
  $valor = $valorT['mtotal'];

  $Pacientes = new PacienteControlador();
  $tPaciente = $Pacientes->consultarPacienteAgendaControlador($documento);
  // $queryc = "SELECT * FROM tbl_pacientes WHERE documento=$documento";
  // $resultc = mysqli_query($mysqli, $queryc);
  // $rowc = mysqli_fetch_array($resultc);
  $correo = $tPaciente['correo'];

   // $tarea = "Imprime Pagos";
   //  $queryb = "INSERT INTO tbl_bitacora(documento,nombre, tarea) VALUES ('$_SESSION[sdocumento]', '$_SESSION[snombre]', '$tarea')";
   //  $resultb = mysqli_query($mysqli, $queryb);


$pdf = new FPDF('P','mm',array(80,150)); // Tamaño tickt 80mm x 150 mm (largo aprox)
$pdf->AddPage();
 
// CABECERA
$pdf->SetFont('Helvetica','',12);
$pdf->Cell(60,4,$GLOBALS['nombre'],0,1,'C');
$pdf->SetFont('Helvetica','',8);
$pdf->Cell(60,4,$GLOBALS['nit'],0,1,'C');
$pdf->Cell(60,4,$GLOBALS['direccion'],0,1,'C');
$pdf->Cell(60,4,$GLOBALS['telefono'],0,1,'C');
//$pdf->Cell(60,4,'999 888 777',0,1,'C');
$pdf->Cell(60,4,$GLOBALS['correo'],0,1,'C');
 
// DATOS FACTURA        
$pdf->Ln(5);
$pdf->Cell(60,4,'Factura Venta: '.$GLOBALS['factura'],0,1,'');
$pdf->Cell(60,4,'Fecha: '.$GLOBALS['fecha'],0,1,'');
$pdf->Cell(60,4,'Paciente: '.$GLOBALS['nombrec'],0,1,'');
$pdf->Cell(60,4,'No Documento: '.$GLOBALS['documento'],0,1,'');
$pdf->Cell(60,4,'Correo: '.$GLOBALS['correo'],0,1,'');
 
// COLUMNAS
$pdf->SetFont('Helvetica', 'B', 7);
$pdf->Cell(30, 10, 'Procedimiento', 0);
$pdf->Cell(5, 10, 'Ud',0,0,'R');
$pdf->Cell(10, 10, 'Precio',0,0,'R');
$pdf->Cell(15, 10, 'Total',0,0,'R');
$pdf->Ln(8);
$pdf->Cell(60,0,'','T');
$pdf->Ln(0);
 
// PRODUCTOS

// $query = "SELECT * FROM tbl_dfactura WHERE nfactura=$factura";
// $result_tasks = mysqli_query($mysqli, $query);    
// while($row = mysqli_fetch_assoc($result_tasks)) {
$FacturaD = $DetFactura->TablaFacturaDetControlador($factura);
foreach($FacturaD as $row){
  $pdf->SetFont('Helvetica', '', 7);
  $pdf->Ln(1);
  $pdf->MultiCell(30,4,$row['producto'],0,'L'); 
  $pdf->Cell(35, -5, $row['cantidad'],0,0,'R');
  $pdf->Cell(10, -5, number_format(round($row['valor'])),0,0,'R');
  $pdf->Cell(15, -5, number_format(round($row['total'])),0,0,'R');
}
//$pdf->Ln(3);
 
// SUMATORIO DE LOS PRODUCTOS Y EL IVA
$pdf->Ln(1);
$pdf->Cell(60,0,'','T');

$pdf->Ln(3);    
$pdf->Cell(25, 10, 'TOTAL', 0);    
$pdf->Cell(20, 10, '', 0);
$pdf->Cell(15, 10, number_format(round($GLOBALS['valor'])),0,0,'R');
 
// PIE DE PAGINA
$pdf->Ln(10);
//$pdf->Cell(60,0,'GRACIAS',0,1,'C');
$pdf->Ln(3);
//$pdf->Cell(60,0,'CADUCA EL DIA  01/11/2019',0,1,'C');
 
$pdf->Output('ticket.pdf','i');
?>