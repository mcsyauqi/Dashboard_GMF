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
							<a href="<?php echo site_url('Administrator/Add_admin');?>">
								<button class="btn btn-info"> Add Admin</button></a>
							</div>
							<div class="container" style="overflow-x: scroll;">
								<table class="table table-striped table-bordered data" >
									<thead>
										<tr>			
											<th style="text-align: center">No. Peg</th>
											<!-- <th style="text-align: center">Nama</th>
											<th style="text-align: center">Bidang</th>
											<th style="text-align: center">Unit</th> -->
											<th style="text-align: center">username</th>
											<th style="text-align: center">Password</th>
											<th style="text-align: center">Edit</th>
											<th style="text-align: center">Delete</th>
										</tr>
									</thead>
									<tbody>
										<?php
										foreach ($user as $us) 
										{

											$no_peg = $us->no_peg;
											?>
											<tr>
												<td><?php echo $us->no_peg;?></td>
											<!-- <td><?php echo $peg->nama_peg;?></td>
											<td><?php echo $peg->bidang;?></td>
											<td><?php echo $peg->unit;?></td> -->
											<td><?php echo $us->username;?></td>
											<td><?php echo $us->password;?></td>
											<td><a href="edit_employee.html"><i class="la la-edit" style="font-size:20px"></i></a></td>
											<td><a id="hasil"><i onclick="konfirmasiDulu()" class="la la-remove" style="font-size: 20px"></i></a></td>
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