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
					<form class="navbar-left navbar-form nav-search mr-md-3" action="" style="padding-top: 1%;">
						<div class="input-group">
							<input type="text" placeholder="Search ..." class="form-control">
							<div class="input-group-append">
								<span class="input-group-text">
									<i class="la la-search search-icon"></i>
								</span>
							</div>
						</div>
					</form>					
					<a href="<?php echo base_url();?>Login" class="btn btn-info" style="color: #FFFFFF; margin-top: 5px">Login
					</a>
				</div>
			</nav>
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


</body>

<script src="assets/js/core/jquery.3.2.1.min.js"></script>
<script src="assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
<script src="assets/js/core/popper.min.js"></script>
<script src="assets/js/core/bootstrap.min.js"></script>
<script src="assets/js/plugin/chartist/chartist.min.js"></script>
<script src="assets/js/plugin/chartist/plugin/chartist-plugin-tooltip.min.js"></script>
<script src="assets/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js"></script>
<script src="assets/js/plugin/jquery-mapael/jquery.mapael.min.js"></script>
<script src="assets/js/plugin/jquery-mapael/maps/world_countries.min.js"></script>
<script src="assets/js/plugin/chart-circle/circles.min.js"></script>
<script src="assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
<script src="assets/js/ready.min.js"></script>
<script src="assets/js/demo.js"></script>
<!-- untuk notifikasi 
	<script src="assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script> 
-->
</html>