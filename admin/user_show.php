<?php
require_once('re_login_connection.php');

     if($user_type!='1')
     {
     die('ERROR!!') ;    
     }


if (isset($_POST['Submit']))
{
	$rule=$_POST['rule']; 
}

if($_GET['ID'])
{
//	$id=$_GET['ID'];
//	$SQL="UPDATE `M_CARD_ADMIN_LOGIN_DELIVERY` SET  STATUS =  '$id' WHERE  `SL` ='$id1'";
//	die($SQL) ;
	
//	$st = oci_parse($conn, $SQL); 
//	oci_execute($st);
//	oci_commit($conn); 
//	$a="Update Successful";	
}

if($_GET['ID1'])
{
	$id1=$_GET['ID1'];
	$update_pass=md5('123456') ;
	
	//die($update_pass) ;
	$SQL="UPDATE cms_admin_login  SET PASSWORD= '$update_pass' WHERE  SL='$id1'";
	
//	die($SQL) ;
	
	$conn->query($SQL); 
	$a="Password Update Successfully. New Password is 123456";	
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
					
					<div class="h_title" align="center"><strong style="color:#FFF">APPLICATION USER INFORMATION</strong></div>
                      <!--  <div class="entry">
             
              </div>
          -->
          <form action="" method="post">
          	<select name="rule" class="err" id="rule" required>
          		<option value="">- select Rule -</option>
          		
          		<option value="1">SUPER ADMIN</option>
          		<option value="2">Project Manager</option>
          		<option value="3">USER</option>
          		
          		
          	</select>
          	<button type="submit" name="Submit">Search</button> 
          </form>
        <!--   <div class="sep"></div> -->
         <!--  <div class="sep" align="center"><strong style="color:#060"><strong style="color:#F00">Rule-0=Super Admin , </strong>&nbsp;Rule-1=User   </strong>&nbsp;</div> -->
          
          <?php // echo  md5('1212') ; ?>
          <div class="sep"></div>
          <?php if ($a!=NULL) { ?>
          <div class="n_ok">
          	<p><?php echo $a ; ?></p>
          </div>
          <?php } ?>
          <!--draggable -->
          <table width="100%" align="center" class="sortable draggable" border="1"  cellpadding="0" cellspacing="0">
          	<thead>
          		<tr>
          			<th scope="col">Serial</th>
          			<th scope="col">Name</th>
          			<th scope="col">Designation</th>
          			<th scope="col">User Name</th>
          			<th scope="col">Status</th>
          			<th scope="col">Mobile</th>
          			<th scope="col">Image</th>
          			
          			<th scope="col">User Role</th>
          			<th scope="col">Modify</th>
          		</tr>
          	</thead>
          	<tbody class="bottomBorder">
          		<?php
          		
          		if($rule!=NULL)
          		{
          			$SQL = "select * from cms_admin_login where rule like '$rule' ORDER BY sl DESC";
          		}
          		else
          		{
          			$SQL = "select * from cms_admin_login ORDER BY name ASC";
          		}
          		
          		$sl=1;
									//while($row = mysql_fetch_array($result))
          		
          		        $result = $conn->query($SQL);
                              while($row = $result->fetch_assoc()) 
                              {
          			?>
          			<tr>
          				<td class="align-center" title="<?php echo $row['PASSWORD'] ; ?>"><?php echo $sl ; ?></td>
          				<td class="bottomBorder"><?php echo ucfirst(strtolower($row['NAME'])) ; ?></td>
          				<td class="bottomBorder"><?php echo $row['DESIGNATION'] ; ?></td>
          				<td class="bottomBorder"><?php echo $row['USER_NAME'] ; ?></td>
          				<td class="bottomBorder"><?php if($row['STATUS']=='1') { echo 'Active' ; }
          					else { echo 'Deactive' ; } ?> </td>
          					<td class="bottomBorder"><?php echo $row['MOBILE'] ; ?></td>
          					<td class="bottomBorder"><img src="<?php echo $row['IMAGE'] ; ?>" width="80" height="*" /></td>
          					
          					<td class="bottomBorder"><?php 
          						if($row['ROLE']=='1') { echo 'Super Admin' ; }
          						if($row['ROLE']=='2') { echo 'Project Manager' ; }
          						if($row['ROLE']=='3' AND $row['TEAM_LEADER']=='1') { echo 'Team Leader' ; }
                                        if($row['ROLE']=='3' AND $row['TEAM_LEADER']=='0') { echo 'Developer' ; }
          						
          						
          						
          						?></td>
          						<td>
          							<?php if ($user_type == 1)
          							{
          								?>
          								
          								<!-- <a href="admin_set_permission.php?ID=<?php // echo $row['SL'] ; ?>" class="table-icon report" title="Add Permission"></a> -->
          								<a href="user_show.php?ID1=<?php echo $row['SL'] ; ?>" class="table-icon archive" onclick="return confirm('Are you sure want to Update password?')" title="Reset Password (123456)"></a>
          								
          								<!--<a href="user_show.php?ID=<?php// echo $row['SL'] ; ?>" class="table-icon delete" title="Delete" ></a>-->
          								
          								<!-- <a href="permition.php?ID=<?php // echo $row['SL'] ; ?>" class="table-icon edit"  title="Edit Permission" ></a> -->
          								<?php } ?>
          							</td>
          						</tr>
								<!--            
									<a href="http://kilab.pl/simpleadmin/#" class="table-icon archive" title="Archive"></a>
									<a href="http://kilab.pl/simpleadmin/#" class="table-icon delete" title="Delete"></a>
									                        <a href="http://kilab.pl/simpleadmin/#" class="table-icon ok" title="ok"></a>
									<a href="http://kilab.pl/simpleadmin/#" class="table-icon report" title="report"></a>
									<a href="http://kilab.pl/simpleadmin/#" class="table-icon error" title="error"></a>-->
									<?php
									$sl++;
								}
								?>
							</tbody>
						</table>
						
					</div>
				</div>
				<div class="clear"></div>
			</div>
		</div><br />
		<br />

		<?php require("re_footer.php"); ?>
	</body>
	</html>