 <!-- Start subscribe us -->
  <section id="subscribe"">
    <div class="subscribe-overlay">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="subscribe-area">
              <div class="work_us">
                <h2 class="wow fadeInUp">Work With Us</h2>
                <h3 class="wow fadeInUp work_us1">We seek to create long-term relationships built on results.</h3>
                <p class="wow fadeInUp">Tell us about your business goals and we will contact you</p>
              </div>

              <form id="send_qoute_bottom" method="POST" class="subscrib-form wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">
              <div class="col-md-6">
                <div class="form-group">
                <input name="fullname" type="text" placeholder="Fullname" class="form-control" required="required">
                </div>
                <div class="form-group">
                  <input name="email" type="email" placeholder="Email" class="form-control" required="required">
                </div>
                <div class="form-group">
                  <input name="contact" type="text" placeholder="Contact Number" class="form-control">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <input name="skype_id" type="text" placeholder="Skype ID" class="form-control">
                </div>
                <div class="form-group">
                  <textarea name="content" placeholder="Project Brief" class="form-control quote-project-details"></textarea>
                </div>
                <input type="hidden" name="send_from" value="footer">
              </div>
              
               <div class="quotebox">
                <button class="btn quote-btn" type="submit">Submit</button>
              </div>                    
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End subscribe us -->

  <!-- Start footer -->
  <footer id="footer">
    <div class="container">
      <div class="row">
        <a class="footer-logo" href="<?php echo base_url(); ?> "><img class="img-responsive reloga-loga" src="<?php echo base_url(); ?>assets/images/relogav3.png" alt="logo"></a>
      </div>
      <div class="row">
        <div class="footer-contact">
          <ul>
            <li>
              <div class="mail">
                <a href="mailto:support@relogatech.com">
                  <i class="fa fa-envelope"></i>
                  support@relogatech.com
                </a>
            </div>
            </li>
            <li>
              <div class="phone">
                <i class="fa fa-phone"></i>
                +639753747656
            </div>
            </li>
            <li>
              <div class="mail">
                <i class="fa fa-skype"></i>
                relogatech
            </div>
            </li>
            <li>
              <div class="fb">
                <a href="https://www.facebook.com/relogatech/">
                  <i class="fa fa-facebook"></i>
                  relogatech
                </a>
              </div>
            </li>
            <li>
              <div class="twitter">
                <a href="https://twitter.com/relogatech">
                  <i class="fa fa-twitter"></i>
                  relogatech
                </a>
              </div>
            </li>
          </ul>
        </div><!-- .footer-contact -->
      </div><!-- .row -->
    </div><!-- .container -->
  </footer>
  <!-- End footer -->

  <!-- jQuery library -->
  <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>    
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <!-- Bootstrap -->
  <script src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script>
  <!-- Slick Slider -->
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/slick.js"></script>    
  <!-- mixit slider -->
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.mixitup.js"></script>
  <!-- Add fancyBox -->        
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.fancybox.pack.js"></script>
 <!-- counter -->
  <script src="<?php echo base_url(); ?>assets/js/waypoints.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/jquery.counterup.js"></script>
  <!-- Wow animation -->
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/wow.js"></script> 
  <!-- progress bar   -->
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap-progressbar.js"></script>    
 
  <!-- Custom js -->
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/custom.js"></script>

  <script type="text/javascript">
      $(document).on('click','#porfolio',function(){
        window.location.href = '<?php echo base_url()."portfolio"; ?>';
      });
  </script>

  <script>

    
    $(function(){
      /***Send quote by Lou*/
      $("#send_qoute_bottom").on("submit",function(){
         e.preventDefault();
        var data = $(this).serialize();
        var url = '<?= base_url('index/requests') ?>';
        $.ajax({
          type:"POST", url:url, data:data,
          success: function(data){
            console.log('send');
          }
        });
      });

      

    });
  </script>
  
  </body>
</html>
