<?php
include('views/fpdf/fpdf.php');
session_start();

$id = $_GET['id'];
// $id = "4";
global $nombre;
global $direccion;
global $telefono;
global $correo;
global $foto;
global $ciudad;
global $depto;

global $fechar;
global $dora;
global $documento;
global $paciente;
global $direccionr;
global $telefonor;
global $edad;
global $fechan;
global $remision;

global $docusuario;
global $fotou;
global $nombrepr;
global $registro;

global $mconsulta;
global $diagprin;
global $diagrel1;
global $diagrel2;
global $especialidadremite;

date_default_timezone_set('America/Bogota');
$fecha = date('Y-m-d');

//query datos caratula
// $querym = "SELECT * FROM tbl_parametros";
// $resultm = mysqli_query($mysqli, $querym);
// $rowm = mysqli_fetch_array($resultm);
$consultorios = new ConsultorioControlador();
$tConsultorios = $consultorios->tablaConsultoriosControlador();

foreach ($tConsultorios as $rowm) {
  $nombre = $rowm['nombre'];
  $nit = $rowm['nit'];
  $direccion = $rowm['direccion'];
  $telefono = $rowm['telefono'];
  $correo = $rowm['correo'];
  $foto = $rowm['foto'];
  $ciudad = $rowm['ciudad'];
  $depto = $rowm['depto'];
}

$Remision = new RemisionControlador();
$tRemision = $Remision->TablaRemisionIdControlador($id);
//mira la tabla de resolucion para la caratula
// $queryrl = "SELECT * FROM tbl_remisiones WHERE id=$id";
// $resultrl = mysqli_query($mysqli, $queryrl);
// $rowrl = mysqli_fetch_array($resultrl);
foreach ($tRemision as $rowrl) {
  $fechar = $rowrl['fecha'];
  $hora = $rowrl['hora'];
  $documento = $rowrl['documento'];
  $paciente = $rowrl['paciente'];
  $direccionr = $rowrl['direccion'];
  $telefonor = $rowrl['telefono'];
  $edad = $rowrl['edad'];
  $fechan = $rowrl['fechan'];
  $remision = $rowrl['remision'];
  $mconsulta = $rowrl['mconsulta'];
  $diagprin = $rowrl['diagprin'];
  $diagrel1 = $rowrl['diagrel1'];
  $diagrel2 = $rowrl['diagrel2'];
  $especialidadremite = $rowrl['especialidadremite'];
  $docusuario = $rowrl['docusuario'];
}

$usuario = new UsuarioControlador();
$conUsuario = $usuario->consultarDocumentoProfesionalPacControlador($docusuario);
// $query = "SELECT * FROM tbl_usuarios WHERE documento=$docusuario ";
// $resultado = $mysqli->query($query);
// $row = mysqli_fetch_array($resultado);
foreach ($conUsuario as $row) {
  $registro = $row['registro'];
  $nombrepr = $row['nombre'];
  $fotou = $row['foto'];
}

class PDF extends FPDF
{
  function Header()
  {
    $this->SetFont('Arial', 'B', 15);
    $this->Cell(30);
    $this->Ln(20);
  }

  function Footer()
  {
    $this->SetY(-15);
    $this->SetFont('Arial', 'I', 8);

    $this->Ln(3);
    $this->Cell(0, 5, 'Pagina ' . $this->PageNo() . '/{nb}', 0, 0, 'C');
  }

  function Header1()
  {
    //rectangulo logo
    $this->Rect(10, 25, 30, 30, 'C');
    //$this->Image('../img/logo1p.png', 10, 27, 30 );
    $this->Image(/*'../parametros/' .*/$GLOBALS['foto'], 12, 27, 25);
    $this->SetFont('Arial', 'B', 10);
    //linea 1
    $this->Rect(40, 25, 160, 10, 'C');
    $this->Cell(220, 0, $GLOBALS['nombre'], 0, 1, 'C');
    //linea 2
    //$this->Ln();
    $this->Rect(40, 35, 160, 10, 'C');
    $this->Cell(220, 20, 'Direccion  ' . $GLOBALS['direccion'] . '  Telefono  ' . $GLOBALS['telefono'], 0, 1, 'C');
    //linea 3
    //$this->Ln();
    $this->SetFont('Arial', 'B', 10);
    $this->Rect(40, 45, 40, 10, 'C');
    $this->Cell(90, -1, $GLOBALS['ciudad'], 0, 0, 'C');
    $this->Rect(80, 45, 40, 10, 'C');
    $this->Cell(5, -1, $GLOBALS['depto'], 0, 0, 'C');
    $this->Rect(120, 45, 80, 10, 'C');
    $this->Cell(110, -1, $GLOBALS['correo'], 0, 0, 'C');
    //$this->Rect(160, 45, 40, 10, 'C');
    //  $this->Cell(10,-5,'Consecutivo',0,0,'C');
    $this->Ln(10);
  }
}



$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFillColor(232, 232, 232);


$pdf->Header1();
$pdf->SetFont('Arial', '', 14);

$pdf->Cell(0, 7, utf8_decode('REMISION'), 0, 1, 'C');


$pdf->SetFont('Arial', '', 10);

$pdf->Cell(0, 7, utf8_decode('FECHA : ' . $GLOBALS['fechar'] . '  - HORA : ' . $GLOBALS['hora']), 0, 1);
$pdf->Cell(0, 7, utf8_decode('PACIENTE : ' . $GLOBALS['paciente'] . '  - DOCUMENTO : ' . $GLOBALS['documento'] . '  - EDAD : ' . $GLOBALS['edad']), 0, 1);
$pdf->Cell(0, 7, utf8_decode('FECHA NACIMIENTO : ' . $GLOBALS['fechan'] . '  - DIRECCION : ' . $GLOBALS['direccionr'] . '  - TELEFONO : ' . $GLOBALS['telefonor']), 0, 1);
$pdf->Ln();
$pdf->Cell(0, 7, utf8_decode('MOTIVO DE LA CONSULTA : ' . $GLOBALS['mconsulta']), 0, 1);
//$pdf->Ln();
$pdf->Cell(0, 7, utf8_decode('DIAGNOSTICO PRINCIPAL : ' . $GLOBALS['diagprin']), 0, 1);
//$pdf->Ln();
$pdf->Cell(0, 7, utf8_decode('DIAGNOSTICO RELACIONADO 1 : ' . $GLOBALS['diagrel1']), 0, 1);
//$pdf->Ln();
$pdf->Cell(0, 7, utf8_decode('DIAGNOSTICO RELACIONADO 2 : ' . $GLOBALS['diagrel2']), 0, 1);
//$pdf->Ln();
$pdf->Cell(0, 7, utf8_decode('ESPECIALIDAD QUE LO REMITE : ' . $GLOBALS['especialidadremite']), 0, 1);

$pdf->Ln();
$pdf->Cell(0, 7, utf8_decode('REMISION:'), 0, 1, 'C');
$pdf->MultiCell(0, 7, utf8_decode($GLOBALS['remision']), 0, 1);


$pdf->Ln(10);


$pdf->SetX(85);
$pdf->Image(/*'../usuariosad/'.*/($GLOBALS['fotou']), $pdf->GetX(), $pdf->GetY(), 40, 00);
$pdf->Ln(25);
$pdf->Cell(0, 7, utf8_decode($GLOBALS['nombrepr']), 0, 1, 'C');
$pdf->Cell(0, 7, utf8_decode($GLOBALS['registro']), 0, 1, 'C');

$pdf->Output();
