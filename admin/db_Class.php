<?php

$DBhos = "localhost" ;
$DBuse = "root" ;
$DBpas = "" ;  
$DBNam = "gsb_web" ;


$servername = "localhost";
$username = "root";  // immibdc_gsb_student
$password = "";  // gsb_student2019
$dbname = "gsb_web" ; // immibdc_gsb_student
         
         $conn = mysqli_connect($servername, $username, $password, $dbname);
   
         if(! $conn ) {
            die('Could not connect: ' . mysqli_error());
         }
     //    echo 'Connected successfully<br>';

//$conn->close();

//mysqli_close($conn);

?>