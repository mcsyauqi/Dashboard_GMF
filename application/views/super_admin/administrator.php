<?php 
$page_now="administrator";
include 'navbar.php';
?>

<div class="main-panel">
	<div class="content">
		<div class="container-fluid">
			<h4 class="page-title">Administrator List</h4>
			<div class="row">
				<div class="col-md-12">
					<div class="card">
						<div class="card-header">
							<button class="btn btn-info" data-toggle="modal" data-target="#myModal"> Add Admin</button>
							<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
											<h4 class="modal-title" id="myModalLabel" style="position: absolute;">ADD ADMIN</h4>    
										</div>
										<div class="modal-body">
											<form action="<?php echo site_url('Administrator/input_admin')?>" method="post">
												<div class="form-group">
													<label for="largeInput" style="margin-right: 95%">Nomor</label>
													<input type="text" class="form-control form-control" id="defaultInput" placeholder="Masukkan nomor pegawai" name="no_peg">
												</div>
												<div class="form-group">
													<label for="largeInput" style="margin-right: 95%">Tipe</label>
													<select class="form-control form-control" id="defaultSelect" name="tipe">
														<option>--Pilih Tipe--</option>
														<option value="super_admin">Super Admin</option>
														<option value="admin">Admin</option>
													</select>
												</div>
												<div class="form-group">
													<label for="largeInput" style="margin-right: 95%">Username</label>
													<input type="text" class="form-control form-control" id="defaultInput" placeholder="Masukkan Username" name="username">
												</div>
												<div class="form-group">
													<label for="largeInput" style="margin-right: 95%">Password</label>
													<input type="text" class="form-control form-control" id="defaultInput" placeholder="Masukkan Password" name="password">
												</div>
												<div class="card-action">
													<button class="btn btn-success">Add</button>
													<a href="administrator.html"><button class="btn btn-danger"  style="margin-right:10px">Cancel</button></a>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
							<div class="container" style="overflow-x: scroll;">
								<table class="table table-striped table-bordered data" >
									<thead>
										<tr>			
											<th style="text-align: center">No. Peg</th>
											<th style="text-align: center">Nama</th>
											<th style="text-align: center">username</th>
											<th style="text-align: center">Password</th>
											<th style="text-align: center">Edit</th>
											<th style="text-align: center">Delete</th>
										</tr>
									</thead>
									<tbody>
										<?php
										foreach ($user->result() as $us) 
										{
											?>
											<tr>
												<td><?php echo $us->no_peg;?></td>
												<td><?php echo $us->nama_peg;?></td>
												<td><?php echo $us->username;?></td>
												<td><?php echo $us->password;?></td>
												<td><i class="la la-edit" style="font-size:20px" data-toggle="modal" data-target="#myModals"></i>
													<div class="modal fade" id="myModals" tabindex="-1" role="dialog" aria-labelledby="myModalsLabel">
														<div class="modal-dialog" role="document">
															<div class="modal-content">
																<div class="modal-header">
																	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
																	<h4 class="modal-title" id="myModalsLabel" style="position: absolute;">EDIT DATA</h4>    
																</div>
																<div class="modal-body">
																	<form action="?" method="post">
																		<div class="form-group">
																			<label for="largeInput" style="margin-right: 95%">ID</label>
																			<input type="text" class="form-control form-control" id="defaultInput" placeholder="Masukkan ID">
																		</div>
																		<div class="form-group">
																			<label for="largeInput" style="margin-right: 95%">Nama</label>
																			<input type="text" class="form-control form-control" id="defaultInput" placeholder="Masukkan Nama">
																		</div>
																		<div class="form-group">
																			<label for="defaultSelect" style="margin-right: 95%">Unit</label>
																			<select class="form-control form-control" id="defaultSelect">
																				<option>--Pilih Unit--</option>
																				<option>1</option>
																				<option>2</option>
																				<option>3</option>
																				<option>4</option>
																				<option>5</option>
																			</select>
																		</div>
																		<div class="form-group">
																			<label for="largeInput" style="margin-right: 95%">Username</label>
																			<input type="text" class="form-control form-control" id="defaultInput" placeholder="Masukkan Username">
																		</div>
																		<div class="form-group">
																			<label for="largeInput" style="margin-right: 95%">Password</label>
																			<input type="text" class="form-control form-control" id="defaultInput" placeholder="Masukkan Password">
																		</div>
																	</div>
																	<div class="card-action">
																		<button class="btn btn-success">Add</button>
																		<a href="administrator.html"><button class="btn btn-danger"  style="margin-right:10px">Cancel</button></a>
																	</div>
																</form>
															</div></td>
															<td><i id="hasil" onclick="konfirmasiDulu()" class="la la-remove" style="font-size: 20px"></i></td>
														</tr>
													<?php }
													?>
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