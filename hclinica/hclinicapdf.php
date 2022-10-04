<?php
  
  include('../db.php');
  require '../fpdf/fpdf.php';
  
  session_start();
  date_default_timezone_set('America/Bogota'); 
 
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
     global $causaexterna;

     global $docusuario;
     global $fotou;
     global $nombrepr;
     global $registro;

      global $finalidadconsulta;
     global $motivodelaconsulta;
     global $enfermedadactual;
     global $revisionxsistema;
     global $uanticonceptivos;

     global $menarquia;
     global $fum;
     global $g;
     global $a;
     global $p;
     global $c;

    global $feultparto;
    global $cardvasculares;
    global $pulmonares;
    global $digestivos;
    global $diabetes;
    global $renales;
    global $quirurgicos;
    global $traumaticos;
    global $alergicos;
    global $transfusiones;
    global $medicamentos;
    global $alcohol;
    global $drogas;
    global $cigarrillo;
    global $inmunizaciones;
    global $otros;
    global $antfam;
    global $cabeza;
    global $cara;
    global $cuello;
    global $torax;
    global $corazon;
    global $pulmones;
    global $abdypel;
    global $genext;
    global $colvert;
    global $neurologico;
    global $miemsup;
    global $mieminf;
    global $pielyfaneras;
    global $artic;
    global $fuerzmus;
    global $reflejos;
    global $parescraneales;
    global $psicoemocional;
    global $fc;
    global $fr;
    global $ta;
    global $t;
    global $so2;
    global $pesokg;
    global $tallacm;
    global $imc;
    global $resultadoimc;
    global $impdiag;
    global $condseguir;
    global $incapacidad;
    global $usuario;
    global $docusuario;




    $fecha = date('Y-m-d');

  //query datos caratula
  $querym = "SELECT * FROM tbl_consultorios";
  $resultm = mysqli_query($mysqli, $querym);
  $rowm = mysqli_fetch_array($resultm);
  $nombre = $rowm['nombre'];
  $nit = $rowm['nit'];
  $direccion = $rowm['direccion'];
  $telefono = $rowm['telefono'];
  $correo = $rowm['correo'];
  $foto = $rowm['foto'];
  $ciudad = $rowm['ciudad'];
  $depto = $rowm['depto'];

  //mira la tabla de resolucion para la caratula
  $queryrl = "SELECT * FROM tbl_hclinica WHERE id=$id";
  $resultrl = mysqli_query($mysqli, $queryrl);
  $rowrl = mysqli_fetch_array($resultrl);
  $fechar = $rowrl['fecha'];
  $hora = $rowrl['hora'];
  $documento = $rowrl['documento'];
  $paciente = $rowrl['paciente'];
  $direccionr = $rowrl['direccion'];
  $telefonor = $rowrl['telefono'];
  $edad = $rowrl['edad'];
  $fechan =$rowrl['fechan'];

  $causaexterna = $rowrl['causaexterna'];
  $finalidadconsulta = $rowrl['finalidadconsulta'];
  $motivodelaconsulta = $rowrl['motivodelaconsulta'];
  $enfermedadactual = $rowrl['enfermedadactual'];
  $revisionxsistema = $rowrl['revisionxsistema'];
  $uanticonceptivos = $rowrl['uanticonceptivos'];
  $menarquia = $rowrl['menarquia'];
  $fum = $rowrl['fum'];
  $g = $rowrl['g'];
  $a = $rowrl['a'];
  $p = $rowrl['p'];
  $c = $rowrl['c'];

  $feultparto = $rowrl['feultparto'];
  $cardvasculares = $rowrl['cardvasculares'];
  $pulmonares = $rowrl['pulmonares'];
  $digestivos = $rowrl['digestivos'];
  $diabetes = $rowrl['diabetes'];
  $renales = $rowrl['renales'];
  $quirurgicos = $rowrl['quirurgicos'];
  $traumaticos = $rowrl['traumaticos'];
  $alergicos = $rowrl['alergicos'];
  $transfusiones = $rowrl['transfusiones'];
  $medicamentos = $rowrl['medicamentos'];
  $alcohol = $rowrl['alcohol'];
  $drogas = $rowrl['drogas'];
  $cigarrillo = $rowrl['cigarrillo'];
  $inmunizaciones = $rowrl['inmunizaciones'];
  $otros = $rowrl['otros'];
  $antfam = $rowrl['antfam'];
  $cabeza = $rowrl['cabeza'];
  $cara = $rowrl['cara'];
  $cuello = $rowrl['cuello'];
  $torax = $rowrl['torax'];
  $corazon = $rowrl['corazon'];
  $pulmones = $rowrl['pulmones'];
  $abdypel = $rowrl['abdypel'];
  $genext = $rowrl['genext'];
  $colvert = $rowrl['colvert'];
  $neurologico = $rowrl['neurologico'];
  $miemsup = $rowrl['miemsup'];
  $mieminf = $rowrl['mieminf'];
  $pielyfaneras = $rowrl['pielyfaneras'];
  $artic = $rowrl['artic'];
  $fuerzmus = $rowrl['fuerzmus'];
  $reflejos = $rowrl['reflejos'];
  $parescraneales = $rowrl['parescraneales'];
  $psicoemocional = $rowrl['psicoemocional'];
  $fc = $rowrl['fc'];
  $fr = $rowrl['fr'];
  $ta = $rowrl['ta'];
  $t = $rowrl['t'];
  $so2 = $rowrl['so2'];
  $pesokg = $rowrl['pesokg'];
  $tallacm = $rowrl['tallacm'];
  $imc = $rowrl['imc'];
  $resultadoimc = $rowrl['resultadoimc'];
  $impdiag = $rowrl['impdiag'];
  $condseguir = $rowrl['condseguir'];
  $incapacidad = $rowrl['incapacidad'];
  $usuario = $rowrl['usuario'];
  $docusuario = $rowrl['docusuario'];



  $docusuario = $rowrl['docusuario'];

  $query = "SELECT * FROM tbl_usuarios WHERE documento=$docusuario ";
  $resultado = $mysqli->query($query);
  $row = mysqli_fetch_array($resultado);
    $registro =  $row['registro'];
    $nombrepr =  $row['nombre'];
    $fotou =  $row['foto'];
  

  class PDF extends FPDF
  {
    function Header()
    {
      $this->SetFont('Arial','B',15);
      $this->Cell(30);
      $this->Ln(20);
    }
    
    function Footer()
    {
      $this->SetY(-15);
      $this->SetFont('Arial','I', 8);
     
      $this->Ln(3);
      $this->Cell(0,5, 'Pagina '.$this->PageNo().'/{nb}',0,0,'C' );
    
    } 

        function Header1()
    {
      //rectangulo logo
            $this->Rect(10, 25, 30, 30, 'C');
     // $this->Image('../consultorios/fotospr/java.png', 10, 27, 30 );
      $this->Image('../consultorios/'.$GLOBALS['foto'], 12, 27, 25 );
      $this->SetFont('Arial','B',10);
      //linea 1
            $this->Rect(40, 25, 160, 10, 'C');
      $this->Cell(220,0,$GLOBALS['nombre'],0,1,'C');
      //linea 2
      //$this->Ln();
            $this->Rect(40, 35, 160, 10, 'C');
            $this->Cell(220,20,'Direccion  '.$GLOBALS['direccion'].'  Telefono  '.$GLOBALS['telefono'],0,1,'C');
            //linea 3
            //$this->Ln();
            $this->SetFont('Arial','B',10);
            $this->Rect(40, 45, 40, 10, 'C');
            $this->Cell(90,-1,$GLOBALS['ciudad'],0,0,'C');
            $this->Rect(80, 45, 40, 10, 'C');
            $this->Cell(5,-1,$GLOBALS['depto'],0,0,'C');
            $this->Rect(120, 45, 80, 10, 'C');
            $this->Cell(110,-1,$GLOBALS['correo'],0,0,'C');
            //$this->Rect(160, 45, 40, 10, 'C');
          //  $this->Cell(10,-5,'Consecutivo',0,0,'C');
      $this->Ln(10);
    }

      
  }

  

  $pdf = new PDF();
  $pdf->AliasNbPages();
  $pdf->AddPage();
  $pdf->SetFillColor(232,232,232);
  

