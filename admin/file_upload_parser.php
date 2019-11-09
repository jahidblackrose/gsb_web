<?php

require_once('re_login_connection.php');
 

$fileName = $_FILES["file1"]["name"]; // The file name
$fileTmpLoc = $_FILES["file1"]["tmp_name"]; // File in the PHP tmp folder
$fileType = $_FILES["file1"]["type"]; // The type of file it is
$fileSize = $_FILES["file1"]["size"]; // File size in bytes
$fileErrorMsg = $_FILES["file1"]["error"]; // 0 for false... and 1 for true


//$copied = copy($_FILES['file1']['tmp_name'],$newname);


 $psl = $_SESSION['slid'];

 //die($psl);

/*
$filename = stripslashes($_FILES['file1']['name']);
$extension = getExtension($filename);
$extension = strtolower($extension);
*/
$position= strpos($fileName, "."); 
$fileextension= substr($fileName, $position + 1);
$extension= strtolower($fileextension);

$image_name=time().'_'.$fileName;
//the new name will be containing the full path where will be stored (images folder)
$newname="uploads/".$image_name;
//we verify if the image has been uploaded, and print error instead
$copied = copy($_FILES['file1']['tmp_name'],$newname);


//if it is not a known extension, we will suppose it is an error and will not upload the file, otherwize we will do more tests
if (($extension != "jpg") && ($extension != "jpeg") && ($extension != "mp4") && ($extension != "ppt") && ($extension != "doc") && ($extension != "pdf") && ($extension != "wmv"))
{
//print error message
echo '<h1>Unknown extension!</h1>';
exit();
}

/*
$size=filesize($_FILES['image']['tmp_name']);
//compare the size with the maxim size we defined and print error if bigger
if ($size > MAX_SIZE*1024)
{
echo '<h1>You have exceeded the size limit!</h1>';
exit();
}
*/

if (!$copied) 
{ // if file not chosen
    echo "ERROR: Please browse for a file before clicking the upload button.";
    exit();
}
//if(move_uploaded_file($fileTmpLoc, "uploads/$copied"))

if(copy($_FILES['file1']['tmp_name'],$newname))
{


	$SQL="INSERT INTO `cms_file` (`sl`, `content_id`, `file`, `type`) VALUES (NULL, '$psl', '$newname', '$fileType')" ;
//die($query) ;
	 $conn->query($SQL);
   
//	session_destroy();
    echo "$fileName upload is complete";
} 
else
{
    echo "move_uploaded_file function failed";
}
?>