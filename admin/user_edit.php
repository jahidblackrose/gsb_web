<?php
require_once('re_login_connection.php');

     if($user_type!='1')
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
$db_conf = array();
$db_conf["type"] = "mysql"; // mysql,oci8(for oracle),mssql,postgres,sybase
$db_conf["server"] = "$DBhos";
$db_conf["user"] = "$DBuse";
$db_conf["password"] = "$DBpas";
$db_conf["database"] = "$DBNam";
		 
// include and create object
$base_path = strstr(realpath("."),"demos",true)."lib/";
include($base_path."inc/jqgrid_dist.php");
$g = new jqgrid($db_conf);

// set few params
$grid["caption"] = "APPLICATION USER INFORMATION";
$grid["rowNum"] = 15;
$g->set_options($grid);
$g->set_actions(array("inlineadd"=>true));

// set database table for CRUD operations
$g->table = "cms_admin_login";

$col = array();
$col["title"] = "SL"; // caption of column
$col["name"] = "SL"; 
$col["search"] = false;
$col["width"] = "10"; 
$col["editable"] = false;
$cols[] = $col;	

$col = array();
$col["title"] = "FULL NAME"; // caption of column
$col["name"] = "NAME"; 
$col["search"] = true;
$col["width"] = "25"; 
$col["editable"] = true;
$cols[] = $col;	

$col = array();
$col["title"] = "USER NAME"; // caption of column
$col["name"] = "USER_NAME"; 
$col["search"] = true;
$col["width"] = "15"; 
$col["editable"] = false;
$cols[] = $col;	

$col = array();
$col["title"] = "EMAIL"; // caption of column
$col["name"] = "EMAIL"; 
$col["search"] = true;
$col["width"] = "25"; 
$col["editable"] = true;
$cols[] = $col;	

$col = array();
$col["title"] = "MOBILE"; // caption of column
$col["name"] = "MOBILE"; 
$col["search"] = true;
$col["width"] = "20"; 
$col["editable"] = true;
$cols[] = $col;	

$col = array();
$col["title"] = "DESIGNATION"; // caption of column
$col["name"] = "DESIGNATION"; 
$col["search"] = true;
$col["width"] = "15"; 
$col["editable"] = true;
$cols[] = $col;

$col = array();
$col["title"] = "WORKSTATION"; // caption of column
$col["name"] = "WORKSTATION"; 
$col["search"] = true;
$col["width"] = "15"; 
$col["editable"] = true;
$cols[] = $col;

# Custom made column to show link, must have default value as it's not db driven
/*
$col = array();
$col["title"] = "Signature";
$col["name"] = "IMAGE";
$col["width"] = "40";
$col["align"] = "center";
$col["search"] = false;
$col["sortable"] = false;
$col["default"] = "<img height=50 src='{IMAGE}'>";
$cols[] = $col;
*/
// where custom_image in defined column of grid with filename to show as image (e.g. logo_default.png)
//$col["default"] = "<img height=50 src='http://ssl.gstatic.com/ui/v1/icons/mail/logo_default.png'>";

$col = array();
$col["title"] = "ROLE"; // caption of column
$col["name"] = "ROLE"; 
$col["search"] = true;
$col["width"] = "15"; 
$col["editable"] = true;
$col["edittype"] = "select";
$col["editoptions"] = array("value"=>':;1:SUPER ADMIN;2:PROJECT MANAGER;3:USER'); 
$col["editable"] = true;
$col["formatter"] = "select"; // display label, not value 
$col["stype"] = "select"; // enable dropdown search 
$col["searchoptions"] = array("value"=>':;1:SUPER ADMIN;2:PROJECT MANAGER;3:USER');
$cols[] = $col;	


$col = array();
$col["title"] = "Team Leader"; // caption of column
$col["name"] = "TEAM_LEADER"; 
$col["search"] = true;
$col["width"] = "15"; 
$col["editable"] = true;
$col["edittype"] = "select";
$col["editoptions"] = array("value"=>':;1:YES;0:NO'); 
$col["editable"] = true;
$col["formatter"] = "select"; // display label, not value 
$col["stype"] = "select"; // enable dropdown search 
$col["searchoptions"] = array("value"=>':;1:YES;0:NO');
$cols[] = $col;   	


$col = array();
$col["title"] = "STATUS"; // caption of column
$col["name"] = "STATUS"; 
$col["search"] = true;
$col["width"] = "15"; 
$col["editable"] = true;
$col["edittype"] = "select";
$col["editoptions"] = array("value"=>':;1:Active;0:Deactive'); 
$col["editable"] = true;
$col["formatter"] = "select"; // display label, not value 
$col["stype"] = "select"; // enable dropdown search 
$col["searchoptions"] = array("value"=>':;1:Active;0:Deactive'); 
$cols[] = $col;		



$g->set_columns($cols);
$g->set_options($cols);   
$g->set_actions(array(
                        "add"=>false, // allow/disallow add
                        "edit"=>true, // allow/disallow edit
                        "delete"=>false, // allow/disallow delete
                        "inlineadd"=>false,
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
      <br />
      <?php require("re_footer.php"); ?>
   </body>
   </body> 
</html>