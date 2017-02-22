<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="description" content="Reloga is a full service technology solutions which provide and build website development that caters both local and international">
    <meta name="keywords" content="Website,Development,Build,Business,Provide,Web Development,Mobile Development,CMS,ecommerce,Mobile Design,Web Design,Domain,Hosting,Reloga Technology Solutions,Technologies,Solutions,Relogatech,Reloga">
    <meta name="author" content="Reloga Technology Solutions">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Reloga Technology Solutions - Website Development</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="<?php echo base_url(); ?>assets/images/fav.png"/>
    <!-- Font Awesome -->
    <link href="<?php echo base_url(); ?>assets/css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet">    
    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/slick.css"/> 
    <!-- Fancybox slider -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery.fancybox.css" type="text/css" media="screen" /> 
    <!-- Animate css -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/animate.css"/>  
    <!-- Bootstrap progressbar  -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap-progressbar-3.3.4.css"/> 
     <!-- Theme color -->
    <link id="switcher" href="<?php echo base_url(); ?>assets/css/theme-color/default-theme.css" rel="stylesheet">

    <!-- Main Style -->
    <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">

    <!-- Fonts -->

    <!-- Open Sans for body font -->
    <link href='<?php echo base_url(); ?>assets/fonts/fontOpen+Sans.css' rel='stylesheet' type='text/css'>
    <!-- Lato for Title -->
    <link href='<?php echo base_url(); ?>assets/fonts/fontLato.css' rel='stylesheet' type='text/css'>    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-92264664-1', 'auto');
    ga('send', 'pageview');

  </script>
  </head>
  <body>
      
      <!-- BEGAIN PRELOADER -->
      <div id="preloader">
        <div id="status">&nbsp;</div>
    </div>
    <!-- END PRELOADER -->

    <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
    <!-- END SCROLL TOP BUTTON -->

    <!-- SCROLL TOP BUTTON -->
    <a class="quote quoteStick modal-form" data-target="#request-quote" data-toggle="modal" href="#">Request A Quote</a>
    <!-- END SCROLL TOP BUTTON -->

    <!-- Start header -->
    <header id="header">
        <!-- header top search -->
        <div class="header-top">
          <div class="container">
            <form action="">
              <div id="search">
                  <input type="text" placeholder="Type your search keyword here and hit Enter..." name="s" id="m_search" style="display: inline-block;">
                  <button type="submit">
                    <i class="fa fa-search"></i>
                </button>
            </div>
        </form>
    </div>
</div>
<!-- header bottom -->
<div class="header-bottom">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-6 col-xs-6 h_contact">
        <div class="header-contact">
          <ul>
            <li>
              <div class="mail">
                <i class="fa fa-envelope"></i>
                support@relogatech.com
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
          </ul>
        </div>
      </div>
      <div class="col-md-6 col-sm-6 col-xs-6">
        <div class="header-login">
            <a class="quote modal-form" data-target="#request-quote" data-toggle="modal" href="#">Request A Quote</a>
        </div> 
      </div>
    </div>
  </div>
</div>
</header>
<!-- End header -->

<!-- Start login modal window -->
<div aria-hidden="false" role="dialog" tabindex="-1" id="request-quote" class="modal leread-modal fade in">
    <div class="modal-dialog">
      <div id="login-content" class="modal-content">
        <div class="modal-header">
          <button aria-label="Close" data-dismiss="modal" class="close" type="button"><span aria-hidden="true">×</span></button>
          <h4 class="modal-title"><i class="fa fa-question"></i>Request a Quote</h4>
      </div>

      <div class="modal-body">
        <p>Tell us about your business goals and we will contact you</p>
        <p><span class="what-you-get">What you get</span></p>
        <ul id="get-list">
          <li>An <b>email</b> or <b>phone call</b> or <b>skype call</b> message from us.</li>
          <li>we will share the <b>proposal</b> with the details of estimated project and its cost.
              <li>An <b>in-person</b> meeting.</li>
          </ul>
          <br>
          <form id="send_qoute" method="POST">
            <div class="form-group">
              <input name="fullname" type="text" placeholder="Fullname" class="form-control" required="required">
          </div>
          <div class="form-group">
              <input name="email" type="email" placeholder="Email" class="form-control" required="required">
          </div>
          <div class="form-group">
              <input name="contact" type="text" placeholder="Contact Number" class="form-control">
          </div>
          <div class="form-group">
              <input name="skype_id" type="text" placeholder="Skype ID" class="form-control">
          </div>
          <div class="form-group">
              <textarea name="content" placeholder="Project Brief" class="form-control quote-project-details"></textarea>
          </div>          
          <input type="hidden" name="send_from" value="modal">
          <div class="quotebox">
              <button class="btn quote-btn" type="submit">Submit</button>
          </div>                    
      </form>
  </div>
  <div class="modal-footer footer-box">
      <!-- <label><span>We will contact you within two 2 days.</span></label> -->            
  </div>
