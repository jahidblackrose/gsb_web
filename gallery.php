<?php 
include "admin/db_Class.php";
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
            <div class="col-md-12 text-left section-heading probootstrap-animate mb0">
              <h1 class="mb0">School Gallery</h1>
            </div>
          </div>
        </div>
      </section>

      <section class="probootstrap-section probootstrap-bg-white">
      <div class="container">
        
        <div class="row">
          <div class="col-md-12">
            <div class="portfolio-feed three-cols">
              <div class="grid-sizer"></div>
              <div class="gutter-sizer"></div>
              <div class="probootstrap-gallery">

      <?php 
                      $sql = "SELECT * FROM sub_image  ORDER BY sl DESC";
              
              $sl=1;
                  //while($row = mysql_fetch_array($result))
               /* $results = $obj->sql($sql);
                    while($row = mysqli_fetch_array($results))
              {*/
            $result = $conn->query($sql);

            while($row = $result->fetch_assoc()) 
            {
            
       ?>

                <figure itemprop="associatedMedia" itemscope itemtype="" class="grid-item probootstrap-animate">
                  <a href="uploadimage/<?php echo $row['image'] ; ?>" itemprop="contentUrl" data-size="1000x632">
                    <img src="uploadimage/<?php echo $row['image'] ; ?>" itemprop="thumbnail" alt="" />
                  </a>
                  <figcaption itemprop="caption description"><?php echo $row['id'] ; ?></figcaption>
                </figure>
                <?php } ?>

<!-- 
                <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject" class="grid-item probootstrap-animate">
                  <a href="img/gallery/foster.jpg" itemprop="contentUrl" data-size="1000x632">
                    <img src="img/gallery/foster.jpg" itemprop="thumbnail" alt="Free Bootstrap Template by uicookies.com" />
                  </a>
                  <figcaption itemprop="caption description">Dr. Foster conducting workshop</figcaption>
                </figure>

                <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject" class="grid-item probootstrap-animate">
                  <a href="img/gallery/christ_hk.jpg" itemprop="contentUrl" data-size="1000x632">
                    <img src="img/gallery/christ_hk.jpg" itemprop="thumbnail" alt="Free Bootstrap Template by uicookies.com" />
                  </a>
                  <figcaption itemprop="caption description">Dr. Christopher visited Hong Kong</figcaption>
                </figure> -->
                
              </div>

            </div>
          </div>
        </div>
      </div>
    </section>
      

    <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="pswp__bg"></div>
      <div class="pswp__scroll-wrap">

          <div class="pswp__container">
              <div class="pswp__item"></div>
              <div class="pswp__item"></div>
              <div class="pswp__item"></div>
          </div>

          <div class="pswp__ui pswp__ui--hidden">
              <div class="pswp__top-bar">
                  <div class="pswp__counter"></div>
                  <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
                  <button class="pswp__button pswp__button--share" title="Share"></button>
                  <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                  <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
                  <div class="pswp__preloader">
                      <div class="pswp__preloader__icn">
                        <div class="pswp__preloader__cut">
                          <div class="pswp__preloader__donut"></div>
                        </div>
                      </div>
                  </div>
              </div>
              <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                  <div class="pswp__share-tooltip"></div> 
              </div>
              <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
              </button>
              <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
              </button>
              <div class="pswp__caption">
                  <div class="pswp__caption__center"></div>
              </div>
          </div>
      </div>
    </div>
    
        <?php include ('re_footer.php'); ?>

    </div>
    <!-- END wrapper -->
    

    <script src="js/scripts.min.js"></script>
    <script src="js/main.min.js"></script>
    <script src="js/custom.js"></script>

  </body>
</html>