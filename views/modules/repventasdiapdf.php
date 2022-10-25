<?php
	include('views/fpdf/fpdf.php');
  date_default_timezone_set('America/Bogota'); 

	global $fecha; 
	global $valor;

	$fecha = $_GET['fecha'];

	$Pagos = new PagosControlador();
	$FacturaFecha = $Pagos->ValorFacturaTotalFControlador($fecha);
  // $queryag = "SELECT SUM(total) as mtotal FROM tbl_dfactura WHERE fecha = '$fecha'";
  // $resultag = mysqli_query($mysqli, $queryag);
  // $rowag = mysqli_fetch_array($resultag);
  $valor = $FacturaFecha['mtotal'];

	class PDF extends FPDF{
		function Footer()
		{
			$this->SetY(-15);
			$this->SetFont('Arial','B', 10);
			//$this->SetTextColor(153,0,153);
			$this->Cell(10,-15,'Valor Total Ventas :  '.number_format($GLOBALS['valor']),0,0,'L' );
			$this->Cell(0,10, 'Pagina '.$this->PageNo().'/{nb}',0,0,'C' );
		}

		/////clase de la tabla
		function tabla($header,$data){
		    //Colores, ancho de línea y fuente en negrita de CABECERA
		    $this->SetFillColor(51,178,255);   // fondo de celda
		    $this->SetTextColor(255);       // color del texto
		    $this->SetDrawColor(128,0,0);   // color de linea
		    $this->SetLineWidth(.3);        // ancho de linea
		   // $this->SetFont('','B');         // negrita
				$this->SetFont('Arial','B', 8);
				$w=array(20,20,80,25,20,25);   // en este arreglo definiremos el ancho de cada columna

		    for($i=0; $i<count($header) ; $i++)
					$this->Cell($w[$i],7,$header[$i],1,0,'C',1); //por cada encabezado existente, crea una celda
					$this->Ln();
					//Colores, ancho de línea y fuente en negrita de CONTENIDO
					$this->SetFillColor(224,235,255); //
					$this->SetTextColor(0);
					$this->SetFont('');
					//Datos
					$fill=false; // variable para alternar relleno
					foreach($data as $row){
						$columna = explode(";",$row); //separar los datos en posiciones de arreglo
		        $this->Cell($w[0],6,$columna[0],'LR',0,'L',$fill); //celda(ancho,alto,salto de linea,border,alineacion,relleno)
		        $this->Cell($w[1],6,$columna[1],'LR',0,'L',$fill);
		        $this->Cell($w[2],6,$columna[2],'LR',0,'C',$fill);
		        $this->Cell($w[3],6,$columna[3],'LR',0,'C',$fill);
		        $this->Cell($w[4],6,$columna[4],'LR',0,'C',$fill);
		        $this->Cell($w[5],6,$columna[5],'LR',0,'C',$fill);
		       
		        $this->Ln();
		        $fill=!$fill; //se alterna el valor del boolean $fill para cambiar relleno
		    }
		    $this->Cell(array_sum($w),0,'','T');
		}
///fin clase tabla		
	}

$pdf = new PDF(); 
$pdf->AliasNbPages(); //funcion que calcula el numero de paginas

$FacturaFechaTotal = $Pagos->TablaFacturaDFechasControlador($fecha); 
// $sql1 = "SELECT * FROM tbl_dfactura  WHERE fecha = '$fecha'";
// $result1 = mysqli_query($mysqli, $sql1);
$head = array("FACTURA","FECHA","PRODUCTO","VALOR","CANTIDAD","TOTAL"); // cabecera
//$fila = mysqli_fetch_array($result1);

$i=0;
// while ($fila = mysqli_fetch_array($result1)){  //llenar variable dat con los campos de una fila unidos por ;
foreach($FacturaFechaTotal as $fila){
 	$dat[$i]=$fila[1].";".$fila[2].";".$fila[5].";".number_format($fila[6]).";".number_format($fila[7]).";".number_format($fila[8]); //concatenar para luego ser separado por explode()
	$i++;

}

$pdf->AddPage(); //crear documento
$pdf->Image('views/img/fotospr/pausa128.png',10,8,30,30); //añadir imagen
$pdf->Cell(40);
$pdf->SetFont('Arial','',24);
$pdf->Cell(140,30,"Reporte de Ventas x Fecha",0,0,'C');
$pdf->Ln(35);
$pdf->SetFont('Arial','',10);
$pdf->Cell(50,1,"Fecha Generacion Reporte: ".date("d-m-Y"),0,0,'L');
$pdf->Ln(5);
$pdf->Cell(50,1,"Dia del Reporte: ".$fecha,0,0,'L');
$pdf->Ln(7);
$pdf->tabla($head,$dat); 
$pdf->Output(); //el resto es historia

?>