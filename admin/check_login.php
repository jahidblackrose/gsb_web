<?php
include "db_Class.php";
//$obj = new db_class();
//$obj->MySQL();

// To properly get the config.php file

$username=mysqli_real_escape_string($conn,$_POST['userid']);  //Set UserName   htmlentities()

$password=trim(md5($_POST['passid'])); //Set Password

$msg ='';

if(isset($username, $password)) 
{
    $sql="SELECT * FROM cms_admin_login WHERE USER_NAME='$username' and PASSWORD='$password'";
    if ($result=mysqli_query($conn,$sql))
    {
     $rowcount=mysqli_num_rows($result);
    if($rowcount==1)
        {
        // Register $myusername, $mypassword and redirect to file "admin.php"
        session_start(); //Start the session
        $_SESSION['username']= $username;
        header("location:home_new.php");
    }
    else {
         $msg ="<font color='red'>Wrong Username or Password. Please retry</font>";
        header("location:index.php?msg=$msg");
    }
     mysqli_free_result($result);
           $conn->close();
    }
    ob_end_flush();
}
else {
     $msg ="<font color='red'>Wrong Username or Password. Please retry</font>";
        header("location:index.php?msg=$msg");
}









?>