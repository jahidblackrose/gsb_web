<?php
require_once('comon.php');
session_start(); 
$un_wastage =$_SESSION['username_wastage'];
include "db_Class.php";


$stid = oci_parse($conn, "select SL,USER_NAME as NAME,RULE from M_CARD_ADMIN_LOGIN_DELIVERY where USER_NAME='$un_wastage'");
oci_execute($stid);
while (($rowA = oci_fetch_array($stid, OCI_BOTH)) != false)
{ 
  $user_id   =$rowA['SL'];	
  $user_name =$rowA['NAME'];
  $user_type =$rowA['RULE'];	
}


if($user_type=='1')
{
	die('ERROR!!') ;	
}


?>
<?php
/**
 * PHP Grid Component
 *
 * @author Abu Ghufran <gridphp@gmail.com> - http://www.phpgrid.org
 * @version 1.4.8
 * @license: see license.txt included in package
 */

/**
 * To support non-mysql databases (even mysql), see adodb lib documentation below:
 * http://phplens.com/lens/adodb/docs-adodb.htm#connect_ex
 * http://phplens.com/lens/adodb/docs-adodb.htm#drivers
 * 
 * For oracle, extension of oci8 should be enabled in php.ini
 * 
 */
$db_conf             = array();
$db_conf["type"]     = "oci8"; // mysql,oci8(for oracle),mssql,postgres,sybase
$db_conf["server"]   = "$DBhos";
$db_conf["user"]     = "$DBuse";
$db_conf["password"] = "$DBpas";
$db_conf["database"] = "$DBNam";

// include and create object
$base_path = strstr(realpath("."),"demos",true)."lib/";
include($base_path."inc/jqgrid_dist.php");
$g = new jqgrid($db_conf);

// set few params
$grid["caption"] = "MODULE CONFIGARATION";
$grid["rowNum"] = 15;
$g->set_options($grid);
$g->set_actions(array("inlineadd"=>true));

// set database table for CRUD operations
$g->table = "M_CARD_MODULE";

$col             = array();
$col["title"]    = "SL"; // caption of column
$col["name"]     = "SL"; 
$col["search"]   = true;
$col["width"]    = "5"; 
$col["editable"] = false;
$cols[]          = $col;	

$col             = array();
$col["title"]    = "MODULE TYPE"; // caption of column
$col["name"]     = "MODULE_TYPE"; 
$col["search"]   = true;
$col["width"]    = "10"; 
$col["editable"] = true;
$cols[]          = $col;


$col             = array();
$col["title"]    = "MODULE NAME"; // caption of column
$col["name"]     = "MODULE_NAME"; 
$col["search"]   = true;
$col["width"]    = "25"; 
$col["editable"] = true;
$cols[]          = $col;	

$col             = array();
$col["title"]    = "MODULE PAGE"; // caption of column
$col["name"]     = "MODULE_PAGE"; 
$col["search"]   = true;
$col["width"]    = "20"; 
$col["editable"] = true;
$cols[]          = $col;	


$col             = array();
$col["title"]    = "SEQUANCE"; // caption of column
$col["name"]     = "SL_ID"; 
$col["search"]   = true;
$col["width"]    = "10"; 
$col["editable"] = true;
$cols[]          = $col;	



$g->set_columns($cols);
$g->set_options($cols);   
$g->set_actions(array(
                        "add"=>true, // allow/disallow add
                        "edit"=>true, // allow/disallow edit
                        "delete"=>true, // allow/disallow delete
                        "inlineedit"=>true,
                        "rowactions"=>true, // show/hide row wise edit/del/save option
                        "search" => "advance", // show single/multi field search condition (e.g. simple or advance)
                        "autofilter" => true,
                        "export_excel"=>false, // export excel button 
                        "export_pdf"=>false, // export pdf button 
                        "export_csv"=>false, // export csv button 
                      )
);

// render grid
$out = $g->render("list1");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd"> 
<html>
<head>
  <?php require("re_head.php"); ?>
  <link rel="stylesheet" type="text/css" media="screen" href="lib/js/themes/redmond/jquery-ui.custom.css">
</link>     
<link rel="stylesheet" type="text/css" media="screen" href="lib/js/jqgrid/css/ui.jqgrid.css">
</link>     
<script src="lib/js/jquery.min.js" type="text/javascript"></script> 
<script src="lib/js/jqgrid/js/i18n/grid.locale-en.js" type="text/javascript"></script> 
<script src="lib/js/jqgrid/js/jquery.jqGrid.min.js" type="text/javascript"></script>     
<script src="lib/js/themes/jquery-ui.custom.min.js" type="text/javascript"></script> 
<!--<script type="text/javascript">
         function newPopup(url) {
         popupWindow = window.open(
         url,'popUpWindow','height=400,width=700,left=350,top=90,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no,status=yes')
         }
       </script>-->
     </head>
     <body>
      <div class="container">
       <div id="header">
        <div id="top">
          <div class="left">
            <p>Welcome, <strong><?php  echo $user_name ; ?></strong> [ <a href="logout.php">logout</a> ]</p>
          </div>
          <?php require("re_head_date.php"); ?>
        </div>
        <?php require("re_menu.php"); ?>
        <br />
        <div class="row">
          <div id="main1">
            
           <!-- <div class="entry"></div>  -->        
           
           <div id="formbox1">
            <div style="margin:10px">
             <?php echo $out?>
           </div>
         </div>
         <!--<div class="entry"> </div>-->
       </div>
     </div>
   </div>
 </div>
 <br />
 <br />
 <div class="clear">
  
  <a class="button add" href="home.php">BACK TO HOME</a>
  
</div>
<br />
<?php require("re_footer.php"); ?>
</body>
</body> 
</html>