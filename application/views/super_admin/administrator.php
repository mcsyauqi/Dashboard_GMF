<div class="main-panel">
	<div class="content">
		<div class="container-fluid">
			<h4 class="page-title">Administrator List</h4>
			<div class="row">
				<div class="col-md-12">
					<div class="card">
						<div class="card-header">
							<a href="<?php echo site_url('Administrator/Add_admin');?>">
								<button class="btn btn-info"> Add Admin</button></a>
							</div>
							<div class="container" style="overflow-x: scroll;">
		<table class="table table-striped table-bordered data" >
			<thead>
				<tr>			
					<th>No. Peg</th>
					<th>Nama</th>
					<th>Unit</th>
					<th>Username</th>
					<th>Password</th>
					<th></th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				<tr>				
					<td>Andi</td>
					<td>Jakarta</td>
					<td>Web Designer</td>
					<td>21</td>
					<td>Aktif</td>
					<td><a href="edit_admin.html"><i class="la la-edit" style="font-size:20px"></i></a></td>
					<td><a id="hasil"><i onclick="konfirmasiDulu()" class="la la-remove" style="font-size: 20px"></i></a></td>
				<tr>				
					<td>Malas Ngoding</td>
					<td>Bandung</td>
					<td>Web Developer</td>
					<td>26</td>
					<td>Aktif</td>
					<td><a href="edit_admin.html"><i class="la la-edit" style="font-size:20px"></i></a></td>
					<td><a id="hasil"><i onclick="konfirmasiDulu()" class="la la-remove" style="font-size: 20px"></i></a></td>
				</tr>
				<tr>				
					<td>Malas Ngoding</td>
					<td>Bandung</td>
					<td>Web Developer</td>
					<td>26</td>
					<td>Aktif</td>
					<td><a href="edit_admin.html"><i class="la la-edit" style="font-size:20px"></i></a></td>
					<td><a id="hasil"><i onclick="konfirmasiDulu()" class="la la-remove" style="font-size: 20px"></i></a></td>
				</tr>
				<tr>				
					<td>Andi</td>
					<td>Jakarta</td>
					<td>Web Designer</td>
					<td>21</td>
					<td>Aktif</td>
					<td><a href="edit_admin.html"><i class="la la-edit" style="font-size:20px"></i></a></td>
					<td><a id="hasil"><i onclick="konfirmasiDulu()" class="la la-remove" style="font-size: 20px"></i></a></td>
				</tr>
				<tr>				
					<td>Andi</td>
					<td>Jakarta</td>
					<td>Web Designer</td>
					<td>21</td>
					<td>Aktif</td>
					<td><a href="edit_admin.html"><i class="la la-edit" style="font-size:20px"></i></a></td>
					<td><a id="hasil"><i onclick="konfirmasiDulu()" class="la la-remove" style="font-size: 20px"></i></a></td>
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