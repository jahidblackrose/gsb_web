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

       $qus            = trim(mysqli_real_escape_string($_POST['qus']));
       $ans       = trim(mysqli_real_escape_string($_POST['ans']));
     //  $category       = trim(mysqli_real_escape_string($_POST['category']));
    


    $SQL="INSERT INTO `cms_faq` (`sl`, `qus`, `content`, `status`, `tag`, `date`) VALUES 
    (NULL, '$qus', '$ans', 'Y', 'NA', CURRENT_TIMESTAMP)";

    /*if($obj->sql($SQL) == 'true')
    {*/
       if ($conn->query($SQL) === TRUE) 
   {
      //$a=$sl;
      //$a=base64_encode($sl) ;
      header("location:faq_add.php?ID1=1");  
    }
    else
    {
      $a=base64_encode($sl) ;
      header("location:faq_add.php?ID1=2");
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