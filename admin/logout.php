<?php
	require_once('comon.php');	
?>
<?php
session_start(); //Start the current session
session_destroy(); //Destroy it! So we are logged out now
header("location:index.php?msg=<font color='black'>Successfully Logged out.</font>"); // Move back to login.php with a logout message

?>
