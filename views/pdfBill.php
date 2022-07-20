 <?PHP 

 include "../entities/Bill.php";
 include "../core/Bill_Core.php";
 require ('fpdf184/fpdf.php');

  



$Bill_Core=new Bill_Core();
if (isset($_POST["FULL_NAME"])){
	$listeBill=$Bill_Core->recupererBill($_POST["FULL_NAME"]); 
	
	
foreach($listeBill as $row){  
	

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Image('3S.jpg',10,6,30);
$pdf->Cell(80);
$pdf->Cell(30,10,'INVOICE',1,0,'C');
$pdf->Ln(40);
$pdf->SetFont('Times','',12);
$pdf->Cell(40,10, ('Full name:  '. $row['FULL_NAME'] ) );
$pdf->Ln();
$pdf->Cell(40,10, ('Name on card:  ' .$row['NAME_ON_CARD']) );
$pdf->Ln();
$pdf->Cell(40,10,  ('Adress: '.$row['ADRESS'] ) )	;
$pdf->Ln();
$pdf->Cell(40,10,  ('Creation Date: '.$row['CREATE_DATE']));
$pdf->Ln();
$pdf->Cell(40,10, ('Due Date : ' .$row['DUE_DATE']));
$pdf->Ln();
$pdf->Cell(40,10, ('STATUS : ' .$row['STATUS']));
$pdf->Ln();
$pdf->Cell(150);
$pdf->Cell(40,10,  ('Total: '.$row['TOTAL']) ,1,100,'C');


$pdf->Ln(155);


$pdf->SetFont('Arial','I',8);
$pdf->Cell(0,1,'Page '.$pdf->PageNo(),'C');

$pdf->Output();






}


}


  ?>
