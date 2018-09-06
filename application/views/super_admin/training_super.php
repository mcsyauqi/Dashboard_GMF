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
										<th style="text-align: center">No. Peg</th>
										<!-- <th style="text-align: center">Nama</th> -->
										<!-- <th style="text-align: center">Unit</th> -->
										<th style="text-align: center">Human Factor</th>
										<th style="text-align: center">CASR</th>
										<th style="text-align: center">FTS</th>
										<th style="text-align: center">SMS</th>
										<th style="text-align: center">EWIS</th>
										<th style="text-align: center">Module 10</th>
										<th style="text-align: center">GMF QS</th>
										<th style="text-align: center">BATK</th>
										<th style="text-align: center">Basic Eng.</th>
										<th style="text-align: center">Cont. Air</th>
										<th style="text-align: center">Type Rating</th>
										<th style="text-align: center">Edit</th>
										<th style="text-align: center">Delete</th>
									</tr>
								</thead>
								<tbody>
									<?php
									foreach ($training as $train) 
									{

										$no_peg = $train->no_peg;
										// $train = $train->no_peg;
										?>
										<tr>
											<td><?php echo $train->no_peg;?></td>
											<td><?php $done_bener = strtotime($train->done_human); 
											echo date("d-M-Y",$done_bener);?></td>
											<td><?php $done_bener2 = strtotime($train->done_cas); 
											echo date("d-M-Y",$done_bener2);?></td>
											<td><?php $done_bener3 = strtotime($train->done_fts); 
											echo date("d-M-Y",$done_bener3);?></td>
											<td><?php $done_bener4 = strtotime($train->done_sms); 
											echo date("d-M-Y",$done_bener4);?></td>
											<td><?php $done_bener5 = strtotime($train->done_ewis); 
											echo date("d-M-Y",$done_bener5);?></td>
											<td><?php $done_bener6 = strtotime($train->done_module); 
											echo date("d-M-Y",$done_bener6);?></td>
											<td><?php $done_bener7 = strtotime($train->done_gqs); 
											echo date("d-M-Y",$done_bener7);?></td>
											<td><?php $done_bener8 = strtotime($train->done_batk); 
											echo date("d-M-Y",$done_bener8);?></td>
											<td><?php $done_bener9 = strtotime($train->done_basic); 
											echo date("d-M-Y",$done_bener9);?></td>
											<td><?php $done_bener10 = strtotime($train->done_cont); 
											echo date("d-M-Y",$done_bener10);?></td>
											<td><?php $done_bener11 = strtotime($train->done_typer1); 
											echo date("d-M-Y",$done_bener11);?></td>
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