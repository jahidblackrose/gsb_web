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

$image_file='noimage.jpg';


if($_GET['ID'])
{
     $id=$_GET['ID']; 
     $image='../uploadimage/'.$_GET['ID2'];
     unlink($image);
     $SQL="delete from sub_image where sl='$id'";
   //  die($SQL);

     $conn->query($SQL);     
     $a="Delete Successfull";
}

if (isset($_POST['Submit']))
{     
    $name=trim($_POST['name']);
     require("image_upload_gallery.php") ;
     $SQL="INSERT INTO `sub_image` (`sl`, `id`, `image`) VALUES ('', '$name', '$image_name')";
//die($SQL);
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
               </div> 
               <form action="gallery.php" method="post" enctype="multipart/form-data">

                <div class="element">
                  <label for="FULL NAME">Caption<span class="red">(required)</span> </label>
                  <input type="text" autocomplete="off" id="name" name="name" required autofocus data-index="2" size="95px" />
                </div>

                <div class="element">
                  <label for="Image">Image </label>
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

                </div>



<br />
<br />

<button type="submit" name="Submit">Upload</button> 
<a class="button home" href="home.php">Home</a>

</form>
<div class="sep"></div>
<?php // echo  md5('1212') ; ?>
<div class="sep">
  <!--    <img src="../uploadimage/<?php echo $image_file ; ?>" width="150" height="*" />  --></div>
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
                         <th scope="col">caption</th>
                         
                         <th scope="col">Image</th>
                         <th scope="col">Action</th>
                    </tr>
               </thead>
               <tbody class="bottomBorder">
                    <?php

                    $sql = "SELECT *
                    FROM sub_image
                    ORDER BY sl DESC";

                    $sl=1;
                        $result = $conn->query($sql);
            while($row = $result->fetch_assoc()) 
            {
                         $encodseq=base64_encode($row['sl']) ;
                         ?>
                         <tr>
                              <td class="align-center" title="<?php echo $row['sl'] ; ?>"><?php echo $sl ; ?></td>
                                <td class="align-center" title=""><?php echo $row['id'] ; ?></td>

                              <td class="bottomBorder"><img src="../uploadimage/<?php echo $row['image'] ; ?>" width="150" height="*" /></td>
                              <td class="bottomBorder" align="center">
                                   <a href="gallery.php?ID=<?php echo $row['sl'] ; ?>&ID2=../uploadimage/<?php echo $row['image'] ; ?>" class="table-icon delete" onclick="return confirm('Are you sure want to Delete?')" title="Delete" ></a>
                              </td> 
                         </tr>
                         <?php
                         $sl++;
                    }
                    ?>
               </tbody>
          </table>

     </div>
     <div align="center"><a class="button reload" href="gallery.php">Reload</a></div>
</div>

</div>
</div>
<div class="clear"></div>
</div>
</div><br />
<br />

<?php require("re_footer.php"); ?>
</body>
</html>