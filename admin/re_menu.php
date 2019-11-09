<?php 
if($user_type=='1')
{
require("menu_super_admin.php");
}
if($user_type=='2')
{
require("menu_admin.php");
}
if($user_type=='3')
{
require("menu_user.php");
}
if($user_type=='4')
{
require("menu_tester.php");
}

?>

