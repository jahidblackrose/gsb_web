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
              <h1 class="mb0">Contact Us</h1>
            </div>
          </div>
        </div>
      </section>

      

      <section class="probootstrap-section probootstrap-section-sm">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="row probootstrap-gutter0">

                <div class="col-md-12 col-md-push-1  probootstrap-animate" id="probootstrap-content">
                  <h2>Get In Touch</h2>
                 
                  <form action="#" method="post" class="probootstrap-form">
                    <div class="form-group">
                      <label for="name"><b>Address : </b>  </label>
                      
                      <span>11800 USM Pulau Pinang Malaysia</span>
                    </div>


                    <div class="form-group">
                      <label for="name"><b>Phone : </b>  </label>
                      
                      <span>0000000</span>
                    </div>


                    <div class="form-group">
                      <label for="name"><b>Chat : </b>  </label>
                      
                      <span>Please use the chat option in the <a href="index.php"> index </a> page</span>
                    </div>


                    <div class="form-group">
                      <label for="name"><b>Location : </b>  </label>
                      
                      <span>11800 USM Pulau Pinang Malaysia</span>
                    </div>
                    
                    <div class="form-group">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7944.785055241813!2d100.30501070632933!3d5.356924632601879!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x388eaa73711d4551!2sGraduate+School+of+Business%2C+Universiti+Sains+Malaysia!5e0!3m2!1sen!2sbd!4v1552057265569" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>


<!-- 
                    <div class="form-group">
                      <label for="email">Email</label>
                      <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="form-group">
                      <label for="subject">Subject</label>
                      <input type="text" class="form-control" id="subject" name="subject">
                    </div>
                    <div class="form-group">
                      <label for="message">Message</label>
                      <textarea cols="30" rows="10" class="form-control" id="message" name="message"></textarea>
                    </div>
                    <div class="form-group">
                      <input type="submit" class="btn btn-primary btn-lg" id="submit" name="submit" value="Send Message">
                    </div> -->
                  </form>
                </div>
              </div>
            </div>
          </div>
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