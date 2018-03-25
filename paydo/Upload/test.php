<?php
require('fk/fpdf.php');

$pdf = new FPDF('P', 'pt', 'Letter');

$pdf->AddPage();

$pdf->SetFont('Arial', 'B', 20);

//$pdf->SetFillColor(36, 96, 84);
//$pdf->SetTextColor(225);
$pdf->SetLineWidth(0);

$pdf->SetTopMargin(60);
$pdf->SetLeftMargin(450);
$pdf->SetRightMargin(60);

$pdf->SetAutoPageBreak(true,35);

$pdf->SetAuthor('Andrew Burgess');
$pdf->SetTitle('Generating PDFs with PHP');
$pdf->SetSubject('PDFs');
$pdf->SetKeywords('php pdf generating fpdf-library');
$pdf->SetCreator('test.php');

//$pdf->Cell(100, 16, "Hello, World!");

$pdf->Cell(100, 16, "Hello, World!");

$pdf->Output();

?>