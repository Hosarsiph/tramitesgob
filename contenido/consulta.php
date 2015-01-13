<?php

	require('../fpdf17/fpdf.php');

	/*
	$pdf = new FPDF();
	$pdf->AddPage();
	$pdf->SetFont('Arial','B',16);
	$pdf->Cell(40,10, utf8_decode('Homoclave del Trámite'));
	$pdf->Cell(20,20, 'CIGGET-90A-02');
	//$pdf->Cell(40,20, utf8_decode($nombre));
	$pdf->Output();
	*/

	class PDF extends FPDF {
	  function Header() { //función header
	    $this->SetFont("Arial", "B", 12); //tipo de letra
	    //titulo del encabezado
	    $this->Cell(0,15, utf8_decode('Centro de Investigación en Geografía y Geomática "Ing. Jorge L. Tamayo", A.C.'),1,0,'C');
	    $this->Ln(12); //salto de linea
	    $this->Cell(1,15, utf8_decode('Programa de Financiamiento de Becas'));

	  }

	  function Footer() { //función footer
	    $this->SetY(-15); //posición en el pie. 1.5 cm del borde
	    $this->SetFont("Arial", "I", 0); //tipo de letra
	    //Texto del pie de página
	    $this->Cell(0,10,  utf8_decode('Página '.$this->PageNo().' de {nb}') ,0,0,'C');
	  }

	}

		$pdf= new PDF(); //creamos un nuevo pdf
		$pdf->AliasNbPages(); //total de páginas

		//pag 1
		$pdf->SetMargins(15, 15); //margenes
		$pdf->AddPage("P","Letter"); //nueva página
		$pdf->SetFont("Times", "", 12); //tipo de letra

		$pdf->SetFillColor(218, 216, 216);
		$pdf->Rect(15, 40, 50 , 10, 'F');
		//$pdf->Line(160, 10, 165, 15);
		$pdf->SetXY(17, 40);
		$pdf->Cell(15, 6, utf8_decode('Homoclave del Trámite'), 0 , 1);
		$pdf->SetXY(22, 50);
		$pdf->Cell(15,6, 'CIGGET-90A-02');



		$pdf->SetFillColor(218, 216, 216);
		$pdf->Rect(160, 40, 25 , 10, 'F');
		//$pdf->Line(160, 10, 165, 15);
		$pdf->SetXY(165, 40);
		$pdf->Cell(15, 6, utf8_decode('Folio'), 0 , 1);
		$pdf->Ln(5);
		$pdf->SetXY(165, 50);
		$pdf->Cell(15, 6, $folio, 1, 0);


		$pdf->SetFillColor(218, 216, 216); //color hexadecimal
		$pdf->Rect(137, 60, 60 , 10, 'F'); //$pdf->Rect(x, y , ancho, alto);
		//$pdf->Line(160, 10, 165, 15);
		$pdf->SetXY(140, 60);
		$pdf->Cell(15, 6, utf8_decode('Fecha de Solicitud de Trámite'), 0 , 1);
		$pdf->Ln(5);
		$pdf->SetXY(160, 70);
		$pdf->Cell(15, 6, $fechatramite);


		$pdf->SetFillColor(218, 216, 216);
		$pdf->Rect(15, 83, 180, 10, 'F');
		$pdf->SetXY(80, 85);
		$pdf->Cell(15, 6, utf8_decode('Datos Generales del Solicitante'), 0 , 1);


		//$pdf->SetFillColor(218, 216, 216);
		//$pdf->Rect(15, 95, 50, 10, 'F');
		$pdf->SetXY(15, 97);
		$pdf->Cell(15, 6, utf8_decode('CURP:'), 0 , 1);
		$pdf->SetXY(29, 97);
		$pdf->Cell(15,6, $curp);

		$pdf->SetXY(15, 105);
		$pdf->Cell(15, 6, utf8_decode('Nombre (s):'), 0 , 1);
		$pdf->SetXY(38, 105);
		$pdf->Cell(15,6, $nombre);

		$pdf->SetXY(15, 115);
		$pdf->Cell(15, 6, utf8_decode('Apellido Paterno:'), 0 , 1);
		$pdf->SetXY(47, 115);
		$pdf->Cell(15,6, utf8_decode($appaterno));

		$pdf->SetXY(15, 125);
		$pdf->Cell(15, 6, utf8_decode('Apellido Materno:'), 0 , 1);
		$pdf->SetXY(48, 125);
		$pdf->Cell(15,6, utf8_decode($apmaterno));


		$pdf->SetFillColor(218, 216, 216);
		$pdf->Rect(15, 135, 180, 10, 'F');
		$pdf->SetXY(80, 136);
		$pdf->Cell(15, 6, utf8_decode('Domicilio del Solicitante'), 0 , 1);


		//escribimos un contenido cualquiera
		/*
		for ($i=0; $i<75; $i++){
		  $num=$i+1;
		  $pdf->Cell(0,10, "imprimiendo linea $num", 0,1);
		}
		*/

		$pdf->Output(); //cerramos el documento

?>
