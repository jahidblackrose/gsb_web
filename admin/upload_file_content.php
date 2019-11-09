<?php
require_once('re_login_connection.php');


if($_GET['ID'])
{
	$sli=$_GET['ID'];
	$sll=base64_decode($sli);
	$_SESSION['slid'] ="";
	$_SESSION['slid'] = $sll;


if($_GET['ID1'])
{
	$csl=$_GET['ID1'];
	$csln=base64_decode($csl);
	$image=$_GET['ID2'];
	unlink($image);
	$SQL="delete from cms_file where sl='$csln'";
	$obj->sql($SQL);	
} 


}

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
	
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0028)http://kilab.pl/simpleadmin/ -->
<html xmlns="http://www.w3.org/1999/xhtml" lang="pl" xml:lang="pl">
<?php require("re_head.php"); ?>
<script>
	/* Script written by Adam Khoury @ DevelopPHP.com */
	/* Video Tutorial: http://www.youtube.com/watch?v=EraNFJiY0Eg */
	function _(el){
		return document.getElementById(el);
	}
	function uploadFile(){
		var file = _("file1").files[0];
	//var slid = _("slid").text[0];
	// alert(file.name+" | "+file.size+" | "+file.type);
	var formdata = new FormData();
	formdata.append("file1", file);
  //  formdata.append('slid',slid);
  // formData.append('slid', 2);
  var ajax = new XMLHttpRequest();
  ajax.upload.addEventListener("progress", progressHandler, false);
  ajax.addEventListener("load", completeHandler, false);
  ajax.addEventListener("error", errorHandler, false);
  ajax.addEventListener("abort", abortHandler, false);
  ajax.open("POST", "file_upload_parser.php");
  ajax.send(formdata);
}
function progressHandler(event){
	_("loaded_n_total").innerHTML = "Uploaded "+event.loaded/1024/1024+" MB of "+event.total/1024/1024;
	var percent = (event.loaded / event.total) * 100;
	_("progressBar").value = Math.round(percent);
	_("status").innerHTML = Math.round(percent)+"% uploaded... please wait";
}
function completeHandler(event){
	_("status").innerHTML = event.target.responseText;
	_("progressBar").value = 0;
}
function errorHandler(event){
	_("status").innerHTML = "Upload Failed";
}
function abortHandler(event){
	_("status").innerHTML = "Upload Aborted";
}
</script>
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

					<div class="h_title" align="center"><strong style="color:#FFF">
						<?php

// SELECT T2.sl, T2.name as name FROM ( SELECT @r AS _id, (SELECT @r := parent_id FROM cms_settings_new WHERE sl = _id) AS parent_id, @l := @l + 1 AS lvl FROM (SELECT @r := 10, @l := 0) vars,cms_settings_new h WHERE @r <> 0) T1 JOIN cms_settings_new T2 ON T1._id = T2.sl ORDER BY sl ASC 


						$sql = "SELECT T2.sl, T2.name as name FROM ( SELECT @r AS _id, (SELECT @r := parent_id FROM cms_settings_new WHERE sl = _id) AS parent_id, @l := @l + 1 AS lvl FROM (SELECT @r := $sll, @l := 0) vars,cms_settings_new h WHERE @r <> 0) T1 JOIN cms_settings_new T2 ON T1._id = T2.sl ORDER BY sl ASC";

						$sl=1;
						$results = $obj->sql($sql);
						while($row = mysql_fetch_array($results))
						{
							if($sl==1)
							{
								echo $row['name'] ; 
							}
							else
							{
								echo ' --> ' ;
								echo $row['name'] ; 
							}
							$sl++ ;
						}
						?>
					</strong></div>
					<div class="entry">
						<?php if ($a!=NULL) { ?>
							<div class="n_ok">
								<p><?php echo $a ; ?></p>
							</div>
						<?php } ?>
					</div>	
					<form id="upload_form" enctype="multipart/form-data" method="post">

						
						<input type="file" name="file1" id="file1" accept=".mp4,.ppt,.doc,.pdf,.wmv,.xls,.jpeg,.jpg">
						<span style="font-size: 12px">Only Support  mp4, ppt, doc, pdf, wmv, xls Format</span>

						<script type="text/javascript">
							$('#file1').bind('change', function() {
								alert('This file size is: ' + this.files[0].size/1024/1024 + "MB");
							});
						</script>


						<br />
						<br />

						<progress id="progressBar" value="0" max="100" style="width:300px;"></progress>
						<h3 id="status"></h3>
						<p id="loaded_n_total"></p>
						<input type="button" class="add" value="Upload File" onclick="uploadFile()">
						<button type="Reset" class="cancel" name="Reset">Reset</button> 
						<a class="button home" href="home.php">Home</a>

					</form>
					

				</div>
				<div id="main1">
					<div class="clear"></div>
					<div class="full_w">
						<div class="h_title" align="center"><strong style="color:#FFF">
							File Details
						</strong>
					</div>

					<br/>

					<!--draggable -->
					<table width="100%" align="center" class="sortable draggable" border="1"  cellpadding="0" cellspacing="0">
						<thead>
							<tr>
								<th scope="col">Serial</th>
								<th scope="col">File Type</th>
								<th scope="col">Name</th>
								<th scope="col">Action</th>
							</tr>
						</thead>
						<tbody class="bottomBorder">
							<?php

							$sql = "SELECT *
							FROM cms_file
							WHERE content_id='$sll'
							ORDER BY sl DESC";


							$sl=1;
                  //while($row = mysql_fetch_array($result))
							$results = $obj->sql($sql);
							while($row = mysql_fetch_array($results))
							{
								$encodseq=base64_encode($row['sl']) ;
								?>
								<tr>
									<td class="align-center" title="<?php echo $row['SL'] ; ?>"><?php echo $sl ; ?></td>
									<td class="bottomBorder"><?php echo $row['type'] ; ?></td>
									<td class="bottomBorder"><?php echo $row['file'] ; ?></td>
									<td class="bottomBorder" align="center">
		<a href="upload_file_content.php?ID=<?php  echo $sli ; ?>&ID1=<?php  echo $encodseq ; ?>&ID2=<?php echo $row['file'] ; ?>" class="table-icon delete" onclick="return confirm('Are you sure want to Delete?')" title="Delete" ></a>
									</td> 
								</tr>
								<?php
								$sl++;
							}
							?>
						</tbody>
					</table>

				</div>
				<div align="center"><a class="button reload" href="upload_file_content.php?ID=<?php  echo $sli ; ?>">Reload</a></div>
			</div>
		</div>
		<div class="clear"></div>
		<div class="clear"></div>
	</div>
</div><br />
<br />

<?php require("re_footer.php"); ?>
</body>
</html>