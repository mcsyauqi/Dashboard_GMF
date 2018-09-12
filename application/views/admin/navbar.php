		<div class="sidebar">
			<div class="scrollbar-inner sidebar-wrapper">
				<div class="user">
					<div class="info">
						<a class="" data-toggle="collapse" href="#collapseExample" aria-expanded="true" style="text-align: center;">
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
					<li class="nav-item <?php if($page_now=='dashboard_admin') echo 'active';?>" >
						<a href="<?php echo site_url('Dashboard_admin');?>">
							<i class="la la-dashboard" onclick="myFunction()"></i>
							<p>Dashboard</p>
						</a>
					</li>
					<li class="nav-item <?php if($page_now=='training_admin') echo 'active';?>">
						<a href="<?php echo site_url('Training/training_admin');?>">
							<i class="la la-certificate"></i>
							<p>Training Compliance</p>
						</a>
					</li>
					<li class="nav-item <?php if($page_now=='pegawai_admin') echo 'active';?>">
						<a href="<?php echo site_url('Pegawai/pegawai_admin');?>" onclick="">
							<i class="la la-group"></i>
							<p>Employees</p>
						</a>
					</li>
				</ul>
			</div>
		</div>