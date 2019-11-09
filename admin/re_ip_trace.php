
<?php
/*

$stid = oci_parse($conn, "SELECT CF_IP FROM DUAL");
oci_execute($stid);
while (($rowA = oci_fetch_array($stid, OCI_BOTH)) != false)
{ 
   $CF_IP=$rowA['CF_IP'];   
}
*/

if($_SERVER["HTTP_X_FORWARDED_FOR"] != ""){
   $IP = $_SERVER["HTTP_X_FORWARDED_FOR"];
   $proxy = $_SERVER["REMOTE_ADDR"];
   $host = @gethostbyaddr($_SERVER["HTTP_X_FORWARDED_FOR"]);
}else{
   $IP = $_SERVER["REMOTE_ADDR"];
   $proxy = "No proxy detected";
   $host = @gethostbyaddr($_SERVER["REMOTE_ADDR"]);
}

?>