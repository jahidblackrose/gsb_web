<?php
require_once('re_login_connection.php');
// include("permission_function.php") ;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php require("re_head.php"); ?>
<script src="js/editor/ckeditor.js"></script>
   <!--
      <script type="text/javascript"> jQuery('document').ready(function() { $('#form').ajaxForm( { target: '#preview', success: function() { $('#formbox').slideUp('fast'); } }); });
      </script> -->
   <!-- <script type="text/javascript">	$('document').ready(function()	{	});
</script> -->
  
<!--       oncontextmenu="return false" -->
   <body >
      <div class="wrap">
         <div id="header">
            <div id="top">
               <div class="left">
                  <p>Welcome, <strong><?php echo $user_name ; ?></strong> [ <a href="logout.php">logout</a> ]</p>
               </div>
            <?php require("re_head_date.php"); ?>	
            </div>
         <?php require("re_menu.php"); ?>	
      </div>
      <div id="content">
         <div id="main1">
            <div class="full_w">
               <div class="h_title" align="center"><strong style="color:#FFF">Add FAQ Content</strong></div>
               <!-- --> <?php if($_GET['ID1']) {	?>	
               <div id="preview">
                  <?php	$msg = $_GET['ID1'] ;	if($msg=='1')	{	?>	
                  <div class="n_ok">
                     <p><strong><span style="color:#000">Content has been Save Successfully. </span></p>
                   
                  </div>

               </div>
               <?php } else { echo 'error' ; }	} ?>	
               <div class="element">
                  <div id="formbox">
                    
                        <div class="content">
          <form name=""  id="form"  action="faq_save.php" method="post" enctype="multipart/form-data">
            <div class="element">
                  <label for="Sub Menu">Question </label>
                  <input type="text" autocomplete="off" style="" size="90px" value="" id="sub_menu" name="qus" required autofocus data-index="2" />
                </div>
        

            <div class="element">
              <label for="Sub Menu">Answer</label>
            <textarea name="ans" id="editor1" rows="10" cols="80">
                <?php echo $content ; ?>
              </textarea>
            </div>
<br />
                        <button name="Submit" type="submit" class="add" tabindex="12">Save</button> <button type="reset" tabindex="14" class="cancel">Reset</button>
                         <a class="button home" href="home.php">Home</a>
                         <a class="button reload" href="settings.php">Reload</a>
          
        </form>
        </div>
            
                        </div>
                     </div>
                     <!-- -->
                  </div>
                  
               </div>
            </div>
            <script type="text/javascript">
               /*
               var d = new Date();
               var n = d.getDate();
               var m = d.getMonth();
               var y = d.getFullYear();
               var a = n ;
               var b = "-" ;
               var p = m+1 ;
               var q = "-" ;
               var r = y ;
               //varDate.toString('d-M-y');
               var t = a + b + p + b + r ;
               document.getElementById("vdate").value = t;
               */
            </script>
            <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'editor1' );
            </script>
         </div>
      </div>
      <?php require("re_footer.php"); ?>
   </body>
   </html>
