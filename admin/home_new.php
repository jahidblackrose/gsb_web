<?php
require_once('re_login_connection.php');
//require_once('re_ip_trace.php') ;

  if ($_GET['ID'])
  {
    $DESL   =$_GET['ID'];
    $STATUS =$_GET['ID2'];
    $SL     =base64_decode($DESL) ;
  if($STATUS !=NULL AND ($STATUS=='0' OR $STATUS=='1'))
  {
    $SQL ="UPDATE cms_settings_new SET active='$STATUS'  WHERE sl='$SL'";
//die($query) ;
     $conn->query($SQL);
  }

 if($STATUS !=NULL AND ($STATUS=='3'))
  {
    $SQL ="DELETE FROM cms_settings_new  WHERE sl='$SL'";
//die($query) ;
    $conn->query($SQL);
  }

}

  ?>
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <!-- saved from url=(0028)http://kilab.pl/simpleadmin/ -->
    <html lang="pl" xml:lang="pl" xmlns="http://www.w3.org/1999/xhtml">
    <?php require("re_head.php"); ?>
     <link rel="stylesheet" type="text/css" href="images/table.css" media="screen">
    <body>
        <div class="wrap">
            <div id="header">
                <div id="top">
                    <div class="left">
                        <p>
                            Welcome,
                            <strong>
                                <?php  echo $user_name ; ?>
                            </strong>
                            [
                            <a href="logout.php">
                                logout
                            </a>
                            ]
                        </p>
                    </div>
                    <?php require("re_head_date.php"); ?>
                </div>
                <?php require("re_menu.php"); ?>
            </div>
            <div id="content">
  <div id="main1">
                    <div class="clear">
                    </div>
                    <div align="center" class="full_w">
                        <div align="center" class="h_title">
                            <strong style="color:#FFF">
                                GSB News/Event Information
                            </strong>
                        </div>
                        <!--  <div class="entry">
              </div>
          -->
          <?php 
        //  echo $IP ;
          ?>
            <div align="center">
              <br/>
         <table width="100%" align="center" class="sortable draggable" border="1"  cellpadding="0" cellspacing="0">
            <thead>
              <tr>
                <th scope="col">Serial</th>
                <th scope="col">Category</th>
                <th scope="col">Title</th>
                <th scope="col">Date</th>
                <th scope="col">Status</th>
               <!--  <th scope="col">Workstation</th> -->
                <th scope="col">Image</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody class="bottomBorder">
              <?php
              
                $sql = "SELECT *
                FROM cms_settings_new   
                ORDER BY sl DESC";
              
              $sl=1;
                  //while($row = mysql_fetch_array($result))
                    $result = $conn->query($sql);
            while($row = $result->fetch_assoc()) 
            {
                $encodseq=base64_encode($row['sl']) ;
                ?>
                <tr>
                  <td class="align-center" title="<?php echo $row['SL'] ; ?>"><?php echo $sl ; ?></td>
                  <td class="bottomBorder"><?php echo $row['type'] ; ?></td>
                  <td class="bottomBorder"><?php echo $row['name'] ; ?></td>
                  <td class="bottomBorder"  align="center">
                    <?php echo $row['event_date'] ; ?>
                  </td>
                  <td class="bottomBorder"><?php if($row['active']=='1') { echo "<font color='#17400f'>Active</font>" ; }
                  else { echo "<font color='red'>Deactive</font>" ; } ?> </td>
              <!--     <td class="bottomBorder"><?php // echo $row['WORKSTATION'] ; ?></td> -->
                  <td class="bottomBorder" align="center"><img src="<?php echo $row['image'] ; ?>" width="100px" height="*"></td>
                  <td>


                        <a href="home_new.php?ID=<?php echo $encodseq ; ?>&ID2=1">Active</a> 
                      | <a href="home_new.php?ID=<?php echo $encodseq ; ?>&ID2=0">Deactive</a>
                      | <a href="content_new_update.php?ID=<?php echo $encodseq ; ?>">Content Update</a>
                      | <a href="image_content.php?ID=<?php echo $encodseq ; ?>"  target="_blank">Upload Image</a>
                       | <a href="home_new.php?ID=<?php echo $encodseq ; ?>&ID2=3" onclick="return confirm('Are you sure want to Delete?')">Delete</a>

                       <!--  <a href="admin_set_permission.php?ID=<?php echo $row['SL'] ; ?>" class="table-icon report" title="Add Permission"></a>
                         <a href="user_show.php?ID1=<?php echo $row['SL'] ; ?>" class="table-icon archive" onclick="return confirm('Are you sure want to Update password?')" title="Reset Password (123456)"></a> -->
                         <!--<a href="user_show.php?ID=<?php// echo $row['SL'] ; ?>" class="table-icon delete" title="Delete" ></a>-->
                <!--        <a href="JavaScript:newPopup('agrmt_edit.php?ID=<?php // echo $encodseq ; ?>')" class="table-icon edit" title="edit">
                -->
                   <!--  <a href="#" class="table-icon delete" title="Archive"></a> -->
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
          <div class="sep">
          </div>
          <?php // echo  md5('1212') ; ?>
          <!--draggable -->
      </div>
  </div>
  <div class="clear">
  </div>
</div>
</div>
<br/>
<br/>
<?php require("re_footer.php"); ?>
</body>
</html>