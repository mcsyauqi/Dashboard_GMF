<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Dashboard Training</title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/ready.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/demo.css">
	<script src="<?php echo base_url();?>assets/js/code/highcharts.js"></script>
	<script src="<?php echo base_url();?>assets/js/code/modules/data.js"></script>
	<script src="<?php echo base_url();?>assets/js/code/modules/drilldown.js"></script>
</head>
<body>
	<!-- Main Header -->
	<div class="wrapper">
		<div class="main-header">
			<div class="logo-header">
				<img src="<?php echo base_url();?>assets/img/logo.png" width="90%" title="logo GMF">
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<button class="topbar-toggler more"><i class="la la-ellipsis-v"></i></button>
			</div>
			<nav class="navbar navbar-header navbar-expand-lg">
				<div class="container-fluid">
					<form class="navbar-left navbar-form nav-search mr-md-3" action="" >
						<div class="input-group">
							<input type="text" placeholder="Search ..." class="form-control">
							<div class="input-group-append">
								<span class="input-group-text">
									<i class="la la-search search-icon"></i>
								</span>
							</div>
						</div>
					</form>					
					<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">						
						<li class="nav-item dropdown">
							<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="true"> <img src="<?php echo base_url();?>assets/img/profile2.jpg" alt="user-img" width="36" class="img-circle">
								<span>Syauqi</span>
							</a>
							<ul class="dropdown-menu dropdown-user">
								<li>
									<div class="user-box">
										<div class="u-img"><img src="<?php echo base_url();?>assets/img/profile2.jpg" alt="user"></div>
										<div class="u-text">
											<h4><strong>Syauqi</strong> 
												<h4><span class="user-level">Admin</span></h4>
											</h4>
										</div>
									</div>
								</li>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="#"><i class="ti-user"></i> My Profile</a>
								<a class="dropdown-item" href="#"><i class="ti-settings"></i> Account Setting</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="<?php echo base_url('Logout')?>"><i class="fa fa-power-off"></i> Logout</a>
							</ul>
							<!-- /.dropdown-user -->
						</li>
					</ul>
				</div>
			</nav>
		</div>
		<div class="sidebar">
			<div class="scrollbar-inner sidebar-wrapper">
				<div class="user">
					<div class="photo">
						<img src="<?php echo base_url();?>assets/img/profile2.jpg">
					</div>
					<div class="info">
						<a class="" data-toggle="collapse" href="#collapseExample" aria-expanded="true">
							<span>
								Syauqi
								<span class="user-level">Admin</span>
							</span>
						</a>
						<div class="clearfix"></div>

						<div class="collapse in" id="collapseExample" aria-expanded="true" style="">
						</div>
					</div>
				</div>
				<ul class="nav">
					<li class="nav-item active">
						<a href="<?php echo site_url('Dashboard_admin');?>">
							<i class="la la-dashboard"></i>
							<p>Dashboard</p>
						</a>
					</li>
					<li class="nav-item">
						<a href="<?php echo site_url('Training/training_admin');?>">
							<i class="la la-certificate"></i>
							<p>Training Compliance</p>
						</a>
					</li>
					<li class="nav-item">
						<a href="<?php echo site_url('Pegawai/pegawai_admin');?>">
							<i class="la la-group"></i>
							<p>Employees</p>
						</a>
					</li>
				</ul>
			</div>
		</div>

		<?php echo $contents;?>

		<footer class="footer">
			<div class="container-fluid">
				<nav class="pull-left">
					<ul class="nav">
						<li class="nav-item">
							<a class="nav-link" href="#">
								Website
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">
								Help
							</a>
						</li>
					</ul>
				</nav>
				<div class="copyright ml-auto">
					<strong>Copyright &copy; Engineering Human Capital - GMF AeroAsia | <a href="mailto: ahmadthariqsyauqi@gmail.com"> Developed by Syauqi </a>
						<a href="mailto: nurunnafis23@gmail.com">& Nafis</a>.</strong> All rights
					</div>				
				</div>
			</div>
		</footer>

	</div>
</div>

</body>
<script src="<?php echo base_url();?>assets/js/core/jquery.3.2.1.min.js"></script>
<script src="<?php echo base_url();?>assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
<script src="<?php echo base_url();?>assets/js/core/popper.min.js"></script>
<script src="<?php echo base_url();?>assets/js/core/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>assets/js/plugin/chartist/chartist.min.js"></script>
<script src="<?php echo base_url();?>assets/js/plugin/chartist/plugin/chartist-plugin-tooltip.min.js"></script>
<script src="<?php echo base_url();?>assets/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js"></script>
<script src="<?php echo base_url();?>assets/js/plugin/jquery-mapael/jquery.mapael.min.js"></script>
<script src="<?php echo base_url();?>assets/js/plugin/jquery-mapael/maps/world_countries.min.js"></script>
<script src="<?php echo base_url();?>assets/js/plugin/chart-circle/circles.min.js"></script>
<script src="<?php echo base_url();?>assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
<script src="<?php echo base_url();?>assets/js/ready.min.js"></script>
<script src="<?php echo base_url();?>assets/js/demo.js"></script>
<!-- untuk notifikasi 
	<script src="assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script> 
-->
</html>