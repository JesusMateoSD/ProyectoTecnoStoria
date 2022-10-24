<?php
	
	require '../fpdf/fpdf.php';
	
	class PDF extends FPDF
	{
		function Header()
		{
			$this->Image('../parametros/fotospr/logo.png', 5, 5, 25 );
			$this->SetFont('Arial','B',20);
			$this->Cell(30);
			$this->Cell(120,10, 'Reporte De Bitacora',0,0,'C');
			$this->Ln(20);
		}
		
		function Footer()
		{
			$this->SetY(-15);
			$this->SetFont('Arial','I', 7);
			$this->Cell(0,10, 'Pagina '.$this->PageNo().'/{nb}',0,0,'C' );
		}		
	}
?>