$pdf->Header1();
$pdf->SetFont('Arial', '', 14);

$pdf->Cell(0, 7, utf8_decode('HISTORIA CLINICA'), 0, 1,'C');


$pdf->SetFont('Arial', '', 10);

$pdf->Cell(0, 7, utf8_decode('FECHA : '.$GLOBALS['fechar'].'  - HORA : '.$GLOBALS['hora']), 0, 1);
$pdf->Cell(0, 7, utf8_decode('PACIENTE : '.$GLOBALS['paciente'].'  - DOCUMENTO : '.$GLOBALS['documento'].'  - EDAD : '.$GLOBALS['edad']), 0, 1);
$pdf->Cell(0, 7, utf8_decode('FECHA NACIMIENTO : '.$GLOBALS['fechan'].'  - DIRECCION : '.$GLOBALS['direccionr'].'  - TELEFONO : '.$GLOBALS['telefonor']), 0, 1);
$pdf->Ln();
$pdf->Cell(0, 7, utf8_decode('CAUSA EXTERNA : '.$GLOBALS['causaexterna'].'  FINALIDAD DE LA CONSULTA : '.$GLOBALS['finalidadconsulta']), 0, 1);
$pdf->Cell(0, 7, utf8_decode('MOTIVO DE LA CONSULTA : '.$GLOBALS['motivodelaconsulta']), 0, 1);
$pdf->Cell(0, 7, utf8_decode('ENFERMEDAD ACTUAL : '.$GLOBALS['enfermedadactual']), 0, 1);
$pdf->Cell(0, 7, utf8_decode('REVISION X SISTEMA : '.$GLOBALS['revisionxsistema']), 0, 1);
//$pdf->Ln();
$pdf->Cell(0, 7, utf8_decode('USA ANTICONCEPTIVOS : '.$GLOBALS['uanticonceptivos'].'  MENARQUIA : '.$GLOBALS['menarquia'].'  FUM : '.$GLOBALS['fum'].'  G : '.$GLOBALS['g']), 0, 1);
//$pdf->Ln();
$pdf->Cell(0, 7, utf8_decode('A : '.$GLOBALS['a'].'  P : '.$GLOBALS['p'].'  C : '.$GLOBALS['c'].'  FECHA ULTIMO PARTO : '.$GLOBALS['feultparto']), 0, 1);
$pdf->Ln();
$pdf->Cell(0, 7, utf8_decode('ANTECEDENTES PERSONALES'), 0, 1,'C');
$pdf->Cell(0, 7, utf8_decode('CARDIOVASCULARES : '.$GLOBALS['cardvasculares']), 0, 1);
$pdf->Cell(0, 7, utf8_decode('PULMONARES : '.$GLOBALS['pulmonares']), 0, 1);
$pdf->Cell(0, 7, utf8_decode('DIGESTIVOS : '.$GLOBALS['digestivos']), 0, 1);
$pdf->Cell(0, 7, utf8_decode('DIABETES : '.$GLOBALS['diabetes']), 0, 1);
$pdf->Cell(0, 7, utf8_decode('RENALES : '.$GLOBALS['renales']), 0, 1);
$pdf->Cell(0, 7, utf8_decode('QUIRURGICOS : '.$GLOBALS['quirurgicos']), 0, 1);
$pdf->Cell(0, 7, utf8_decode('TRAUMATICOS : '.$GLOBALS['traumaticos']), 0, 1);
$pdf->Cell(0, 7, utf8_decode('ALERGICOS : '.$GLOBALS['alergicos']), 0, 1);
$pdf->Cell(0, 7, utf8_decode('TRANSFUSIONES : '.$GLOBALS['transfusiones']), 0, 1);
$pdf->Cell(0, 7, utf8_decode('MEDICAMENTOS : '.$GLOBALS['medicamentos']), 0, 1);
$pdf->Cell(0, 7, utf8_decode('ALCOHOL : '.$GLOBALS['alcohol']), 0, 1);
$pdf->Cell(0, 7, utf8_decode('DROGAS : '.$GLOBALS['drogas']), 0, 1);
$pdf->Cell(0, 7, utf8_decode('CIGARRILLO : '.$GLOBALS['cigarrillo']), 0, 1);
$pdf->Cell(0, 7, utf8_decode('INMUNIZACIONES : '.$GLOBALS['inmunizaciones']), 0, 1);
$pdf->Cell(0, 7, utf8_decode('OTROS : '.$GLOBALS['otros']), 0, 1);
$pdf->Cell(0, 7, utf8_decode('ANTECEDENTES FAMILIARES : '.$GLOBALS['antfam']), 0, 1);
$pdf->Ln();
$pdf->Cell(0, 7, utf8_decode('EXAMEN FISICO'), 0, 1,'C');
$pdf->Cell(0, 7, utf8_decode('CABEZA : '.$GLOBALS['cabeza']), 0, 1);
$pdf->Cell(0, 7, utf8_decode('CARA : '.$GLOBALS['cara']), 0, 1);
$pdf->Cell(0, 7, utf8_decode('CUELLO : '.$GLOBALS['cuello']), 0, 1);
$pdf->Cell(0, 7, utf8_decode('TORAX : '.$GLOBALS['torax']), 0, 1);
$pdf->Cell(0, 7, utf8_decode('CORAZON : '.$GLOBALS['corazon']), 0, 1);
$pdf->Cell(0, 7, utf8_decode('PULMONES : '.$GLOBALS['pulmones']), 0, 1);
$pdf->Cell(0, 7, utf8_decode('ABDOMEN Y PELVIS : '.$GLOBALS['abdypel']), 0, 1);
$pdf->Cell(0, 7, utf8_decode('GENITALES EXY : '.$GLOBALS['genext']), 0, 1);
$pdf->Cell(0, 7, utf8_decode('COLUMNA VERTEBRAL : '.$GLOBALS['colvert']), 0, 1);
$pdf->Cell(0, 7, utf8_decode('NEUROLOGICO : '.$GLOBALS['neurologico']), 0, 1);
$pdf->Cell(0, 7, utf8_decode('MIEMBROS SUPERIORES : '.$GLOBALS['miemsup']), 0, 1);
$pdf->Cell(0, 7, utf8_decode('MIEMBROS INFERIORES : '.$GLOBALS['mieminf']), 0, 1);
$pdf->Cell(0, 7, utf8_decode('PIEL Y FANERAS : '.$GLOBALS['pielyfaneras']), 0, 1);
$pdf->Cell(0, 7, utf8_decode('ARTICULACIONES : '.$GLOBALS['artic']), 0, 1);
$pdf->Cell(0, 7, utf8_decode('FUERZA MUSCULAR : '.$GLOBALS['fuerzmus']), 0, 1);
$pdf->Cell(0, 7, utf8_decode('REFLEJOS : '.$GLOBALS['reflejos']), 0, 1);
$pdf->Cell(0, 7, utf8_decode('PARES CRANEALES : '.$GLOBALS['parescraneales']), 0, 1);
$pdf->Cell(0, 7, utf8_decode('PSICOEMOCIONAL : '.$GLOBALS['psicoemocional']), 0, 1);

