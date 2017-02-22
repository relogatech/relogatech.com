<!DOCTYPE html>
<html lang="en">
<head>
	<title>RELOGA - {title}</title>

	<!-- BEGIN META -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="keywords" content="your,keywords">
	<meta name="description" content="Short explanation about this website">
	<!-- END META -->

	<!-- BEGIN STYLESHEETS -->
	<link href='http://fonts.googleapis.com/css?family=Roboto:300italic,400italic,300,400,500,700,900' rel='stylesheet' type='text/css'/>
	<link type="text/css" rel="stylesheet" href="{base_url}assets/backend/css/theme-default/bootstrap.css?1422792965" />
	<link type="text/css" rel="stylesheet" href="{base_url}assets/backend/css/theme-default/materialadmin.css?1425466319" />
	<link type="text/css" rel="stylesheet" href="{base_url}assets/backend/css/theme-default/font-awesome.min.css?1422529194" />
	<link type="text/css" rel="stylesheet" href="{base_url}assets/backend/css/theme-default/material-design-iconic-font.min.css?1421434286" />

	<!-- CUSTOMIZES CSS -->	
	<link type="text/css" rel="stylesheet" href="{base_url}assets/backend/css/relogatech.custom.css" />
	<!-- END STYLESHEETS -->

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script type="text/javascript" src="{base_url}assets/backend/js/libs/utils/html5shiv.js?1403934957"></script>
		<script type="text/javascript" src="{base_url}assets/backend/js/libs/utils/respond.min.js?1403934956"></script>
		<![endif]-->
	</head>
	<body class="menubar-hoverable header-fixed ">

		<!-- BEGIN LOGIN SECTION -->
		<section class="section-account">
			<div class="img-backdrop" style="background-image: url('{base_url}assets/backend/img/admin_banner_v2.png'); height: 230px;"></div>
			<div class="spacer" style="height: 250px;"></div>
			<div class="card contain-sm style-transparent">
				<div class="card-body">
					<div class="row">
						<div class="col-md-12">
						<?php if (@$_GET['login'] == 'false') { ?>
							<div class="alert alert-danger echoer" role="alert">
								<strong>Error!</strong> Invalid to login. Please try again.
							</div>
						<?php } ?>
							<span class="text-lg text-bold text-primary">ADMINISTRATOR LOGIN</span>
							<br/>
							<form class="form floating-label" action="{base_url}administrator/index/check_login" accept-charset="utf-8" method="post">
								<div class="form-group">
									<input type="text" class="form-control" id="username" name="username" autofocus="autofocus">
									<label for="username">Username</label>
								</div>
								<div class="form-group">
									<input type="password" class="form-control" id="password" name="password">
									<label for="password">Password</label>
									<p class="help-block"><a href="#">Forgotten?</a></p>
								</div>
								<br/>
								<div class="row">
									<div class="col-xs-6 text-left">
										<div class="checkbox checkbox-inline checkbox-styled">
											<label>
												<input type="checkbox"> <span>Remember me</span>
											</label>
										</div>
									</div><!--end .col -->
									<div class="col-xs-6 text-right">
										<button class="btn btn-primary btn-raised" type="submit">Login</button>
									</div><!--end .col -->
								</div><!--end .row -->
							</form>
						</div><!--end .col -->
					</div><!--end .row -->
				</div><!--end .card-body -->
			</div><!--end .card -->
		</section>
		<!-- END LOGIN SECTION -->

	<!-- BEGIN JAVASCRIPT -->
	<script src="{base_url}assets/backend/js/libs/jquery/jquery-1.11.2.min.js"></script>
	<script src="{base_url}assets/backend/js/libs/jquery/jquery-migrate-1.2.1.min.js"></script>
	<script src="{base_url}assets/backend/js/libs/bootstrap/bootstrap.min.js"></script>
	<!-- END JAVASCRIPT -->
	<script>
		$(function(){
			//setTimeout(function(){ $(".alert.alert-danger.echoer").fadeOut(); },2000);
		});
	</script>

</body>
</html>
