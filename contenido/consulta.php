<?php

require('../fpdf17/fpdf.php'); 


$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,10,'¡Hola, Mundo!');
$pdf->Cell(40,20, $nombre);
$pdf->Output();

?>
