<?php
require_once('re_login_connection.php');
require_once('re_ip_trace.php') ;

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
                                PUBALI BANK Software Development Division Project Management System
                            </strong>
                        </div>
                        <!--  <div class="entry">
              </div>
          -->
          <?php 
        //  echo $IP ;
          ?>
            <div align="center">
         <table width="40%" align="center" border="1"  cellpadding="0" cellspacing="0" style="font-size: 15px !important">
            <thead>
              <tr>
                <th style="font-size: 14px !important; color: white">Serial</th>
                <th style="font-size: 14px !important; color: white">Project Status</th>
                <th style="font-size: 14px !important; color: white">Count</th>
              </tr>
            </thead>
            <tbody class="" style="font-size: 15px !important">
              <?php

/*
SELECT A.PROJECT_ID,A.PROJECT_TITLE,B.USER_ID FROM SDDPMS_PROJECT A , SDDPMS_PROJECT_MEMBER B
WHERE A.PROJECT_ID=B.PROJECT_ID AND B.USER_ID='19'
*/

if($user_type=='1' || $user_type=='2')
{

                $sql = "SELECT PROJECT_STATUS,NVL(COUNT(*),0) AS COUNT FROM SDDPMS_PROJECT GROUP BY PROJECT_STATUS";
}
elseif($user_type=='4')
{

                $sql = "SELECT PROJECT_STATUS,NVL(COUNT(*),0) AS COUNT FROM SDDPMS_PROJECT WHERE PROJECT_STATUS='Testing' GROUP BY PROJECT_STATUS";
}

else
{
   $sql = "SELECT PROJECT_STATUS,NVL(COUNT(*),0) AS COUNT FROM  (SELECT A.PROJECT_STATUS FROM SDDPMS_PROJECT A , SDDPMS_PROJECT_MEMBER B
WHERE A.PROJECT_ID=B.PROJECT_ID AND B.USER_ID='$user_id' ) t GROUP BY PROJECT_STATUS";
}
             //     if($user_type=='2')
          //  {
       //   $sql=$sql." AND agms.PROJECT_MANAGER='$user_id'" ;  
           //       }
             //   $sql .="ORDER  BY LEFT ASC" ;
              $sl=1;
                  //while($row = mysql_fetch_array($result))
                 $result = $conn->query($sql);
            while($row = $result->fetch_assoc()) 
            {
                ?>
                <tr align="center">
                  <td class="align-center" title="" style="font-size: 15px !important"><?php echo $sl ; ?></td>
                  <td class="" style="font-size: 14px !important">
                  <a href="project_list.php?IDSTSTUS=<?php echo $row['PROJECT_STATUS'] ; ?>"><?php echo $row['PROJECT_STATUS'] ; ?></a></td>
                  <td class="" style="font-size: 14px !important">
                     <a href="project_list.php?IDSTSTUS=<?php echo $row['PROJECT_STATUS'] ; ?>"><?php echo $row['COUNT'] ; ?></a></td>
                  </tr>
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