<?php 
require_once('comon.php');
session_start(); 
$un_wastage=$_SESSION['username'];
include "db_Class.php";
//$obj = new db_class();
//$obj->MySQL();



  $SQL="select * from cms_admin_login where user_name='$un_wastage'";    //table name
      $result = $conn->query($SQL);
            while($row = $result->fetch_assoc()) 
            {
    $user_id=$row['SL']; 
    $user_name=$row['NAME'];
    $user_type=$row['ROLE'];
  }
?>