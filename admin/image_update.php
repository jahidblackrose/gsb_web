<?php
require_once('re_login_connection.php');
 

		//image
//define a maxim size for the uploaded images in Kb
define ("MAX_SIZE","100000");  
//This function reads the extension of the file. It is used to determine if the file is an image by checking the extension. 
function getExtension($str) {
$i = strrpos($str,".");
if (!$i) { return ""; }
$l = strlen($str) - $i;
$ext = substr($str,$i+1,$l);
return $ext;
}
		
	if (isset($_POST['Submit']))
    { 	
	
require("image_upload.php") ;
$SQL="UPDATE cms_admin_login SET IMAGE= '$newname' WHERE  SL='$user_id'";
//	die($query) ;
	
$conn->query($SQL); 
	$a="Image Upload Successfully.";
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0028)http://kilab.pl/simpleadmin/ -->
<html xmlns="http://www.w3.org/1999/xhtml" lang="pl" xml:lang="pl">
	<?php require("re_head.php"); ?>
	<link rel="stylesheet" type="text/css" href="images/table.css" media="screen">
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
						
					 <div class="h_title" align="center"><strong style="color:#FFF">Image Upload</strong></div>
                        <div class="entry">
             <?php if ($a!=NULL) { ?>
						<div class="n_ok">
							<p><?php echo $a ; ?></p>
						</div>
						<?php } ?>
              </div>						<form action="image_update.php" method="post" enctype="multipart/form-data">
							
<input type="file" name="image" id="image" />
<br />
<div style="width:40px; height:auto">
<output id="list"></output></div>


<script>
function handleFileSelect(evt) {
var image = evt.target.files; // FileList object
// Loop through the FileList and render image files as thumbnails.
for (var i = 0, f; f = image[i]; i++) {
// Only process image files.
if (!f.type.match('image.*')) {
continue;
}
var reader = new FileReader();
// Closure to capture the file information.
reader.onload = (function(theFile) {
return function(e) {
// Render thumbnail.
var span = document.createElement('span');
span.innerHTML = ['<img class="thumb" src="', e.target.result,
'" title="', escape(theFile.name), '"/>'].join('');
document.getElementById('list').insertBefore(span, null);
};
})(f);
// Read in the image file as a data URL.
reader.readAsDataURL(f);
}
}
document.getElementById('image').addEventListener('change', handleFileSelect, false);
</script>


<br />
<br />

<button type="submit" name="Submit">Upload</button> 
<a class="button home" href="home.php">Home</a>
                     
						</form>
						<div class="sep"></div>
						<?php // echo  md5('1212') ; ?>
				    <div class="sep">
                    <img src="<?php echo $image_file ; ?>" width="300" height="*" /> </div>
				
						
				  </div>
				</div>
				<div class="clear"></div>
			</div>
		</div><br />
<br />

		<?php require("re_footer.php"); ?>
	</body>
</html>