$pdf->Cell(0, 7, utf8_decode('SIGNOS VITALES'), 0, 1,'C');
$pdf->Cell(0, 7, utf8_decode('FC : '.$GLOBALS['fc'].'  FR : '.$GLOBALS['fr'].'  TA : '.$GLOBALS['ta'].'  T : '.$GLOBALS['t']), 0, 1);
$pdf->Cell(0, 7, utf8_decode('%SO2 : '.$GLOBALS['so2'].'  PESO KG : '.$GLOBALS['pesokg'].'  TALLA CM : '.$GLOBALS['tallacm'].'  IMC : '.$GLOBALS['imc'].'  RESULTADO : '.$GLOBALS['resultadoimc']), 0, 1);
$pdf->Cell(0, 7, utf8_decode('IMPRESION DIAGNOSTICA : '.$GLOBALS['impdiag']), 0, 1);
$pdf->Cell(0, 7, utf8_decode('CONDUCTAS A SEGUIR : '.$GLOBALS['condseguir']), 0, 1);
$pdf->Cell(0, 7, utf8_decode('INCAPACIDAD : '.$GLOBALS['incapacidad']), 0, 1);



$pdf->Ln(10);
 
 
$pdf->SetX(85);
$pdf->Image('../usuarios/'.($GLOBALS['fotou']), $pdf->GetX(), $pdf->GetY(),40,00);
$pdf->Ln(25);
$pdf->Cell(0, 7, utf8_decode($GLOBALS['nombrepr']), 0, 1,'C');
$pdf->Cell(0, 7, utf8_decode($GLOBALS['registro']), 0, 1,'C');



$pdf->Output();

?>