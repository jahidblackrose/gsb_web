<?php
require_once('comon.php');
session_start(); 
$un_wastage=$_SESSION['username_wastage'];
include "db_Class.php";
$stid = oci_parse($conn, "select SL,USER_NAME,RULE from SDDPMS_ADMIN_LOGIN where USER_NAME='$un_wastage'");
oci_execute($stid);
while (($rowA = oci_fetch_array($stid, OCI_BOTH)) != false)
{ 
 $user_id=$rowA['SL'];   
 $user_name=$rowA['USER_NAME'];
 $user_type=$rowA['RULE'];  
}  
//if (isset($_GET['ID']) && isset($_GET['ID2']))
if ($_GET['ID'])
{
 $DESEQ=$_GET['ID'];
 $STATUS=$_GET['ID2'];
 $SL=$_GET['ID3'];
 $SEQ=base64_decode($DESEQ) ;

 if($STATUS!=NULL)
 {
  $query="UPDATE PRS_TASK_SCHEDULE SET ACTIVE='$STATUS',USERNAME='$user_name' WHERE SEQ='$SEQ' AND SL='$SL'";
//die($query) ;
  $st = oci_parse($conn, $query); 
  oci_execute($st);
}

$stid = oci_parse($conn, "SELECT a.*,b.name FROM PRS_TASK_ENTRY a,SDDPMS_ADMIN_LOGIN b WHERE a.PROJECT_MANAGER=b.sl(+) AND a.SEQ='$SEQ'");
oci_execute($stid);
while (($rowA = oci_fetch_array($stid, OCI_BOTH)) != false)
{ 

 $SEQEN = base64_encode($rowA['SEQ']) ;
 $AGMT_TYPE       = $rowA['AGMT_TYPE'];   
 $AGMT_DATE       = $rowA['AGMT_DATE'];
 $AGMT_TITLE      = $rowA['AGMT_TITLE'];
 $PROJECT_MANAGER_SL = $rowA['PROJECT_MANAGER'];
 $PROJECT_MANAGER = $rowA['NAME'];
 $AGMT_DETAILS    = $rowA['AGMT_DETAILS'];
 $REMIND_YEAR     = $rowA['REMIND_YEAR'];
 $VENDOR_ADDRESS  = $rowA['VENDOR_ADDRESS'];
 $VENDOR_EMAIL    = $rowA['VENDOR_EMAIL'];
 $VENDOR_MOBILE   = $rowA['VENDOR_MOBILE'];
 $ACTIVE_STATUS   = $rowA['ACTIVE_STATUS'];
 $SEND_SMS        = $rowA['SEND_SMS'];
 $SEND_MAIL       = $rowA['SEND_MAIL'];
 $USERNAME        = $rowA['USERNAME'];
}

}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0028)http://kilab.pl/simpleadmin/ -->
<html xmlns="http://www.w3.org/1999/xhtml">
<?php require("re_head.php"); ?>
</script>
<style type="text/css">
  table.bottomBorder { border-collapse:collapse; }
  table.bottomBorder td, table.bottomBorder th { border-bottom:1px dotted black;padding:1px;
    font-size:13px;
    font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
  }
  table.bottomBorder tr, table.bottomBorder tr { border:1px dotted black;padding:1px; }
</style>
</head>
<script type="text/javascript" src="js/jquery-1.7.1.js"></script>
<script type="text/javascript" src="js/jquery.js"></script> 
<script type="text/javascript" src="js/jquery.form.js"></script> 
<script type="text/javascript">
  $('document').ready(function()
  {   
    $('#form').ajaxForm( {
      target: '#preview',  
      success: function() { 
        $('#formbox').slideUp('fast'); 
      } 
    }); 
  });
</script> 

