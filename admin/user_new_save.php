<?php
require_once('re_login_connection.php');

if($_SERVER["REQUEST_METHOD"] == "POST")
{
$name=trim($_POST['name']);
$email=trim($_POST['email']);
$username=trim($_POST['username']);
$password=trim(md5($_POST['password']));

$role=trim($_POST['rule']);
$status=trim($_POST['status']);
$mobile=trim($_POST['mobile']);
$designation=trim($_POST['designation']);
$workstation=trim($_POST['workstation']);

if(strlen($name)>0 && strlen($username)>0 && strlen($password)>0)
{
	

  $SQL="select USER_NAME from cms_admin_login where user_name='$username'";    //table name
      $result = $conn->query($SQL);
            while($row = $result->fetch_assoc()) 
            {
    $un_wastage1=$row['USER_NAME'];
  }



	
	if($un_wastage1!=NULL)
	{
		$a= "<font color='red'><b>Username already exits. Please try to add another name</b></font>";
	}
else
	{
		
	//	$query="INSERT INTO `M_CARD_ADMIN_LOGIN_DELIVERY` (`sl`, `name`, `user_name`, `password`, `rule`, `email`, `mobile`, `status`, `DESIGNATION`) VALUES ('', '$name', '$username', '$password', '$rule', '$email', '$mobile', '$status', '$designation')";


$SQL="INSERT INTO cms_admin_login
   (NAME, USER_NAME, PASSWORD, ROLE, 
    EMAIL, MOBILE, STATUS, IMAGE,DESIGNATION,WORKSTATION)
 Values
   ('$name', '$username', '$password', '$role', 
    '$email', '$mobile', '$status','', '$designation','$workstation')" ;
//die($query) ;
	$conn->query($SQL);

$a= "<font color='green'><b>New user created successfully.</b></font>";
	}
echo $a ;
}
}
?>