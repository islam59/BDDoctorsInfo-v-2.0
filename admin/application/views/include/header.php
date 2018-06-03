<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Dashboard-BDDoctorsINFO</title>
    <link rel="icon" href=""><!--title bar logo-->

    <!-- font-awesome.min.css -->
    <link href="<?php echo base_url(); ?>../assets/css/font-awesome.min.css" rel="stylesheet"> 

 	<!-- Customize Style css. -->
    <link href="<?php echo base_url(); ?>Assests/css/main.css" rel="stylesheet">   
	<!-- Bootstrap -->
    <link href="<?php echo base_url(); ?>Assests/css/bootstrap.min.css" rel="stylesheet">
	<!-- datatables css-->
    <link href="<?php echo base_url(); ?>Assests/css/jquery.dataTables.css" rel="stylesheet">
<style type="text/css">
	.btn{ border-radius: 0px; }
</style>
  </head>
  <body>
	<section class="section-banner">
		<nav class="navbar navbar-default navbar-fixed-top">
		  <div class="container-fluid section-banner-menu">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
			  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle Menu</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			  </button>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			  <ul class="nav navbar-nav">
				<li><a href="<?php echo base_url(); ?>Dashboard" class="left-menu-active" style="color:white;"><i class="fa fa-tachometer" aria-hidden="true"></i> DASHBOARD <span class="sr-only">(current)</span></a></li>

				<li><a href="<?php echo base_url(); ?>Profile/SelfProfile" class="" style="color:white;"><i class="fa fa-user-o" aria-hidden="true"></i> Profile</a></li>

				<!--<li><a href="<?php //echo base_url(); ?>" class="" style="color:white;"><i class="fa fa-cog" aria-hidden="true"></i> Settings</a></li>-->

				<li><a href="<?php echo base_url(); ?>Member/MemberList" class="" style="color:white;"><i class="fa fa-users" aria-hidden="true"></i> </span> User List</b></a></li>
			  </ul>
			  <ul class="nav navbar-nav navbar-right">
				<li>
					<a href="<?php echo base_url(); ?>../" target="_blank" style="color:white;">
						<i class="fa fa-desktop" aria-hidden="true"></i> Site View
					</a>
				</li>

				<li><a href="<?php echo base_url(); ?>User/logout" style="color:white;"><i class="fa fa-power-off" aria-hidden="true"></i> Logout</a></li>
			  </ul>
			</div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>
	</section>