</div>
</div>
</div>
<!-- End login modal window -->

<!-- Success modal -->
<!-- <div aria-hidden="false" role="dialog" tabindex="-1" id="request-quote" class="sucess-modal modal leread-modal fade in">
    <div class="modal-dialog modal-sm"> -->
      <!-- Start login section -->
      <!-- <div id="login-content" class="modal-content">
        <div class="modal-header">
          <button aria-label="Close" data-dismiss="modal" class="close" type="button"><span aria-hidden="true">×</span></button>
          <h4 class="modal-title"><i class="fa fa-check"></i>Check icon here</h4>
          <span><i></i></span>
      </div>
      <div class="modal-body">
          <p>Your <b>message</b> has beed sent sucessfully.</p>
      </div>
      <div class="modal-footer footer-box">
      <button class="btn btn-default" type="button" data-dismiss="modal">OK</button>
      </div>
      </div>
    </div>
</div> -->
<!-- End Sucess modal -->

<!-- BEGIN MENU -->
<section id="menu-area">      
    <nav class="head-nav navbar navbar-default" role="navigation">  
      <div class="container">
        <div class="navbar-header">
          <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <!-- LOGO -->              
        <!-- TEXT BASED LOGO -->
        <!-- <a class="navbar-brand" href="index.php">Mockup</a> -->              
        <!-- IMG BASED LOGO  -->
        <a class="navbar-brand" href="<?php echo base_url(); ?> "><img alt="Reloga Technology Solutions Logo" class="img-responsive reloga-loga" src="<?php echo base_url(); ?>assets/images/relogav3.png" alt="logo"></a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
      <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
        <li class="<?=($this->uri->segment(1, 0) == null)?'active':'';?>"><a href="<?= base_url(); ?>"> Home</a></li>
        <li id="link" class="<?=($this->uri->segment(1, 0) == 'about')?'active':'';?>"><a href="<?= base_url(); ?>about"> About Us</a></li>
        <li id="link" class="<?=($this->uri->segment(1, 0) == 'services')?'active':'';?>"><a href="<?= base_url(); ?>services"> Services</a></li>
        <li id="link" class="<?=($this->uri->segment(1, 0) == 'portfolio')?'active':'';?>"><a href="<?= base_url(); ?>portfolio"> Our Work</a></li>
        <!-- <li><a data="" >Home</a></li>
        <li><a data="about">About Us</a></li>
        <li><a data="services">Services</a></li>
        <li><a data="porfolio" >Portfolio</a></li> -->
            <!-- <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog <span class="fa fa-angle-down"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="blog-archive.php">Blog Archive</a></li>                
                <li><a href="blog-single-with-left-sidebar.php">Blog Single with Left Sidebar</a></li>
                <li><a href="blog-single-with-right-sidebar.php">Blog Single with Right Sidebar</a></li>
                <li><a href="blog-single-with-out-sidebar.php">Blog Single with out Sidebar</a></li>           
              </ul>
          </li> -->
          <!-- <li><a href="404.php">404 Page</a></li>     -->           
          <li id="link" class="<?=($this->uri->segment(1, 0) == 'contact')?'active':'';?>"><a href="<?= base_url(); ?>contact ">Contact</a></li>
      </ul>                     
  </div><!--/.nav-collapse -->
  <a href="#" id="search-icon">
      <i class="fa fa-search">            
      </i>
  </a>
</div>     
</nav>
</section>
<!-- END MENU --> 
<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>  
<script>
  $(function(){
    /*Send quote header*/
    $("#send_qoute").on("submit",function(){
      var data = $(this).serialize();
      var url = '<?= base_url('index/requests') ?>';
      $.ajax({
        type:"POST", url:url, data:data,
        success: function(data){
          console.log(data);
        }
      })
    });
  });
</script>
