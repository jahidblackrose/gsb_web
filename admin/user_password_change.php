<?php
require_once('re_login_connection.php');
 


  $SQL="select PASSWORD from cms_admin_login where USER_NAME='$un_wastage'";    //table name
      $result = $conn->query($SQL);
            while($row = $result->fetch_assoc()) 
            {
	$PASSWORD=$row['PASSWORD'];  
  }


//die($PASSWORD) ;

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

$old_password=trim(md5($_POST['old_password']));
$new_password=trim(md5($_POST['password1']));
$new_password1=trim(md5($_POST['password2']));




if($PASSWORD==$old_password && $new_password==$new_password1)
{
	
	//die(ok) ;
	
	$SQL="UPDATE cms_admin_login SET PASSWORD = '$new_password' WHERE SL = '$user_id'";
	
	//die($SQL);
	$conn->query($SQL);
	
	$a= "<font color='green'><b>Password has been updated successfully.</b></font>";
//	header("location:user_password_change.php?a=$a");	
}
else
{
$a= "<font color='red'><b>ERROR !!! Password Update Failed ! Please Retry.</b></font>";		

//header("location:user_password_change.php?a=$a");	
}
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0028)http://kilab.pl/simpleadmin/ -->
<html xmlns="http://www.w3.org/1999/xhtml" lang="pl" xml:lang="pl">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Account Password Change Option</title>
<link rel="stylesheet" type="text/css" href="images/style.css" media="screen">
<link rel="stylesheet" type="text/css" href="images/navi.css" media="screen">
<script type="text/javascript" src="images/jquery-1.7.2.min.js"></script>

</head>


        

<body>
<div class="wrap">
			<div id="header">
				<div id="top">
					<div class="left">
						<p>Welcome, <strong><?php  echo $user_name ; ?></strong> [ <a href="logout.php">logout</a> ]</p>
					</div>
					<?php require("re_head_date.php"); ?>
				</div>
				<?php require("re_menu.php"); ?>
			</div>
  <div id="content">
				<div id="main1">
		  <div class="clear"></div>
					<div class="full_w">
		    <div class="h_title" align="center"><strong style="color:#FFF">Change Password</strong></div>
            <div class="entry">
            
            <?php
			if($a!=NULL)
			{
			echo $a ;
			}
			else
			{
			}
			?>
          <!--    <div id="preview">
              
              
              </div>-->
            </div>
             <div id="formbox">
             
             
				<form action="user_password_change.php" method="post">
				 <div class="element">
					<label for="password">Full Name<span class="red"> (required)</span> </label>
			       <input type="text" id="f_name" name="f_name" value="<?php echo $user_name ; ?>" readonly="readonly" required autofocus />
				 </div>
                  <div class="element">
					<label for="password">Old Password<span class="red"> (required)</span> </label>
						 
				        <input type="password" id="old_password" name="old_password" required autofocus />
						
					  
                      
					</div>
				  <div class="element">
					<label for="rule">New Password <span class="red">(required)</span></label>
                    
                    <span id="sprypassword2">
                    <label for="password1"></label>
                    <input type="password" name="password1" id="password1" />
                </div>
				  <div class="element">
					<label for="comments">Retype New Password  <span class="red">(required)</span></label>
                  
       
                    <input type="password" name="password2" id="password2" />
           
                    <div class="element"></div>
				  <div class="entry">
				    <button type="submit" class="add">Save</button> 
				    <button type="reset" class="cancel">Reset</button>
					 <a class="button home" href="home.php">Home</a>
                     <a class="button reload" href="user_password_change.php">Reload</a>

				  </div>
				</form>
            </div>
			
            
          </div>
		</div>
		<div class="clear"></div>
	</div>

	
</div>

<?php require("re_footer.php"); ?>

</body></html>