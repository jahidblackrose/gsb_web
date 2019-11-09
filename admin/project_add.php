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
               <div class="h_title" align="center"><strong style="color:#FFF">Add new Project</strong></div>
               <!-- --> <?php if($_GET['ID']) {	?>	
               <div id="preview">
                  <?php	$msg = $_GET['ID'] ;	if($msg!='ERROR!')	{	?>	
                  <div class="n_ok">
                     <p><strong><span style="color:#000">Project has been saved successfully. </span></p>
                   
                  </div>
                     <br/>
                             <a class="button page" href="project_list.php">Project List</a>
                             <a class="button add2" href="project_add.php">Add new Project</a>
               </div>
               <?php } else { echo 'error' ; }	} else { ?>	
               <div class="element">
                  <div id="formbox">
                    
                        <div class="content">
                           <form>
            <textarea name="editor1" id="editor1" rows="10" cols="80">
                This is my textarea to be replaced with CKEditor.
            </textarea>
            
        </form>
                        </div>
                     </div>
                     <!-- -->
                  </div>
                  <?php } ?>
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
