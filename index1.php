<?php
include "admin/db_Class.php";
$obj = new db_class();
$obj->MySQL();

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include ('re_head.php'); ?>
  </head>
  <body>
   <script type='text/javascript' data-cfasync='false'>window.purechatApi = { l: [], t: [], on: function () { this.l.push(arguments); } }; (function () { var done = false; var script = document.createElement('script'); script.async = true; script.type = 'text/javascript'; script.src = 'https://app.purechat.com/VisitorWidget/WidgetScript'; document.getElementsByTagName('HEAD').item(0).appendChild(script); script.onreadystatechange = script.onload = function (e) { if (!done && (!this.readyState || this.readyState == 'loaded' || this.readyState == 'complete')) { var w = new PCWidget({c: '50cb11f2-66e7-411a-8173-cccbb23bfbfe', f: true }); done = true; } }; })();</script>

<!-- Hotjar Tracking Code for http://imstriker.com/gsb5/ -->
<script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:1181970,hjsv:6};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
</script>

    <div class="probootstrap-search" id="probootstrap-search">
      <a href="#" class="probootstrap-close js-probootstrap-close"><i class="icon-cross"></i></a>
      <form action="#">
        <input type="search" name="s" id="search" placeholder="Search a keyword and hit enter...">
      </form>
    </div>
    
    <div class="probootstrap-page-wrapper">
      <!-- Fixed navbar -->
      
      <?php include ('re_menu.php') ; ?>

      <section class="flexslider">
        <ul class="slides">
          <li style="background-image: url(img/slider_1.jpg)" class="overlay">
            <div class="container">
              <div class="row">
                <div class="col-md-8 col-md-offset-2">
                  <div class="probootstrap-slider-text text-center">
                    <h1 class="probootstrap-heading probootstrap-animate">Graduate School of Business</h1>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li style="background-image: url(img/slider_2.jpg)" class="overlay">
            <div class="container">
              <div class="row">
                <div class="col-md-8 col-md-offset-2">
                  <div class="probootstrap-slider-text text-center">
                    <h1 class="probootstrap-heading probootstrap-animate">Education is Life</h1>
                  </div>
                </div>
              </div>
            </div>
            
          </li>
          <li style="background-image: url(img/slider_3.jpg)" class="overlay">
            <div class="container">
              <div class="row">
                <div class="col-md-8 col-md-offset-2">
                  <div class="probootstrap-slider-text text-center">
                    <h1 class="probootstrap-heading probootstrap-animate">Graduate School of Business</h1>
                  </div>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </section>
      
      <section class="probootstrap-section probootstrap-section-colored">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-left section-heading probootstrap-animate">
              <h2>Welcome to School of Excellence</h2>
            </div>
          </div>
        </div>
      </section>

      <section class="probootstrap-section">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="probootstrap-flex-block">
                <div class="probootstrap-text probootstrap-animate">
                  <h3>About School</h3>
                  <p>The GSB was established to fullfill the needs of industry and to promote and nurture business sustainability in Malaysia specifically in the Northen Region. GSB is also inpired to be as Top Business School in the neighbouring ASIA region</p>
                  <p><a href="#" class="btn btn-primary">Learn More</a></p>
                </div>
                <div class="probootstrap-image probootstrap-animate" style="background-image: url(img/video_dean.jpg)">
                  <a href="https://vimeo.com/45830194" class="btn-video popup-vimeo"><i class="icon-play3"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="probootstrap-section" id="probootstrap-counter">
        <div class="container">
          
          <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
              <div class="probootstrap-counter-wrap">
                <div class="probootstrap-icon">
                  <i class="icon-users2"></i>
                </div>
                <div class="probootstrap-text">
                  <span class="probootstrap-counter">
                    <span class="js-counter" data-from="0" data-to="20203" data-speed="5000" data-refresh-interval="50">1</span>
                  </span>
                  <span class="probootstrap-counter-label">MBA Students Enrolled</span>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
              <div class="probootstrap-counter-wrap">
                <div class="probootstrap-icon">
                  <i class="icon-user-tie"></i>
                </div>
                <div class="probootstrap-text">
                  <span class="probootstrap-counter">
                    <span class="js-counter" data-from="0" data-to="139" data-speed="5000" data-refresh-interval="50">1</span>
                  </span>
                  <span class="probootstrap-counter-label">PhD Students Enrolled</span>
                </div>
              </div>
            </div>
            <div class="clearfix visible-sm-block visible-xs-block"></div>
            <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
              <div class="probootstrap-counter-wrap">
                <div class="probootstrap-icon">
                  <i class="icon-library"></i>
                </div>
                <div class="probootstrap-text">
                  <span class="probootstrap-counter">
                    <span class="js-counter" data-from="0" data-to="99" data-speed="5000" data-refresh-interval="50">1</span>%
                  </span>
                  <span class="probootstrap-counter-label"> Qualified Teachers</span>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
               
               <div class="probootstrap-counter-wrap">
                <div class="probootstrap-icon">
                  <i class="icon-smile2"></i>
                </div>
                <div class="probootstrap-text">
                  <span class="probootstrap-counter">
                    <span class="js-counter" data-from="0" data-to="100" data-speed="5000" data-refresh-interval="50">1</span>%
                  </span>
                  <span class="probootstrap-counter-label">Employer Satisfaction</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="probootstrap-section probootstrap-section-colored probootstrap-bg probootstrap-custom-heading probootstrap-tab-section" style="background-image: url(img/highlights.jpg)">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-center section-heading probootstrap-animate">
              <h2 class="mb0">Highlights</h2>
            </div>
          </div>
        </div>
        <div class="probootstrap-tab-style-1">
          <ul class="nav nav-tabs probootstrap-center probootstrap-tabs no-border">
            <li class="active"><a data-toggle="tab" href="#featured-news">Featured News</a></li>
            <li><a data-toggle="tab" href="#upcoming-events">Upcoming Events</a></li>
          </ul>
        </div>
      </section>

      <section class="probootstrap-section probootstrap-section">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              
              <div class="tab-content">

                <div id="featured-news" class="tab-pane fade in active">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="owl-carousel" id="owl1">


                        <?php

                                         
                $sql = "SELECT * FROM cms_settings_new WHERE type='News' and active='1' ORDER BY sl DESC";
              
              $sl=1;
                  //while($row = mysql_fetch_array($result))
                $results = $obj->sql($sql);
                    while($row = mysql_fetch_array($results))
              {
                $encodseq=base64_encode($row['sl']) ;

                $data_target = '#exampleModalLong'.$row['sl'] ;

                ?>

                   

                        <div class="item">
                          <a data-toggle="modal"  href="<?php echo $data_target ; ?>" class="probootstrap-featured-news-box">
                            <figure class="probootstrap-media"><img src="admin/<?php echo $row['image'] ?>" alt="Free Bootstrap Template by uicookies.com" class="img-responsive"></figure>
                            <div class="probootstrap-text">
                              <h3><?php echo substr($row['name'],0,48) ; ?>...</h3>
                            <span class="probootstrap-date"><i class="icon-calendar"></i>
                            <?php
                              $date = $row['event_date'];
                         //    $newDateString = date_format(date_create_from_format('d-m-y', $date), 'dd-mon-yy');

                             echo $date ;
                              ?>
                           
     <!--  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="<?php echo $data_target ; ?>">
  Details
</button> -->
                              
                            </span>
                              
                            </div>
                          </a>
                        </div>

                        <?php }  ?>





                        <!-- END item -->
                        
                        <!-- END item -->
                       
                        <!-- END item -->
                        
                        <!-- END item -->
                      </div>
                    </div>
                  </div>