<!-- bootstap -->
<!--   <link rel="stylesheet" type="text/css" media="screen" href="lib/js/jqgrid/css/jqgrid/css/ui.bootstrap.jqgrid.css">   -->
<!--   <link href="lib/js/jqgrid/css/bootstrap3.min.css" rel="stylesheet"> -->
<!-- bootstap -->
<body>
  <div>
    <!--    <div class="clear"></div>* -->
    <h2 style="padding-top:10px; color:#FFF" align="center">PUBALI BANK PROJECT MANAGEMENT SYSTEM</h2>
    <br>
    <h2 style="padding-top:10px; color:#FFF" align="center">UPDATE REMINDER INFORMATION</h2>
    <div align="center" style="padding-top: 21px" width="500px">
      <h2 style="color: black"> <?php echo $AGMT_TITLE ; ?> ON DATE - <?php echo $AGMT_DATE ; ?></h2>
      <p></p>
      <br/>
      <div id="preview">
      </div>
      <div id="formbox">
        <form name=""  id="form"  action="agrmt_edit_save.php" method="post" enctype="multipart/form-data">

          <table width="90%" class="bottomBorder" border="1" style="color:#000; font-size:16px !important">
            
            <tbody>

              <tr><td>Title</td><td colspan="3"><?php echo $AGMT_TITLE ; ?></td>
              </tr>
              <tr>
                <td>Agreement Type</td>
                <td>
                  <select name="atype" autofocus="autofocus" class="chosen-select-deselect" >
                    <option  value="<?php echo $AGMT_TYPE ; ?>" selected><?php echo $AGMT_TYPE ; ?></option>
                    <?php
          $stid = oci_parse($conn, "select VALUE from SDDPMS_SETTINGS WHERE
            TYPE='Agreement Type' ORDER BY VALUE ASC");
          oci_execute($stid);
          while (($rowA = oci_fetch_array($stid, OCI_BOTH)) != false)
            { $VALUE=$rowA['VALUE'];
          $VALUE=$rowA['VALUE'];
          echo '<option value="'.$VALUE.'">'.$VALUE.'</option>';
        }
        ?>
      </select>
      
    </td>
    <td>Project Manager</td>
    <td>
      <select name="pmanager" autofocus="autofocus" class="chosen-select-deselect" >
        <option  value="<?php echo $PROJECT_MANAGER_SL ; ?>" selected><?php echo $PROJECT_MANAGER ; ?></option>
        <?php
        $stid = oci_parse($conn, "select SL,NAME from SDDPMS_ADMIN_LOGIN WHERE RULE='2' AND STATUS='1'");
        oci_execute($stid);
        while (($rowA = oci_fetch_array($stid, OCI_BOTH)) != false)
        { $NAME=$rowA['NAME'];
        $SL=$rowA['SL'];
        echo '<option value="'.$SL.'">'.$NAME.'</option>';
      }
      ?>
    </select>

  </td>
</tr>
<tr>
  <td>AGREEMENT DETAILS</td>
  <td colspan="3">
    <textarea name="adetails" id="note" required="required" cols="30" rows="2"><?php echo $AGMT_DETAILS ; ?></textarea>
  </td>
</tr>
<tr>
  <td>VENDOR ADDRESS</td>
  <td colspan="3">
    <textarea name="vaddress" id="note" required="required" cols="30" rows="2"><?php echo $VENDOR_ADDRESS ; ?></textarea></td>
  </tr>
  <tr>
    <td>VENDOR MOBILE</td>
    <td>
      <input name="vmobile" type="number" autocomplete="on" autofocus="autofocus"  placeholder="01700000000" min="0100000000" max="01999999999" value="<?php echo $VENDOR_MOBILE ; ?>"  />


<input type="hidden" name="SEQ" value="<?php echo $SEQEN ; ?>">

    </td>
    <td>VENDOR EMAIL</td>
    <td><input name="vemail" type="email" autocomplete="off" id="email" placeholder="abc@company.com" value="<?php echo $VENDOR_EMAIL ; ?>" /></td>
  </tr>
  <tr>
    <td>ACTIVE YEAR</td>
    <td>
      <?php echo $REMIND_YEAR ; ?></td>
      <td>ACTIVE STATUS</td>
      <td>
<select name="a_status" required="required" class="err" id="status" required>
        <option value="<?php echo $ACTIVE_STATUS ; ?>" selected><?php echo $ACTIVE_STATUS ; ?></option>
        <option value="Y">YES</option>
        <option value="N">NO</option>
      </select>

     </td>
    </tr>
    <tr>
      <td>SMS STATUS</td>
      <td><select name="sms_status" required="required" class="err" id="status" required>
        <option value="<?php echo $SEND_SMS ; ?>" selected><?php echo $SEND_SMS ; ?></option>
        <option value="Y">YES</option>
        <option value="N">NO</option>
      </select></td>
      <td>EMAIL STATUS</td>
      <td><select name="mail_status" class="err" id="status" required>
        <option value="<?php echo $SEND_MAIL ; ?>" selected><?php echo $SEND_MAIL ; ?></option>
        <option value="Y">YES</option>
        <option value="N">NO</option>
      </select></td>
    </tr>
    <tr align="center">
      <td colspan="4">
       <div class="entry">
        <button type="submit" class="add">Save</button> <button type="reset" class="cancel">Reset</button>
      </div>
    </td>
  </tr>
  
</tbody>
</table>
</form>
</div>
</div>
<p></p>
<div align="center" style="padding-top: 21px" width="">
</div>
</body>
</html>