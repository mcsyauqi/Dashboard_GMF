<div class="main-panel">
	<div class="content">
		<div class="container-fluid">
			<h4 class="page-title">Administrator List</h4>
			<form class="navbar-left navbar-form nav-search col-md-4" style="margin-bottom: 15px;margin-left: -10px" action="">
				<div class="input-group">
					<input type="text" placeholder="Search ..." class="form-control" style="color: #ffffff">
					<div class="input-group-append">
						<span class="input-group-text">
							<i class="la la-search search-icon"></i>
						</span>
					</div>
				</div>
			</form>
			<div class="row">
				<div class="col-md-12">
					<div class="card">
						<div class="card-header">
							<div class="card-title">List of Administrator</div>
							<a href="<?php echo site_url('Administrator/Add_admin');?>">
								<button class="btn btn-info"> Add Admin</button></a>
							</div>
							<div class="card-body">
								<table class="table table-striped mt-3">
									<thead>
										<tr>
											<th scope="col">ID</th>
											<th scope="col">Nama</th>
											<th scope="col">Unit</th>
											<th scope="col">Username</th>
											<th scope="col">Password</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>1</td>
											<td>Mark</td>
											<td>Otto</td>
											<td>@mdo</td>
											<td>Business</td>
											<td><a href="<?php echo site_url('Administrator/Edit_admin');?>"><button class="btn btn-primary" style="margin-left: -50px">Edit</button></a></td>
											<td><a id="hasil"><button onclick="konfirmasiDulu()" class="btn btn-danger" style="margin-left: -50px">Delete</button></a></td>
											<td><a href="profile.html"><button class="btn btn-default" style="margin-left: -50px">Profile</button></a></td>

										</tr>
										<tr>
											<td>2</td>
											<td>Jacob</td>
											<td>Thornton</td>
											<td>@fat</td>
										</tr>
										<tr>
											<td>3</td>
											<td colspan="2">Larry the Bird</td>
											<td>@twitter</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script>
		function konfirmasiDulu(){
			var konfirmasi = confirm("Silakan Klik Tombol Salah Satu Tombol");
			var text = "";

			if(konfirmasi === true) {
				text = "Kamu klik Tombol OK";
			}else{
				text = "Kamu klik Tombol Cancel";
			}

			document.getElementById("hasil").innerHTML = text;
		}
	</script>
	</html>