<?php                               
                $sql = "SELECT * FROM cms_settings_new WHERE type='News' and active='1' ORDER BY sl DESC";
              
              $sl=1;
                  //while($row = mysql_fetch_array($result))
                $results = $obj->sql($sql);
                    while($row = mysql_fetch_array($results))
              {
                $encodseq=base64_encode($row['sl']) ;

                $data_target = 'exampleModalLong'.$row['sl'] ;

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
                  <!-- END row -->
                  <div class="row">
                    <div class="col-md-12 text-center">
                      <p><a href="news.php" class="btn btn-primary">View all news</a></p>  
                    </div>
                  </div>
                </div>
                <div id="upcoming-events" class="tab-pane fade">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="owl-carousel" id="owl2">
                        
                        
                        <!-- END item -->
                        <?php
                          
                $sql = "SELECT * FROM cms_settings_new WHERE type='Event' and active='1' ORDER BY sl DESC";
              
              $sl=1;
                  //while($row = mysql_fetch_array($result))
                $results = $obj->sql($sql);
                    while($row = mysql_fetch_array($results))
              {


                $encodseq=base64_encode($row['sl']) ;

                $data_target = '#exampleModal'.$row['sl'] ;
                ?>

                        <!-- END item -->
                        <div class="item">
                          <a data-toggle="modal"  href="<?php echo $data_target ; ?>" class="probootstrap-featured-news-box">
                            <figure class="probootstrap-media"><img src="img/img_sm_2.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive"></figure>
                            <div class="probootstrap-text">
                             <h3> <?php echo $row['name'] ; ?></h3>
                              <span class="probootstrap-date"><i class="icon-calendar"></i>
                             <?php
                              $date = $row['event_date'];
                         //    $newDateString = date_format(date_create_from_format('d-m-y', $date), 'dd-mon-yy');

                             echo $date ;
                              ?>
                            </span>
                              <span class="probootstrap-location"><i class="icon-location2"></i><?php echo $row['location'] ; ?></span>
                            </div>
                          </a>
                        </div>
                        <!-- END item -->
                      <?php } ?>
                        <!-- END item -->
                      </div>
                    </div>
                  </div>


<?php                               
                $sql = "SELECT * FROM cms_settings_new WHERE type='Event' and active='1' ORDER BY sl DESC";
              
              $sl=1;
                  //while($row = mysql_fetch_array($result))
                $results = $obj->sql($sql);
                    while($row = mysql_fetch_array($results))
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


                  <div class="row">
                    <div class="col-md-12 text-center">
                      <p><a href="events.php" class="btn btn-primary">View all events</a></p>  
                    </div>
                  </div>
                </div>

              </div>
            
            </div>
          </div>
        </div>
      </section>

      <section class="probootstrap-section probootstrap-bg-white probootstrap-border-top">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center section-heading probootstrap-animate">
              <h2>Our Featured Courses</h2>
              <p class="lead">Sed a repudiandae impedit voluptate nam Deleniti dignissimos perspiciatis nostrum porro nesciunt</p>
            </div>
          </div>
          <!-- END row -->
          <div class="row">
            <div class="col-md-6">
              <div class="probootstrap-service-2 probootstrap-animate">
                <div class="image">
                  <div class="image-bg">
                    <img src="img/Highlights.jpg" alt="USM">
                  </div>
                </div>
                <div class="text">
                  <span class="probootstrap-meta"><i class="icon-calendar2"></i> July 10, 2017</span>
                    <h3>MBA</h3>
                  <p align="justify">The MBA programme is designed to help you meet your career challenges head on. It provides a rigorous and comprehensive general management curriculum, complemented by a mastery of cross functional skills.</p>
                  <p><a href="#" class="btn btn-primary">Enroll now</a> <span class="enrolled-count"><a href="">Click to download e-brochure</a></span></p>
                </div>
              </div>

              <div class="probootstrap-service-2 probootstrap-animate">
                <div class="image">
                  <div class="image-bg">
                    <img src="img/Highlights.jpg" alt="USM">
                  </div>
                </div>
                <div class="text">
                  <span class="probootstrap-meta"><i class="icon-calendar2"></i> July 10, 2017</span>
                    <h3>Online MBA</h3>
                  <p align="justify">The Online MBA programme is designed to help busy managers and professionals meet their career challenges head on. It provides a rigorous and comprehensive general management curriculum, complemented by a mastery of cross functional skills.</p>
                  <p><a href="#" class="btn btn-primary">Enroll now</a> <span class="enrolled-count"><a href="">Click to download e-brochure</a></span></p>
                </div>
              </div>

            </div>
            <div class="col-md-6">
              <div class="probootstrap-service-2 probootstrap-animate">
                <div class="image">
                  <div class="image-bg">
                    <img src="img/Highlights.jpg" alt="USM">
                  </div>
                </div>
                <div class="text">
                  <span class="probootstrap-meta"><i class="icon-calendar2"></i> July 10, 2017</span>
                 <h3>DBA</h3>
                  <p align="justify">The DBA programme at GSB aims to achieve the following inter-related goals:

Produce business leaders who possess advanced knowledge from the core business disciplines and have the ability to integrate them to enhance their decision-making skills,</p>
                  <p><a href="#" class="btn btn-primary">Enroll now</a> <span class="enrolled-count"><a href="">Click to download e-brochure</a></span></p>
                </div>
              </div>

              <div class="probootstrap-service-2 probootstrap-animate">
                <div class="image">
                  <div class="image-bg">
                    <img src="img/Highlights.jpg" alt="USM">
                  </div>
                </div>
                <div class="text">
                  <span class="probootstrap-meta"><i class="icon-calendar2"></i> July 10, 2017</span>
                   <h3>ASEAN MBA</h3>
                  <p align="justify">This Dual Degree MBA is a Flexible Learning programme delivered through Online, without interrupting your career. Over your candidature period (2 – 5 years, depending on your own pace), you study and share experiences with like-minded professionals from a wide variety of managerial backgrounds and industries. As such, you will have access to the extensive USM and ITB alumni network.</p>
                  <p><a href="#" class="btn btn-primary">Enroll now</a> <span class="enrolled-count"><a href="">Click to download e-brochure</a></span></p>
                </div>
              </div>


               <div class="probootstrap-service-2 probootstrap-animate">
                <div class="image">
                  <div class="image-bg">
                    <img src="img/Highlights.jpg" alt="USM">
                  </div>
                </div>
                <div class="text">
                  <span class="probootstrap-meta"><i class="icon-calendar2"></i> July 10, 2017</span>
                 <h3>PhD</h3>
                  <p align="justify">The PhD programme at GSB aims to achieve the following goals:

Nurture business scholars who can apply business theory and practice towards promoting the wellbeing of the community and the environment..</p>
                  <p> <a href="#" class="btn btn-primary">Enroll now</a> <span class="enrolled-count"><a href="">Click to download e-brochure</a></span></p>
                </div>
              </div>

            </div>
          </div>
        </div>
      </section>

      
      
      <section class="probootstrap-section">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center section-heading probootstrap-animate">
                <h2>Meet Our Top Management</h2>
              <p class="lead">at GSB</p>
            </div>
          </div>
          <!-- END row -->

          <div class="row">
            <div class="col-md-3 col-sm-6">
              <div class="probootstrap-teacher text-center probootstrap-animate">
                <figure class="media">
                  <img src="img/azlan.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive">
                </figure>
                <div class="text">
                  <h3>Prof. Azlan Arman</h3>
                  <p>Dean</p>
                  <ul class="probootstrap-footer-social">
                    <li class="twitter"><a href="#"><i class="icon-book"></i></a></li>
                    <li class="facebook"><a href="#"><i class="icon-mail"></i></a></li>
                    <li class="instagram"><a href="#"><i class="icon-linkedin"></i></a></li>
                    <li class="google-plus"><a href="#"><i class="icon-google2"></i></a></li>
                  </ul>
                </div>
                
              </div>
            </div>
            
            <div class="col-md-3 col-sm-6">
              <div class="probootstrap-teacher text-center probootstrap-animate">
                <figure class="media">
                  <img src="img/salmi.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive">
                </figure>
                <div class="text">
                  <h3>Dr.Salmi Mohd Isa</h3>
                  <p>Deputy Dean (Academic)</p>
                  <ul class="probootstrap-footer-social">
                    <li class="twitter"><a href="#"><i class="icon-book"></i></a></li>
                    <li class="facebook"><a href="#"><i class="icon-mail"></i></a></li>
                    <li class="instagram"><a href="#"><i class="icon-linkedin"></i></a></li>
                    <li class="google-plus"><a href="#"><i class="icon-google2"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
                        <div class="col-md-3 col-sm-6">
              <div class="probootstrap-teacher text-center probootstrap-animate">
                <figure class="media">
                  <img src="img/cheng.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive">
                </figure>
                <div class="text">
                  <h3>Assoc. Prof Cheng Ling Tan</h3>
                  <p>Deputy Dean, Research</p>
                  <ul class="probootstrap-footer-social">
             <li class="twitter"><a href="#"><i class="icon-book"></i></a></li>
                    <li class="facebook"><a href="#"><i class="icon-mail"></i></a></li>
                    <li class="instagram"><a href="#"><i class="icon-linkedin"></i></a></li>
                    <li class="google-plus"><a href="#"><i class="icon-google2"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
            
            <div class="col-md-3 col-sm-6">
              <div class="probootstrap-teacher text-center probootstrap-animate">
                <figure class="media">
                  <img src="img/nabsiah.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive">
                </figure>
                <div class="text">
                  <h3>Prof. Nabsiah Abdul Wahid</h3>
                  <p>Program Manager (DBA)</p>
                  <ul class="probootstrap-footer-social">
             <li class="twitter"><a href="#"><i class="icon-book"></i></a></li>
                    <li class="facebook"><a href="#"><i class="icon-mail"></i></a></li>
                    <li class="instagram"><a href="#"><i class="icon-linkedin"></i></a></li>
                    <li class="google-plus"><a href="#"><i class="icon-google2"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
 
           
            <div class="clearfix visible-sm-block visible-xs-block"></div>


          </div>

        </div>
      </section>
      <section class="probootstrap-section probootstrap-bg probootstrap-section-colored probootstrap-testimonial" style="background-image: url(img/Highlights.jpg);">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center section-heading probootstrap-animate">
              <h2>Alumni Testimonial</h2>

              <p class="lead"></p>
            </div>
          </div>
          <!-- END row -->
          <div class="row">
            <div class="col-md-12 probootstrap-animate">
              <div class="owl-carousel owl-carousel-testimony owl-carousel-fullwidth">
                <div class="item">

                  <div class="probootstrap-testimony-wrap text-center">
                    <figure>
                      <img src="img/alumni_1.jpg" alt="Free Bootstrap Template by uicookies.com">
                    </figure>
                    <blockquote class="quote">&ldquo;Design must be functional and functionality must be translated into visual aesthetics, without any reliance on gimmicks that have to be explained.&rdquo; <cite class="author"> &mdash; <span>Mike Fisher</span></cite></blockquote>
                  </div>

                </div>
                <div class="item">
                  <div class="probootstrap-testimony-wrap text-center">
                    <figure>
                      <img src="img/alumni_2.jpg" alt="Free Bootstrap Template by uicookies.com">
                    </figure>
                    <blockquote class="quote">&ldquo;Creativity is just connecting things. When you ask creative people how they did something, they feel a little guilty because they didn’t really do it, they just saw something. It seemed obvious to them after a while.&rdquo; <cite class="author"> &mdash;<span>Jorge Smith</span></cite></blockquote>
                  </div>
                </div>
                <div class="item">
                  <div class="probootstrap-testimony-wrap text-center">
                    <figure>
                      <img src="img/alumni_3.jpg" alt="Free Bootstrap Template by uicookies.com">
                    </figure>
                    <blockquote class="quote">&ldquo;I think design would be better if designers were much more skeptical about its applications. If you believe in the potency of your craft, where you choose to dole it out is not something to take lightly.&rdquo; <cite class="author">&mdash; <span>Brandon White</span></cite></blockquote>
                  </div>
                </div>
                
              </div>
            </div>
          </div>
          <!-- END row -->
        </div>
      </section>

      <section class="probootstrap-section">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center section-heading probootstrap-animate">
              <h2>Why Choose GSB</h2>
              <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto provident qui tempore natus quos quibusdam soluta at.</p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="service left-icon probootstrap-animate">
                <div class="icon"><i class="icon-checkmark"></i></div>
                <div class="text">
                  <h3>To be a reputable business school for a sustainable tomorrow</h3>
 
                </div>  
              </div>
              <div class="service left-icon probootstrap-animate">
                <div class="icon"><i class="icon-checkmark"></i></div>
                <div class="text">
                  <h3> High level representations of students from Industry</h3>

                </div>
              </div>
              <div class="service left-icon probootstrap-animate">
                <div class="icon"><i class="icon-checkmark"></i></div>
                <div class="text">
                  <h3>Top tier journal publications from faculty members</h3>

                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="service left-icon probootstrap-animate">
                <div class="icon"><i class="icon-checkmark"></i></div>
                <div class="text">
                  <h3>Nurture business leaders to drive business sustainability</h3>
   
                </div>  
              </div>
              
              <div class="service left-icon probootstrap-animate">
                <div class="icon"><i class="icon-checkmark"></i></div>
                <div class="text">
                  <h3>Close engagement with industry</h3>

                </div>
              </div>
              
              <div class="service left-icon probootstrap-animate">
                <div class="icon"><i class="icon-checkmark"></i></div>
                <div class="text">
                  <h3>Industry relevent programmes</h3>

                </div>
              </div>

            </div>
          </div>
          <!-- END row -->
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