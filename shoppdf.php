<?php 
require('fpdf.php');
include('connection.php'); 
$tab=filter_input(INPUT_GET,"menu");
$result1 = mysqli_query($con,"SELECT * FROM rest  where mobno='$tab'");
$row1 = mysqli_fetch_array($result1);
$result2 = mysqli_query($con,"SELECT * FROM search  where mobno='$tab'");
$row2 = mysqli_fetch_array($result2);
$cat=$row2['cid'];
$result3 = mysqli_query($con,"SELECT * FROM category  where cid='$cat'");
$row3 = mysqli_fetch_array($result3);
class PDF extends FPDF
{
function Header()
{
	global $title;

	// Arial bold 15
	$this->Image('images/prude3.png',40,10,120);
	$this->SetFont('Arial','B',20);
	// Calculate width of title and position
	$w = $this->GetStringWidth($title)+39;
	
	$this->SetY(32);
	$this->SetX((210-$w)/2);
	// Colors of frame, background and text
	$this->SetDrawColor(0,80,180);
	$this->SetFillColor(230,230,0);
	$this->SetTextColor(220,50,50);
	// Thickness of frame (1 mm)
	$this->SetLineWidth(1);
	// Title
	// Line break
	$this->Ln(5);
}

function Footer()
{
	// Position at 1.5 cm from bottom
	$this->SetY(-15);
	// Arial italic 8
	$this->SetFont('Arial','I',8);
	// Text color in gray
	$this->SetTextColor(128);
	// Page number
	$this->Cell(0,10,$this->title,0,0,'C');
	$this->Cell(0,10,'Page '.$this->PageNo(),0,0,'R');
}
function ShopTitle($label)
{
	// Arial 12
	$this->SetFont('Arial','',18);
	// Background color
	$this->SetFillColor(82,82,81);
	$this->SetTextColor(255);
	// Title
	$this->Cell(0,15,"$label",1,1,'C',true);
	// Line break
	$this->Ln(6);
}
function ChapterTitle($label)
{
	// Arial 12
	$this->SetFont('Arial','',12);
	// Background color
	$this->SetFillColor(200,220,255);
	// Title
	$this->Cell(0,10,"$label",0,1,'L',true);
	// Line break
	$this->Ln(2);
}
function Services($file)
{
	// Read text file
	$txt = $file;
	// Times 12
	$this->SetFont('Times','',12);
	// Output justified text
	$this->MultiCell(0,5,$txt);
	// Line break
	$this->Ln(10);
}

function ChapterBody($file)
{
	// Read text file
	$txt = file_get_contents($file);
	// Times 12
	$this->SetFont('Times','',12);
	// Output justified text
	$this->MultiCell(0,5,$txt);
	// Line break
	$this->Ln();
	// Mention in italics
	$this->SetFont('','I');
	$this->Cell(0,5,'(end of excerpt)');
}

function PrintChapter($num, $title, $file)
{
	$this->AddPage();
	$this->ChapterTitle($num,$title);
	$this->ChapterBody($file);
}
}

$pdf = new PDF();
$pdf->AddPage();
$title = $row2['shopnm'];
$pdf->SetTitle($title);
$pdf->ShopTitle($title);
$pdf->SetTextColor(10);
$pdf->ChapterTitle("Shop Details:");
$pdf->Cell(0,9,'Owner Name: '.$row1['ownernm'],1,1);
$pdf->Cell(100,9,'Category: '.$row3['categorynm'],1,0);
$pdf->Cell(90,9,'Specialization: '.$row2['spl'],1,1);
$pdf->Cell(0,9,'Address: '.$row2['shopadd'],1,1);
$pdf->Cell(100,9,'Mobile Number: '.$row2['mobno'],1,0);
$pdf->Cell(90,9,'Email-ID: '.$row1['mailid'],1,1);
$pdf->Ln(4);
$pdf->ChapterTitle("SERVICES:");
$fi=$row1['serv'];
$pdf->Services($fi);
$pdf->ChapterTitle("SPECIAL OFFERS:");
$pdf->Image('images/discount.png',17,155,170);
$pdf->Output();
?>