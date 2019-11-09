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
               <div class="h_title" align="center"><strong style="color:#FFF">News/Event Add</strong></div>
               <!-- --> <?php if($_GET['ID1']) {	?>	
               <div id="preview">
                  <?php	$msg = $_GET['ID1'] ;	if($msg=='1')	{	?>	
                  <div class="n_ok">
                     <p><strong><span style="color:#000">News/Event has been Added Successfully. </span></p>
                   
                  </div>

               </div>
               <?php } else { echo 'error' ; }	} ?>	
               <div class="element">
                  <div id="formbox">
                    
                        <div class="content">
          <form name=""  id="form"  action="content_new_add_save.php" method="post" enctype="multipart/form-data">
                <div>
                <div class="element" id="inputleft">
                  <label for="Sub Menu">Type </label>
                 <select name="type" autofocus="autofocus" id="type" required="required">
                            <option selected>Select Type</option>
                          <option value="News" >News</option>
                          <option value="Event">Event</option>
                           <!-- list in db_class.php -->
                          </select>
                </div>
                <div class="element" id="inputright">
                  <label for="Category">Date<!-- <span class="red">(required)</span>  --></label>
                  <input type="text" name="date" autocomplete="off"  onfocus="showCalendarControl(this);" class="inp-form" />
                </div>
                </div>
               <div> 

                <div class="element" id="inputleft">
                  <label for="Category">Location<!-- <span class="red">(required)</span>  --></label>
                  <input type="text" name="location" autocomplete="off"  class="inp-form" />
                </div>
                <div class="element"  id="inputright">
                  <label for="Sub Menu">Title </label>
                  <input type="text" autocomplete="off" style="" size="95px" value="" id="sub_menu" name="title" required autofocus data-index="2" />
                </div>


               
                </div>
            <div class="element">
            <textarea name="editor1" id="editor1" rows="10" cols="80">
            </textarea>
          </div>
            <br />
                        <button name="Submit" type="submit" class="add" tabindex="12">Save</button> <button type="reset" tabindex="14" class="cancel">Reset</button>
                         <a class="button home" href="home.php">Home</a>
                         <a class="button reload" href="settings.php">Reload</a>
        </form>
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
