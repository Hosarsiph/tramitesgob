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
		$pdf->Cell(15,6, utf8_decode($nombre));

		$pdf->SetXY(15, 115);
		$pdf->Cell(15, 6, utf8_decode('Apellido Paterno:'), 0 , 1);
		$pdf->SetXY(47, 115);
		$pdf->Cell(15,6, utf8_decode($appaterno));

		$pdf->SetXY(15, 125);
		$pdf->Cell(15, 6, utf8_decode('Apellido Materno:'), 0 , 1);
		$pdf->SetXY(48, 125);
		$pdf->Cell(15,6, utf8_decode($apmaterno));

		$pdf->SetXY(130, 97);
		$pdf->Cell(15, 6, utf8_decode('Telefono:'), 0 , 1);
		$pdf->SetXY(160, 97);
		$pdf->Cell(15,6, ($telefono));

		$pdf->SetXY(130, 107);
		$pdf->Cell(15, 6, utf8_decode('Extensión:'), 0 , 1);
		$pdf->SetXY(160, 107);
		$pdf->Cell(15,6, ($extension));

		$pdf->SetXY(130, 117);
		$pdf->Cell(15, 6, utf8_decode('Celular:'), 0 , 1);
		$pdf->SetXY(160, 117);
		$pdf->Cell(15,6, ($telefonomovil));

		$pdf->SetXY(130, 127);
		$pdf->Cell(15, 6, utf8_decode('e-mail:'), 0 , 1);
		$pdf->SetXY(143, 127);
		$pdf->Cell(15,6, ($email));


		$pdf->SetFillColor(218, 216, 216);
		$pdf->Rect(15, 135, 180, 10, 'F');
		$pdf->SetXY(80, 136);
		$pdf->Cell(15, 6, utf8_decode('Domicilio del Solicitante'), 0 , 1);

		$pdf->SetXY(15, 145);
		$pdf->Cell(15, 6, utf8_decode('Tipo de Vialidad:'), 0 , 1);
		$pdf->SetXY(48, 145);
		$pdf->Cell(15,6, utf8_decode($vialidad));

		$pdf->SetXY(15, 155);
		$pdf->Cell(15, 6, utf8_decode('Nombre de la Vialidad:'), 0 , 1);
		$pdf->SetXY(57, 155);
		$pdf->Cell(15,6, utf8_decode($calle));

		$pdf->SetXY(15, 165);
		$pdf->Cell(15, 6, ('Colonial:'), 0 , 1);
		$pdf->SetXY(32, 165);
		$pdf->Cell(15,6, utf8_decode($colonia));

		$pdf->SetXY(15, 175);
		$pdf->Cell(15, 6, ('Delegacion o Municipio:'), 0 , 1);
		$pdf->SetXY(59, 175);
		$pdf->Cell(15,6, utf8_decode($municipio));

		$pdf->SetXY(15, 185);
		$pdf->Cell(15, 6, ('Estado:'), 0 , 1);
		$pdf->SetXY(32, 185);
		$pdf->Cell(15,6, utf8_decode($estado));

		$pdf->SetXY(130, 145);
		$pdf->Cell(15, 6, ('Numero exterior:'), 0 , 1);
		$pdf->SetXY(160, 145);
		$pdf->Cell(15,6, ($numeroexte));

		$pdf->SetXY(130, 155);
		$pdf->Cell(15, 6, ('Numero interior:'), 0 , 1);
		$pdf->SetXY(160, 155);
		$pdf->Cell(15,6, ($numeinte));

		$pdf->SetXY(130, 165);
		$pdf->Cell(15, 6, ('Codigo Postal:'), 0 , 1);
		$pdf->SetXY(160, 165);
		$pdf->Cell(15,6, ($codigopostal));

		$pdf->SetFillColor(218, 216, 216);
		$pdf->Rect(15, 185, 180, 10, 'F');
		$pdf->SetXY(80, 186);
		$pdf->Cell(15, 6, utf8_decode('Información del Trámite'), 0 , 1);

		$pdf->SetXY(15, 195);
		$pdf->Cell(15, 6, ('Tipo de Beca:'), 0 , 1);
		$pdf->SetXY(40, 195);
		$pdf->Cell(15,6, utf8_decode($tipobeca));

		$pdf->SetXY(15, 205);
		$pdf->Cell(15, 6, ('Ciclo Escolar:'), 0 , 1);
		$pdf->SetXY(42, 205);
		$pdf->Cell(15,6, ($cicloescolar));


		//$pdf->SetXY(15, 215);
		//$pdf->Cell(15, 6, utf8_decode('Propedéutico:'), 0 , 1);
		$pdf->SetXY(15, 215);
		$pdf->Cell(15,6, ($propedeutico));

		$pdf->SetXY(15, 225);
		$pdf->Cell(15,6, ($especialidad));

		$pdf->SetXY(15, 235);
		$pdf->Cell(15, 6, ('Oferta Educativa:'), 0 , 1);
		$pdf->SetXY(46, 235);
		$pdf->Cell(15,6, utf8_decode($maestria));
		$pdf->Cell(15,6, utf8_decode($doctorado));

		$pdf->AddPage();

		$pdf->SetXY(15, 40);
		$pdf->Cell(15, 6, utf8_decode('Tiene el beneficio de beca de otra institución u organismo:'), 0 , 1);
		$pdf->SetXY(135, 245);
		$pdf->Cell(15,6, ($otrabeca));

		$pdf->SetXY(15, 50);
		$pdf->Cell(15, 6, utf8_decode('Tiene otros ingresos:'), 0 , 1);
		$pdf->SetXY(60, 255);
		$pdf->Cell(15, 6, ($otroingreso));


		//escribimos un contenido cualquiera
		/*
		for ($i=0; $i<75; $i++){
		  $num=$i+1;
		  $pdf->Cell(0,10, "imprimiendo linea $num", 0,1);
		}
		*/

		$pdf->Output(); //cerramos el documento

?>
