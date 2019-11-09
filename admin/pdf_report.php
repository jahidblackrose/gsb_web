<?php
/*
include "db_Class.php";
$obj = new db_class();
$obj->MySQL();
*/

include ('fpdf.php');
$pdf =& new FPDF();
$pdf->AddPage();

$date=date('M-d-Y');
	//require_once('comon.php');
	//session_start(); 
	$un=$_GET['ID'];

/*	$SQL="select * from m07t_studentinfo where id='$un'";    //table name
	$results = $obj->sql($SQL);
	while($row = mysql_fetch_array($results))
	{
	$namea=$row['name'];
	$id=$row['id'];
	$prog=$row['program'];
	$email=$row['email'];
	}

*/
	

//Develop by Imran Mahamud & Md jahidur rahman    ID:08203019   Program :BCSE   Email:jsb42069@gmail.com


//Develop by Imran Mahamud & Md jahidur rahman    ID:08203019   Program :BCSE   Email:jsb42069@gmail.com
$address1='IT Division (Card Department)' ;	
$address2='A-A Bhaban (2nd floor), 23 Motijheel C/A , Dhaka - 1000' ;				

		$pdf->Cell(60);
		$pdf->SetFont('Times','B',18);
		$pdf->Write(5, 'PUBALI BANK LIMITED');
		$pdf->Write(5,$cc);
		$pdf->Image('images/logo_example.jpg',10,9,17);
		$pdf->Ln();
		$pdf-> Cell(65);
		$pdf->SetFont('Times','B',14);
		$pdf->Write(5, $address1);
		$pdf->Ln();
		$pdf-> Cell(40);
		$pdf->SetFont('Times','B',14);
		$pdf->Write(5, $address2);
		$pdf->Ln();
		//$pdf-> Cell(55);
       // $pdf->SetFont('Times','',10);
       // $pdf->Write(5, 'Founded 1991 by Md. Alimullah Miyan');
		//$pdf->Ln();
		$pdf->Ln();
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
		$pdf->Ln(2);				//Develop by Imran Mahamud & Md jahidur rahman    ID:08203019   Program :BCSE   Email:jsb42069@gmail.com
		$pdf->Ln();
		$pdf->Ln();
		$pdf->Ln(2);				//Develop by Imran Mahamud & Md jahidur rahman    ID:08203019   Program :BCSE   Email:jsb42069@gmail.com
		$pdf->Ln();
		$pdf->Ln();
$pdf-> Cell(10);
		$pdf->SetFont('Times','B',10);
		$pdf->Cell(10,7,'S.N',1);
		$pdf->Cell(90,7,'Card Holder Name',1);
		$pdf->Cell(75,7,'Card Number',1);
		
		$pdf->Ln();
		
		$pdf-> Cell(10);
		$pdf->SetFont('Times','B',10);
		$pdf->Cell(10,7,'S.N',1);
		$pdf->Cell(90,7,'Card Holder Name',1);
		$pdf->Cell(75,7,'Card Number',1);
		
		$pdf->Ln();		
/*
	$SQL="SELECT a.id,a.course_code as course_codea,a.retake,b.course_code,b.course_name,b.credit_hrs
FROM m07t_courseoffering a
LEFT JOIN m07t_course b
ON  a.course_code=b.course_code
WHERE a.id = '$id' AND a.val != '1'
GROUP BY b.course_code";    //table name
//die($SQL) ;

	$results = $obj->sql($SQL);

$total=0;
$sl=1;
	while($row1 = mysql_fetch_array($results))
	{
		$pdf-> Cell(28);
		//$pdf->Cell(10,7,$row['sl'],1);
		$pdf->SetFont('Times','',8);
		$pdf->Cell(10,7,$sl,1);
		
		if($row1['retake']=='1')
		{
		$pdf->Cell(20,7,$row1['course_codea'].'(R)',1);
		}
		else
		{
		$pdf->Cell(20,7,$row1['course_codea'],1);
		}
		
		$pdf->Cell(55,7,$row1['course_name'],1);
		$pdf->Cell(30,7,$row1['credit_hrs'],1);
		$sl++;
		$total=$total+$row1['credit_hrs'];
		$pdf->Ln();
		}
		*/
		

		$pdf->SetFont('Times','',8);//Develop by Imran Mahamud & Md jahidur rahman    ID:08203019   Program :BCSE   Email:jsb42069@gmail.com
	//	$pdf->Write(5, '__________________________________________________________________________________________________________________________________');
	//	$pdf->Ln();
		$pdf->Ln();
		$pdf-> Cell(1);
		$pdf->SetFont('Times','',11);
		$pdf->Write(5, 'Please acknoledge receipt. After receving the forwarding letter, Please scan and send it to the email address delivery.card@pubalibankbd.com with authorize signature , branch seal and date. Otherwise the above cards will not be activated.');
		$pdf->Ln();
		$pdf->Ln();



		
		
		
		
		
		
		

		

		$pdf-> Cell(1);
		$pdf->SetFont('Times','',10);
		$pdf->Write(5, 'Yours faithfully,');
            		$pdf->Ln();
		$pdf->Ln();
	
			// Utpal Kanti Das
 			//Faculty and Coordinator
			//College of Engineering and Technology
			//Computer Science and Engineering Department'
		$pdf->Ln();
		$pdf-> Cell(3);
		$pdf->SetFont('Times','',8);
		$pdf->Write(5, '-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------');
		$pdf->Ln();
		$pdf-> Cell(50);
		$pdf->SetFont('Times','',8);
		
		$pdf->Write(4, 'footer');
				$pdf->Ln();
		$pdf-> Cell(40);
		$pdf->SetFont('Times','',8);
		$pdf->Write(4,'footer');

		
$pdf->Ln();
$pdf->Ln();
		
		$pdf->Output();
		
	//	$path='D://jahid/';     //last
	//	$val_name=$student_id.'-'.($program).'.pdf';   //lst
		//$pdf->Output('D://immi.'$val_name'.pdf','F');
	//	$pdf->Output($path.$val_name,'F');   //last

//$cc++;

//Develop by Imran Mahamud & Md jahidur rahman    ID:08203019   Program :BCSE   Email:jsb42069@gmail.com

//$cdate='';


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
</body>
</html>