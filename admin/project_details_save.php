<?php
require_once('comon.php');
session_start(); 
$un_wastage=$_SESSION['username_wastage'];
include "db_Class.php";

   
$stid = oci_parse($conn, "select SL,USER_NAME,RULE from SDDPMS_ADMIN_LOGIN where USER_NAME='$un_wastage'");
oci_execute($stid);
while (($rowA = oci_fetch_array($stid, OCI_BOTH)) != false)
{ 
   $user_id=$rowA['SL'];   
   $user_name=$rowA['USER_NAME'];
   $user_type=$rowA['RULE'];  
}  
/*
define ("MAX_SIZE","100000");  
//This function reads the extension of the file. It is used to determine if the file is an image by checking the extension. 
function getExtension($str) {
$i = strrpos($str,".");
if (!$i) { return ""; }
$l = strlen($str) - $i;
$ext = substr($str,$i+1,$l);
return $ext;
}
*/
if($_SERVER["REQUEST_METHOD"] == "POST")
{ 
$SEQ=$_POST['SEQ'];
$enddate=$_POST['pdates'];
$pstatus=$_POST['pstatus'];
$comment=$_POST['comment'];
}
//$new_date=substr($DATE,0,6).$nyear ;
//require("image_upload.php") ;
//$ryear=$_POST['ryear'];
//$e_date=date('d-m-Y', strtotime($DATE. ' - ' .$ardays.' day')) ;

 if($_SERVER["HTTP_X_FORWARDED_FOR"] != "")
 {
 $IP    = $_SERVER["HTTP_X_FORWARDED_FOR"];
 }
 else
 {
 $IP    = $_SERVER["REMOTE_ADDR"];
 }

if($SEQ!=NULL AND $user_id!=NULL)
{


$sql="UPDATE SDDPMS_PROJECT SET UPDATE_ID='$user_id'";
//die($query) ;
	if($enddate!=NULL)
		{
			$sql = $sql. ", END_DATE='$enddate'" ;
		}
	if($pstatus!=NULL)
		{
			$sql = $sql. ", PROJECT_STATUS='$pstatus'" ;
		}
	if($comment!=NULL)
		{
			$sql = $sql. ", PROJECT_COMMENT='$comment'" ;
		}
	$sql = $sql. " , UPDATE_IP='$IP' WHERE PROJECT_ID='$SEQ'" ;

//die($sql);

$st = oci_parse($conn, $sql); 
oci_execute($st);
/*
$query1="UPDATE PRS_TASK_ENTRY SET AGMT_DATE='$new_date',REMIND_YEAR='$nyear',USERNAME='$user_name' WHERE SEQ='$SEQ'";
$st1 = oci_parse($conn, $query1); 
oci_execute($st1);
*/
/*
$stid = oci_parse($conn, "SELECT DAY_LEFT,SL FROM PRS_TASK_SCHEDULE WHERE SEQ='$SEQ'");
oci_execute($stid);
while (($rowA = oci_fetch_array($stid, OCI_BOTH)) != false)
{ 
   
$DAY_LEFT=$rowA['DAY_LEFT']; 
$TSSL=$rowA['SL'];   
$e_date=date('d-m-Y', strtotime($new_date. ' - ' .$DAY_LEFT.' day')) ;

$query2="UPDATE PRS_TASK_SCHEDULE SET RDATE='$e_date',USERNAME='$user_name' WHERE SEQ='$SEQ' AND SL='$TSSL'";
$st2 = oci_parse($conn, $query2); 
oci_execute($st2);
}  
*/

$a= '<div align="center" class="n_ok"><p><strong><span style="color:#000">Updated successfully. </span></p></div>';
//echo $a ; 
}
  else
  {
    $a= '<div class="n_error"><p>Error! Please fill-up related fields.</p></div>';
//echo $a ;
  }
oci_commit($conn); 

?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div align="center">
	
<?php echo $a ; ?>

<br/>
<button class="button close" onclick="refreshAndClose()">CLOSE</button>

</div>


<script type="text/javascript">
    function refreshAndClose() {
        window.opener.location.reload(true);
        window.close();
    }
</script>
</body>
</html>
