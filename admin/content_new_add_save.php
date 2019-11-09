<?php
require_once('re_login_connection.php');

if($_SERVER["REQUEST_METHOD"] == "POST")
{ 

error_reporting(0);
$change="";
$abc="";
 define ("MAX_SIZE","400");
 function getExtension($str) {
         $i = strrpos($str,".");
         if (!$i) { return ""; }
         $l = strlen($str) - $i;
         $ext = substr($str,$i+1,$l);
         return $ext;
 }

 $errors=0;


//  $crop_type    =trim(mysqli_real_escape_string($_POST['crop_type']));

       
    $type       = trim(mysqli_real_escape_string($conn,$_POST['type']));
    $date       = trim(mysqli_real_escape_string($conn,$_POST['date']));
    $title       = trim(mysqli_real_escape_string($conn,$_POST['title']));
    

       $editor1       = trim(mysqli_real_escape_string($conn,$_POST['editor1']));
       $name       = trim(mysqli_real_escape_string($conn,$_POST['name']));
       $location       = trim(mysqli_real_escape_string($conn,$_POST['location']));
    


    $SQL="INSERT INTO `cms_settings_new` (`sl`, `type`, `name`, `event_date`,`location`, `image`, `content`, `active`, `userid`) VALUES (NULL, '$type', '$title', '$date','$location', '', '$editor1', '1',  '$user_id')";

      if ($conn->query($SQL) === TRUE) 
   {
      //$a=$sl;
      header("location:content_new_add.php?ID1=1");  
    }
    else
    {
     // $a=base64_encode($sl) ;
      header("location:content_new_update.php?ID1=2");
    }

/*

if($userid!='')
    {
      $a=1;
      header("location:user_create.php?a=$a");  
    }         
    else
    {
      $a=0;
      header("location:user_create.php?a=$a");
    }*/
  }

?>