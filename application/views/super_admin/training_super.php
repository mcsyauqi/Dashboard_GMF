<div class="main-panel">
				<div class="content">
					<div class="container-fluid">
						<h4 class="page-title">Training Compliance</h4>
						<div class="row">
							<div class="col-md-12" style="max-width: 100%; width: auto;">
								<div class="card">
									<div class="card-header" style="padding: 20px 15px; text-align: left;">
										
									</div>
									<div class="container" style="overflow-x: scroll;">
		<table class="table table-striped table-bordered data" >
			<thead>
				<tr>			
					<th>No. Peg</th>
					<th>Nama</th>
					<th>Unit</th>
					<th>Human Factor</th>
					<th>CASR</th>
					<th>FTS</th>
					<th>SMS</th>
					<th>EWIS</th>
					<th>Module 10</th>
					<th>GMF QS</th>
					<th>BATK</th>
					<th>Basic Eng.</th>
					<th>Cont. Air</th>
					<th>Type Rating</th>
					<th></th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				<tr>				
					<td>00000</td>
					<td>Andi</td>
					<td>TEC</td>
					<td>Aktif</td>
					<td>Non-Aktif</td>
					<td>Aktif</td>
					<td>Non-Aktif</td>
					<td>Aktif</td>
					<td>Aktif</td>
					<td>Non-Aktif</td>
					<td>Aktif</td>
					<td>Non-Aktif</td>
					<td>Aktif</td>
					<td>Aktif</td>
					<td><a href="edit_admin.html"><i class="la la-edit" style="font-size:20px"></i></a></td>
					<td><a id="hasil"><i onclick="konfirmasiDulu()" class="la la-remove" style="font-size: 20px"></i></a></td>
				<tr>				
					<td>111111</td>
					<td>Purnama</td>
					<td>TEL</td>
					<td>Aktif</td>
					<td>Non-Aktif</td>
					<td>Aktif</td>
					<td>Non-Aktif</td>
					<td>Aktif</td>
					<td>Aktif</td>
					<td>Non-Aktif</td>
					<td>Aktif</td>
					<td>Aktif</td>
					<td>Non-Aktif</td>
					<td>Non-Aktif</td>
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