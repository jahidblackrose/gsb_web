<?php
include "admin/db_Class.php";
//$obj = new db_class();
//$obj->MySQL();

           
                $sql = "SELECT * FROM cms_settings_new WHERE type='News' and  active='1' ORDER BY sl DESC LIMIT 0,1";
              
              $sl=1;
                  //while($row = mysql_fetch_array($result))
              $result = $conn->query($sql);

            while($row = $result->fetch_assoc()) 
            {
                $encodseq=base64_encode($row['sl']) ;

                $data_target = '#exampleModal'.$row['sl'] ;
                $title= substr($row['name'],0,48) ;
                $date = $row['event_date'] ;
                $location = $row['location'] ;
                $content = substr($row['content'],0,100) ;

                }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include ('re_head.php'); ?>
  </head>
  <body>

    <div class="probootstrap-search" id="probootstrap-search">
      <a href="#" class="probootstrap-close js-probootstrap-close"><i class="icon-cross"></i></a>
      <form action="#">
        <input type="search" name="s" id="search" placeholder="Search a keyword and hit enter...">
      </form>
    </div>
    
    <div class="probootstrap-page-wrapper">
      <!-- Fixed navbar -->
      
      <?php include ('re_menu.php') ; ?>
      
      <section class="probootstrap-section probootstrap-section-colored">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-left section-heading probootstrap-animate">
              <h1>School Events</h1>
            </div>
          </div>
        </div>
      </section>
      <section class="probootstrap-section">
        <div class="container">
          <div class="row">
          <?php
                $sql = "SELECT * FROM cms_settings_new WHERE type='Event' and  active='1' ORDER BY sl DESC";
              
              $sl=1;
                  //while($row = mysql_fetch_array($result))
              $result = $conn->query($sql);

            while($row = $result->fetch_assoc()) 
            {
                $encodseq=base64_encode($row['sl']) ;
                $data_target = '#exampleModal'.$row['sl'] ;
                
                $head = strlen($row['name']);
                if($head<25)
                {
                $head_finish = " ...... ... ... ... ... .";
                }
                else
                {
                $head_finish = "...";    
                }
                
                ?>
            <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
              <a data-toggle="modal"  href="<?php echo $data_target ; ?>" class="probootstrap-featured-news-box">
                <figure class="probootstrap-media"><img src="<?php echo "admin/".$row['image'] ;?>" alt="Free Bootstrap Template by uicookies.com" height="150px" width="302px" class=""></figure>
                <div class="probootstrap-text">
                  <h3><?php echo substr($row['name'],0,39) ; echo $head_finish ?></h3>
                  <span class="probootstrap-date"><i class="icon-calendar"></i> <?php echo $row['event_date'] ; ?></span>
                  <span class="probootstrap-location"><i class="icon-location2"></i> <?php echo $row['location'] ; ?></span>
                </div>
              </a>
            </div>

<?php } ?>
          </div>
<?php                               
                $sql = "SELECT * FROM cms_settings_new WHERE type='Event' and active='1' ORDER BY sl DESC";
              $sl=1;
                  //while($row = mysql_fetch_array($result))
               $result = $conn->query($sql);

            while($row = $result->fetch_assoc()) 
            {
                $encodseq=base64_encode($row['sl']) ;
                $data_target = 'exampleModal'.$row['sl'] ;
                ?>
  <div class="modal fade bd-example-modal-lg" id="<?php echo $data_target ; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"><b><?php echo $row['name'] ; ?></b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <b>Date :  <?php echo $row['event_date'] ; ?> </b>
        <br/>
         <b>Location :  <?php echo $row['location'] ; ?> </b>
       <?php echo $row['content'] ; ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
<!--         <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>
<?php 
}
?>
        </div>
      </section>
      <?php include ('re_footer.php'); ?>
    </div>
    <!-- END wrapper -->
    <script src="js/scripts.min.js"></script>
    <script src="js/main.min.js"></script>
    <script src="js/custom.js"></script>
  </body>
</html>