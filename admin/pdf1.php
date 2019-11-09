<?php
//require_once('comon.php');
//	session_start(); 
	//$un=$_SESSION['username'];

	
//require 'database.php';

//$id=$_GET['id'];

$id='08203019' ;
//echo "**********$id";
$image_height = 40;
$image_width = 40;

$date=date('d M Y');
$i1=1;



include ('fpdf.php');

$pdf = new FPDF();
$pdf->AddPage();
      
class PDF extends FPDF
{

//Page header
function Header()
{




//Develop by Imran Mahamud & Md jahidur rahman    ID:08203019   Program :BCSE   Email:jsb42069@gmail.com
$address1='IT Division (Card Department)' ;	
$address2='A-A Bhaban (2nd floor), 23 Motijheel C/A , Dhaka - 1000' ;				

		$this->Cell(60);
		$this->SetFont('Times','B',18);
		$this->Write(5, 'PUBALI BANK LIMITED');
		$this->Write(5,$cc);
		$this->Image('images/logo_example.jpg',10,9,17);
		$this->Ln();
		$this-> Cell(65);
		$this->SetFont('Times','B',14);
		$this->Write(9, $address1);
		$this->Ln();
		$this-> Cell(40);
		$this->SetFont('Times','',14);
		$this->Write(5, $address2);
		$this->Ln();
		//$pdf-> Cell(55);
       // $pdf->SetFont('Times','',10);
       // $pdf->Write(5, 'Founded 1991 by Md. Alimullah Miyan');
		//$pdf->Ln();

   	/*
		$day=$_REQUEST['b_code'];
	    $buy = mysql_query("Select b_name from buyer_name where b_code='$day'") ; 
          while($f=mysql_fetch_array($buy))
		  {
		   $buyer_name = $f['b_name'];
		   
		  } 
		*/
		
$this->Ln();
		$this-> Cell(60);
		$this->SetFont('Times','B',15);
		
		$this->Ln();
		$this->Ln();
}
function Footer()
{
	// $this->SetY(-21);
	// $this->SetFont('Arial','B',7);
	 //$this->Cell(0,5, 'Report');
	 $this->SetY(-19);
	  $this->SetFont('Arial','I',7);
	 $this->Cell(0,5, '');
	 $this->SetY(-17);
	  $this->SetFont('Arial','I',7);
	 $this->Cell(0,5, '');
    //Position at 1.5 cm from bottom
    		$this-> Cell(40);
		$this->SetFont('Times','',8);
		$this->Write(5, 'Computer generated Print Copy');
	
	$this->SetY(-20);
    //Arial italic 8
  //  $this->SetFont('Arial','I',10);
    //Page number
  //  $this->Cell(0,5,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}		
		

}

$pdf=new PDF();
$pdf->AliasNbPages();
for($i=1;$i<=4;$i++) 
{
$pdf->AddPage();
$pdf->SetFont('Times','',12);




//$sql = "SELECT distinct image FROM reg_form_alumni where id='$id'";

// run the query and store the results in the $result variable.
//$query=mysql_query($sql);
//$row=mysql_fetch_array($query);


//$title = $row->product_title;
//$price = $row->product_price;
//$pdf->Ln();
$pdf-> Cell(1);
		$pdf->SetFont('Times','',10);
		$pdf->Write(4, 'PBL/HO/ITD(CARD/CARD DELIVERY/Stage-4/       /2015)');
		
		$pdf-> Cell(60);
		$pdf->SetFont('Times','',10);
		$pdf->Write(5, 'Date: ');
		$pdf->Write(5,$date);
		
		$pdf->Ln();
		$pdf->Ln();
	$pdf-> Cell(1);
		$pdf->SetFont('Times','B',10);
		$pdf->Write(5, 'Subject : Delivery of new Issued Pubali Debit card');
	//	$end_date = date("Y-m-d");
	//	$pdf->Write(5,$end_date);

		$pdf->Ln(8);	
		
		$pdf->Ln();
		$pdf->SetFont('Times','',10);
		$pdf->Write(5, 'Dear Sir,');		
		$pdf->Ln();
				
	
				
		$pdf->SetFont('Times','',11);
		$pdf->Write(5, 'We are Forwarding herewith the new issued Pubali Debit Card for onword delivery to your staff/clients with due acknoledgement as requested by you. We furnish below the particular of card for your necessary record.');
		$pdf->Ln(4);
			$pdf->Ln();
			$pdf->SetFont('Times','B',11);
		$pdf->Write(5, 'To activate the cards the card holders fell free to call at 16253 Or 04472000900.');
		
		$pdf->Ln();		
		$pdf-> Cell(8);
		$pdf->Ln(2);				
		$pdf->Ln();

		$pdf->Ln(2);				
		$pdf->Ln();
		$pdf->Ln();
$pdf-> Cell(10);
		$pdf->SetFont('Times','B',10);
		$pdf->Cell(10,7,'S.N',1);
		$pdf->Cell(90,7,'Card Holder Name',1);
		$pdf->Cell(75,7,'Card Number',1);
		
		$pdf->Ln();
	
	for($j=1;$j<=9;$j++) 
{	
		$pdf-> Cell(10);
		$pdf->SetFont('Times','B',10);
		$pdf->Cell(10,7,$j,1);
		$pdf->Cell(90,7,'Card Holder Name',1);
		$pdf->Cell(75,7,'Card Number',1);
		
		$pdf->Ln();		
}
		$pdf->SetFont('Times','',8);
		$pdf->Ln();
		$pdf-> Cell(1);
		$pdf->SetFont('Times','',11);
		$pdf->Write(5, 'Please acknoledge receipt. After receving the forwarding letter, Please scan and send it to the email address delivery.card@pubalibankbd.com with authorize signature , branch seal and date. Otherwise the above cards will not be activated.');
		$pdf->Ln();
		$pdf->Ln();
		$pdf-> Cell(1);
		$pdf->SetFont('Times','',10);
		$pdf->Write(5, 'Yours faithfully,');
            		$pdf->Ln(8);
		
		
		$pdf-> Cell(1);
		
$image_height = 30;
$image_width = 15;
//$start_x = $pdf->GetX();
//$start_y = $pdf->GetY();
$pdf->Image('images/alamin.jpg', $pdf->GetX(), $pdf->GetY(), $image_height, $image_width); 
		
		
	//	$pdf->Image('images/khairul.jpg');
		$pdf-> Cell(140);
		$pdf->Image('images/alamin.jpg', $pdf->GetX(), $pdf->GetY(), $image_height, $image_width); 

	//	$pdf->Image('images/khairul.jpg');
		
		$pdf->Ln(15);		
		$pdf-> Cell(1);
		$pdf->SetFont('Times','B',12);
		$pdf->Write(5, 'Name1');
		$pdf-> Cell(135);
		$pdf->SetFont('Times','B',12);
		$pdf->Write(5, 'Name2');
		
		$pdf->Ln();
		$pdf-> Cell(1);
		$pdf->SetFont('Times','B',12);
		$pdf->Write(5, 'Designation1,');
		$pdf-> Cell(120);
		$pdf->SetFont('Times','B',12);
		$pdf->Write(5, 'Designation2');
		$pdf->Ln();
		
		
		
		
	//	$this->Image('images/logo_example.jpg',80,9,17);
		
}
$pdf->Ln();

$pdf->Output();

?>