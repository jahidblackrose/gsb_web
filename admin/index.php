<?php // error(0);
error_reporting(E_ALL ^ E_NOTICE);
 ?>
<!DOCTYPE html>
<!--[if IE 8]> 				 <html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> 
<html class="no-js" lang="en" > <!--<![endif]-->
  <head>  	
    <meta charset="utf-8">
    <link rel="shortcut icon" href="favicon.png"> 
	<title>LOGIN</title>
    <!-- Bootstrap core CSS -->
    <link href="login/bootstrap.css" rel="stylesheet">
    <!-- Demo CSS -->
    <link href="login/demo.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="login/login-theme-1.css" rel="stylesheet">
    <!-- 
	    <link href="css/login-theme-1.css" rel="stylesheet">
	    <link href="css/login-theme-2.css" rel="stylesheet">
	    <link href="css/login-theme-3.css" rel="stylesheet">
	    <link href="css/login-theme-4.css" rel="stylesheet">
	    <link href="css/login-theme-5.css" rel="stylesheet">
	    <link href="css/login-theme-6.css" rel="stylesheet">
	    <link href="css/login-theme-7.css" rel="stylesheet">
	    <link href="css/login-theme-8.css" rel="stylesheet">
	    <link href="css/login-theme-9.css" rel="stylesheet">
	    <link href="css/login-theme-10.css" rel="stylesheet">
	    <link href="css/login-theme-11.css" rel="stylesheet">
	    <link href="css/login-theme-12.css" rel="stylesheet">
	    <link href="css/login-theme-13.css" rel="stylesheet">
	    <link href="css/login-theme-14.css" rel="stylesheet">
	    <link href="css/login-theme-15.css" rel="stylesheet">  
    -->
    <link href="login/animate-custom.css" rel="stylesheet"> 
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="login/html5shiv.js"></script>
      <script src="login/respond.min.js"></script>
    <![endif]-->
     <script src="login/custom.modernizr.js" type="text/javascript" ></script>
  </head>
    <body class="fade-in">
<!--     	<div class="top-bar">
	Select Theme color &nbsp;&nbsp; : &nbsp;&nbsp;
	<a href="#" class="demo-btn th1" data-demoid="login-theme-1"> 1 </a>
	<a href="#" class="demo-btn th2" data-demoid="login-theme-2"> 2 </a>
	<a href="#" class="demo-btn th3" data-demoid="login-theme-3"> 3 </a>
	<a href="#" class="demo-btn th4" data-demoid="login-theme-4"> 4</a>
	<a href="#" class="demo-btn th5" data-demoid="login-theme-5"> 5 </a>
	<a href="#" class="demo-btn th6" data-demoid="login-theme-6"> 6 </a>
	<a href="#" class="demo-btn th7" data-demoid="login-theme-7"> 7 </a>
	<a href="#" class="demo-btn th8" data-demoid="login-theme-8">8 </a>
	<a href="#" class="demo-btn th9" data-demoid="login-theme-9"> 9 </a>
	<a href="#" class="demo-btn th10" data-demoid="login-theme-10"> 10 </a>
	<a href="#" class="demo-btn th11" data-demoid="login-theme-11"> 11 </a>
	<a href="#" class="demo-btn th12" data-demoid="login-theme-12"> 12 </a>
	<a href="#" class="demo-btn th13" data-demoid="login-theme-13"> 13 </a>
	<a href="#" class="demo-btn th14" data-demoid="login-theme-14"> 14 </a>
	<a href="#" class="demo-btn th15" data-demoid="login-theme-15"> 15 </a> 
</div> -->
    	<!-- start Login box -->
    	<div class="container" id="login-block">
    		<div class="row">
			    <div class="col-sm-6 col-md-4 col-sm-offset-3 col-md-offset-4">
			       <div class="login-box clearfix animated flipInY">
			       		<div class="page-icon animated bounceInDown">
			       			<img  src="login/user-icon.png" alt="Key icon" />
			       		</div>
			        	<div class="login-logo">
			        	<h3>Content Management System</h3> 
			        		<!-- <a href="#"><img src="login/login-logo.png" alt="Company Logo" /></a> -->
			        	</div> 
			        	<hr />
			        	<div class="login-form">
			        		<!-- Start Error box -->
			        		<div class="alert alert-danger hide">
								  <button type="button" class="close" data-dismiss="alert"> &times;</button>
								  <h4>Error!</h4>
								   Your Error Message goes here
							</div> <!-- End Error box -->
			        		<form name="" id="form" action="check_login.php" method="post" enctype="multipart/form-data">
				
				<input type="text" name="userid" placeholder="User name" autocomplete="off" 
				autofocus="off" class="input-field" required/> 
		

			<input type="password" name="passid" value="<?php echo $pass ; ?>"  placeholder="Password" class="input-field" required/> 
							<button type="submit" class="btn btn-login">Login</button> 
						   	<!-- 	 <button type="Reset" class="btn btn-login">Reset</button> 
						   								 --></form>	
							<div class="login-links"> 
					           <!--  <a href="forgot-password.html">
					          	   Forgot password?
					            </a>
					            <br /> -->
					            <?php
								//	EOD;
								//	$msg= $_GET['msg'];  //GET the message

									if(!empty($_GET['msg'])) 
									{
									$msg=$_GET['msg'];	
									 echo '<p>'.$_GET['msg'].'</p>'; //If message is set echo it
									}
								//	echo $login_form;
								?>
	<!--		<div align="center"><a href="index.php?ID=FALSE"> DIFFERENT ACC. LOGIN</a></div> -->
							</div>      		
			        	</div> 			        	
			       </div>
			       <!-- Start Social connect buttons box --> 
			       <!-- <div class="social-login row">
			        		<div class="fb-login col-lg-6 col-md-12 animated flipInX">
			        			<a href="#" class="btn btn-facebook btn-block">Connect with <strong>Facebook</strong></a>
			        		</div>
			        		<div class="twit-login col-lg-6 col-md-12 animated flipInX">
			        			<a href="#" class="btn btn-twitter btn-block">Connect with <strong>Twitter</strong></a>
			        		</div>
			        </div> -->
			        <!-- End Social connect buttons box -->
			    </div>
			</div>
    	</div>
      	<!-- End Login box -->
     	<footer class="container">
     		<p id="footer-text"><small style="color:#FFFFFF"><a href="http://markone.com.bd" style="color: #84fb1b">GSB</a></small></p>
     	</footer>
        <script src="login/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="login/jquery-1.9.1.min.js"><\/script>')</script> 
        <script src="login/bootstrap.min.js"></script> 
        <script src="login/placeholder-shim.min.js"></script>        
        <script src="login/custom.js"></script>
    </body>
</html>