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

<!-- WhatsHelp.io widget -->
<script type="text/javascript">
    (function () {
        var options = {
            whatsapp: "+60142351676", // WhatsApp number
            call_to_action: "Message us", // Call to action
            position: "right", // Position may be 'right' or 'left'
        };
        var proto = document.location.protocol, host = "whatshelp.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script>
<!-- /WhatsHelp.io widget -->
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
                    <h1 class="probootstrap-heading probootstrap-animate">Nurturing Business Sustainabilityt</h1>
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
                  <h3><b>About School</b></h3>
                  <p align="justify">The GSB was established to fulfil the needs of industry and to promote and nurture business sustainability in Malaysia specifically in the Northern region. GSB is also inspired to be as Top Business School in the neighbouring Asia region. </p>
                  <p><a href="about.php" class="btn btn-primary">Learn More</a></p>
                </div>
                <div class="probootstrap-image probootstrap-animate" style="background-image: url(img/video_dean.jpg)">
                  <a href="https://vimeo.com/338903054" class="btn-video popup-vimeo"><i class="icon-play3"></i></a>
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
              <h2><b>Our Featured Courses</b></h2>
              
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
              
                    <h3><strong>MBA</strong></h3>
                  <p align="justify"><b>The MBA programme is designed to help you meet your career challenges head on. It provides a rigorous and comprehensive general management curriculum, complemented by a mastery of cross functional skills.</b></p>
                  <p> </p>
                 
                  <p><a href="http://www.admissions.usm.my/index.php/postgraduate" class="btn btn-primary"><b>Enrol now</b></a> <span class="Enroled-count"><p><a href="files/MBA.pdf">Click to download e-brochure</a></p></span></p>
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
                  
                    <h3><strong>OMBA</strong></h3>
                  <p align="justify"><b>The Online MBA programme is designed to help busy managers and professionals meet their career challenges head on. It provides a rigorous and comprehensive general management curriculum, complemented by a mastery of cross functional skills. </b></p>
                  <p> </p>
                 
                  <p><a href="http://www.admissions.usm.my/index.php/postgraduate" class="btn btn-primary"><b>Enrol now</b></a> <span class="Enroled-count"><p><a href="files/EMBA.pdf">Click to download e-brochure</a></p></span></p>
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
                 
                    <h3><strong> Dual Degree</strong></h3>
                  <p align="justify"><b>This Dual Degree MBA is a flexible learning programme delivered through Online, without interrupting your career. Over your candidature period (2 – 5 years, depending on your own pace), you study and share experiences with like-minded professionals from a wide variety of managerial backgrounds and industries. As such, you will have access to the extensive USM and ITB alumni network.</b></p>
                  <p> </p>
                 
                  <p><a href="http://www.admissions.usm.my/index.php/postgraduate" class="btn btn-primary"><b>Enrol now</b></a> <span class="Enroled-count"><p><a href="files/dual.pdf">Click to download e-brochure</a></p></span></p>
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
                  
                    <h3><strong>Double Degree</strong></h3>
                  <p align="justify"><b>The combination of established academic programmes with equally interactive face-to-face periods in Graduate School of Business, Universiti Sains Malaysia and Adam Smith Business School, University of Glasgow provides the perfect environment for a program of the highest quality and teaching standards.</b></p>
                  <p> </p>
                 
                  <p><a href="#" class="btn btn-primary"><b>Enrol now</b></a> <span class="Enroled-count"><p><a href="double.pdf">Click to download e-brochure</a></p></span></p>
                </div>
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
               
                    <h3><strong>DBA</strong></h3>
                  <p align="justify"><b>The DBA programme at GSB aims to achieve the following inter-related goals: Produce business leaders who possess advanced knowledge from the core business disciplines and have the ability to integrate them to enhance their decision-making skills</b></p>
                  <p> </p>
                 
                  <p><a href="http://www.admissions.usm.my/index.php/postgraduate" class="btn btn-primary"><b>Enrol now</b></a> <span class="Enroled-count"><p><a href="files/DBA.pdf">Click to download e-brochure</a></p></span></p>
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
                  
                    <h3><strong>PhD</strong></h3>
                  <p align="justify"><b>The PhD programme at GSB aims to achieve the following goals: Nurture business scholars who can apply business theory and practice towards promoting the wellbeing of the community and the environment.</b></p>
                  <p> </p>
                 
                  <p><a href="http://www.admissions.usm.my/index.php/postgraduate" class="btn btn-primary"><b>Enrol now</b></a> <span class="Enroled-count"><p><a href="">Click to download e-brochure</a></p></span></p>
                </div>
              </div>
              </div>



               


       </div>
      </section>

      
      
      <section class="probootstrap-section">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center section-heading probootstrap-animate">
                <h2><strong>Meet Our Top Management</strong></h2>
              <p class="lead">at GSB</p>
            </div>
          </div>
          <!-- END row -->

          <div class="row">
            <div class="col-md-12 col-sm-6">
              <div class="probootstrap-teacher text-center probootstrap-animate">
                <figure class="media">
                  <img src="img/azlan.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive">
                </figure>
                <div class="text">
                  <h3><b>Prof. Dr. Azlan Amran</b></h3>
                  <p>Dean</p>
                  <ul class="probootstrap-footer-social">
                    <li class="twitter"><a href="cvs/cv_azlan.pdf"><i class="icon-book"></i></a></li>
                    <li class="facebook"><a href="mailto: azlan_amran@usm.my"><i class="icon-mail"></i></a></li>
                    <li class="instagram"><a href="#"><i class="icon-linkedin"></i></a></li>
                    <li class="google-plus"><a href="http://tinyurl.com/yxeyz3vu "><i class="icon-google2"></i></a></li>
                  </ul>
                </div>
                
              </div>
            </div>
            
            <div class="row">
            <div class="col-md-3 col-sm-6">
              <div class="probootstrap-teacher text-center probootstrap-animate">
                <figure class="media">
                  <img src="img/salmi.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive">
                </figure>
                <div class="text">
                  <h3><b>Assoc Prof. Dr. Salmi Mohd. Isa</b> <br> </br></h3>
                  <p>Deputy Dean (Academic)</p>
                  <ul class="probootstrap-footer-social">
                    <li class="twitter"><a href="cvs/cv_salmi.pdf"><i class="icon-book"></i></a></li>
                    <li class="facebook"><a href="mailto:salmi.mohd.isa@usm.my"><i class="icon-mail"></i></a></li>
                    <li class="instagram"><a href="https://my.linkedin.com/in/salmi-mohd-isa-60b87653"><i class="icon-linkedin"></i></a></li>
                    <li class="google-plus"><a href="http://tinyurl.com/yygq79y5"><i class="icon-google2"></i></a></li>
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
                  <h3><b> Assoc Prof. Dr. Cheng Ling Tan</b>    <br> </br></h3>
                  <p>Deputy Dean (Research)</p>
                  <ul class="probootstrap-footer-social">
                    <li class="twitter"><a href="cvs/cv_tan.pdf"><i class="icon-book"></i></a></li>
                    <li class="facebook"><a href="mailto:tanchengling@usm.my"><i class="icon-mail"></i></a></li>
                    <li class="instagram"><a href="https://my.linkedin.com/in/chengling"><i class="icon-linkedin"></i></a></li>
                    <li class="google-plus"><a href="http://tinyurl.com/y6kulv7e"><i class="icon-google2"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="clearfix visible-sm-block visible-xs-block"></div>
            <div class="col-md-3 col-sm-6">
              <div class="probootstrap-teacher text-center probootstrap-animate">
                <figure class="media">
                  <img src="img/nabsiah.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive">
                </figure>
                <div class="text">
                  <h3><b>Prof. Nabsiah Abdul Wahid</b><br> </br></h3>
                  <p>DBA Programme Manager</p>
                  <ul class="probootstrap-footer-social">
                    <li class="twitter"><a href="cvs/cv_nabsiah.pdf"><i class="icon-book"></i></a></li>
                    <li class="facebook"><a href="mailto:nabsiah@usm.my"><i class="icon-mail"></i></a></li>
                    <li class="instagram"><a href="https://my.linkedin.com/in/nabsiah-abdul-wahid-2349133b"><i class="icon-linkedin"></i></a></li>
                    <li class="google-plus"><a href="http://tinyurl.com/y6fmqk8x"><i class="icon-google2"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="probootstrap-teacher text-center probootstrap-animate">
                <figure class="media">
                  <img src="img/christopher.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive">
                </figure>
                <div class="text">
                  <h3><b>Dr. Christopher Richardson</b><br> </br></h3>
                  <p>PhD Programme Manager</p>
                  <ul class="probootstrap-footer-social">
                    <li class="twitter"><a href="cvs/cv_chris.pdf"><i class="icon-book"></i></a></li>
                    <li class="facebook"><a href="mailto:christopher.richardson@usm.my"><i class="icon-mail"></i></a></li>
                    <li class="instagram"><a href="https://tinyurl.com/y4eu4one"><i class="icon-linkedin"></i></a></li>
                    <li class="google-plus"><a href="http://tinyurl.com/y3nhxuvp"><i class="icon-google2"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-3 col-sm-6">
              <div class="probootstrap-teacher text-center probootstrap-animate">
                <figure class="media">
                  <img src="img/zurina.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive">
                </figure>
                <div class="text">
                  <h3><b>Dr. Zurina Mohaidin</b><br> </br></h3>
                  <p>MBA Progamme Manager</p>
                  <ul class="probootstrap-footer-social">
                    <li class="twitter"><a href="cvs/cv_zurina.pdf"><i class="icon-book"></i></a></li>
                    <li class="facebook"><a href="mailto: mzurina@usm.my"><i class="icon-mail"></i></a></li>
                    <li class="instagram"><a href="#"><i class="icon-linkedin"></i></a></li>
                    <li class="google-plus"><a href="https://tinyurl.com/y2ohvk7s"><i class="icon-google2"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="probootstrap-teacher text-center probootstrap-animate">
                <figure class="media">
                  <img src="img/rosly.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive">
                </figure>
                <div class="text">
                  <h3><b>Dr. Rosly Othman</b><br> </br></h3>
                  <p>OMBA Progamme Manager</p>
                  <ul class="probootstrap-footer-social">
                    <li class="twitter"><a href="cvs/cv_rosly.pdf"><i class="icon-book"></i></a></li>
                    <li class="facebook"><a href="mailto:rosly@usm.my"><i class="icon-mail"></i></a></li>
                    <li class="instagram"><a href="https://my.linkedin.com/in/rosly-othman-1984aa31"><i class="icon-linkedin"></i></a></li>
                    <li class="google-plus"><a href="http://tinyurl.com/yyphkcac"><i class="icon-google2"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="clearfix visible-sm-block visible-xs-block"></div>
            <div class="col-md-3 col-sm-6">
              <div class="probootstrap-teacher text-center probootstrap-animate">
                <figure class="media">
                  <img src="img/junaimah.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive">
                </figure>
                <div class="text">
                  <h3><b>Dr. Junaimah Jauhar</b> <br> </br></h3>
                  <p>EDP Progamme Manager</p>
                  <ul class="probootstrap-footer-social">
                    <li class="twitter"><a href="cvs/cv_junaimah.pdf"><i class="icon-book"></i></a></li>
                    <li class="facebook"><a href="mailto: naimah@usm.my"><i class="icon-mail"></i></a></li>
                    <li class="instagram"><a href="https://my.linkedin.com/in/junaimah-jauhar-51713526"><i class="icon-linkedin"></i></a></li>
                    <li class="google-plus"><a href="http://tinyurl.com/yyzsfx8r"><i class="icon-google2"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="probootstrap-teacher text-center probootstrap-animate">
                <figure class="media">
                  <img src="img/kavigtha.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive">
                </figure>
                <div class="text">
                  <h3><b>Dr. Kavigtha Mohan Kumar</b></h3>
                  <p>Manager(Quality & Accreditation)</p>
                  <ul class="probootstrap-footer-social">
                    <li class="twitter"><a href="cvs/cv_kavigtha.pdf"><i class="icon-book"></i></a></li>
                    <li class="facebook"><a href="mailto: kavigtha.mk@usm.my"><i class="icon-mail"></i></a></li>
                    <li class="instagram"><a href="https://my.linkedin.com/in/kavigtha-mohan-kumar-10408221"><i class="icon-linkedin"></i></a></li>
                    <li class="google-plus"><a href="http://tinyurl.com/yyqhz8j8"><i class="icon-google2"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
                   
           
            <div class="clearfix visible-sm-block visible-xs-block"></div>


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
                
                if($row['image']!=NULL)
                {
                $image =  'admin/'.$row['image'] ; 
                }
                
                else
                {
                    $image = "img/img_sm_3.jpg" ;
                }
            
                ?>
                    <div class="item">
                          <a data-toggle="modal"  href="<?php echo $data_target ; ?>" class="probootstrap-featured-news-box">
                            <figure class="probootstrap-media"><img src="<?php echo $image ; ?>" width="310" height="150" alt="" >
                            <!-- class="img-responsive" -->
                            </figure>
                            <div class="probootstrap-text">
                              <h3><?php if(strlen($row['name'])>48) { echo substr($row['name'],0,50).'...' ; } else { echo $row['name'] ; echo '<br/>.' ; }  ?></h3>
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

                  if($row['image']!=NULL)
                {
                $image11 =  'admin/'.$row['image'] ; 
                }
                
                else
                {
                    $image11 = "img/img_sm_3.jpg" ;
                }

                $data_target = 'exampleModalLong'.$row['sl'] ;

                ?>
  <div class="modal fade bd-example-modal-lg" id="<?php echo $data_target ; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">
            <img src="<?php echo $image11 ; ?>" alt="Free Bootstrap Template by uicookies.com" class="img-responsive">
            <br/>
            <b><?php echo $row['name'] ; ?></b></h5>
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

                   if($row['image']!=NULL)
                {
                $image1 =  'admin/'.$row['image'] ; 
                }
                
                else
                {
                    $image1 = "img/img_sm_3.jpg" ;
                }
                $encodseq=base64_encode($row['sl']) ;

                $data_target = '#exampleModal'.$row['sl'] ;
                ?>

                        <!-- END item -->
                        <div class="item">
                          <a data-toggle="modal"  href="<?php echo $data_target ; ?>" class="probootstrap-featured-news-box">
                            <figure class="probootstrap-media"><img src="<?php echo $image1 ; ?>" alt="" width="310" height="150" class=""></figure>
                            <div class="probootstrap-text">
                             <h3> <?php if(strlen($row['name'])>48) { echo substr($row['name'],0,50).'...' ; } else { echo $row['name'] ; echo '<br/>.' ; }  ?></h3>
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

                   if($row['image']!=NULL)
                {
                $image11 =  'admin/'.$row['image'] ; 
                }
                
                else
                {
                    $image11 = "img/img_sm_3.jpg" ;
                }

                $data_target = 'exampleModal'.$row['sl'] ;

                ?>
  <div class="modal fade bd-example-modal-lg" id="<?php echo $data_target ; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">
             <img src="<?php echo $image11 ; ?>" alt="Free Bootstrap Template by uicookies.com" class="img-responsive">
            <br/>
            <b><?php echo $row['name'] ; ?></b></h5>
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
                    <blockquote class="quote">Work experience with USM-DBA will develop creative, innovative and dynamic business centric corporate leaders. <cite class="author"> &mdash; <span>Mirza Manirajah Bin Abdullah (Hanfiq Resources as MD and Riverbank Academy as Head of quality)</span></cite></blockquote>
                  </div>

                </div>
                <div class="item">
                  <div class="probootstrap-testimony-wrap text-center">
                    <figure>
                      <img src="img/alumni_2.jpg" alt="Free Bootstrap Template by uicookies.com">
                    </figure>
                    <blockquote class="quote">&ldquo;At USM, GSB, The MBA program equips leaders with necessary skill sets to thrive in their respective marketplace.&rdquo; <cite class="author"> &mdash;<span>Vivegananthan Supramaniam</span></cite></blockquote>
                  </div>
                </div>
                <div class="item">
                  <div class="probootstrap-testimony-wrap text-center">
                    <figure>
                      <img src="img/alumni_3.jpg" alt="Free Bootstrap Template by uicookies.com">
                    </figure>
                    <blockquote class="quote">&ldquo;In terms of learning, leadership and content are so upto date and up to the level of contemporary industry practices that student will find it very useful to decision making process, management decision and leadership within the organization.&rdquo; <cite class="author">&mdash; <span>Masliza Mansor</span></cite><br><font size=2>Director of Human Resources at First Solar Malaysia Sdn. Bhd.</font></br></blockquote>
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
              <h2><b>Why Choose GSB</b></h2>
              <p class="lead"></p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="service left-icon probootstrap-animate">
                <div class="icon"><i class="icon-checkmark"></i></div>
                <div class="text">
                  <h3><b>To be a reputable business school for a sustainable tomorrow</b></h3>
 
                </div>  
              </div>
              <div class="service left-icon probootstrap-animate">
                <div class="icon"><i class="icon-checkmark"></i></div>
                <div class="text">
                  <h3> <b>High level representations of students from Industry</b></h3>

                </div>
              </div>
              <div class="service left-icon probootstrap-animate">
                <div class="icon"><i class="icon-checkmark"></i></div>
                <div class="text">
                  <h3><b>Top tier journal publications from faculty members</b></h3>

                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="service left-icon probootstrap-animate">
                <div class="icon"><i class="icon-checkmark"></i></div>
                <div class="text">
                  <h3><b>Nurture business leaders to drive business sustainability</b></h3>
   
                </div>  
              </div>
              
              <div class="service left-icon probootstrap-animate">
                <div class="icon"><i class="icon-checkmark"></i></div>
                <div class="text">
                  <h3><b>Close engagement with industry</b></h3>

                </div>
              </div>
              
              <div class="service left-icon probootstrap-animate">
                <div class="icon"><i class="icon-checkmark"></i></div>
                <div class="text">
                  <h3><b>Industry relevent programmes</b></h3>

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