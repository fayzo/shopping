<?php
require('FPDF/fpdf.php');

class PDF extends FPDF
{
// Page header
function Header()
{
    // Logo
    $this->Image('FPDF/img/no_image.jpg',10,6,30);
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Move to the right
    $this->Cell(80);
    // Title
    $this->SetDrawColor(0,80,180);
    $this->SetFillColor(200,220,255);
    $this->SetTextColor(220,50,50);
    $this->SetLineWidth(1);
    $this->Cell(30,10,'Title',1,1,'C');
    // Line break
    $this->Ln(25);
}

// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}

function ChapterTitle($num, $label)
{
    // Arial 12
    $this->SetFont('Arial','',12);
    // Background color
    $this->SetFillColor(200,220,255);
    // Title
    $this->Cell(0,6,"Chapter $num : $label",0,1,'L',true);
    // Line break
    $this->Ln(4);
}

}

// Instanciation of inherited class
$pdf = new PDF('P','mm','A4');
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->ChapterTitle("sdds","df");
$pdf->SetFont('Arial','B',16);
$pdf->Cell(100,10,'Hello World faysal!',1,1,'C');
$pdf->Ln(2);
$pdf->Cell(160,10,'Powered by FPDF.',1,1,'C');
$pdf->Ln(2);
$pdf->SetFillColor(200,220,255);
$pdf->Cell(20,10,'Title',1,1,'C',true);

$pdf->SetFont('Times','',12);
for($i=1;$i<=40;$i++)
    $pdf->Cell(0,10,'Printing line number '.$i,0,1);
$pdf->Output();
?>
