
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
							<table class="table table-striped table-bordered data" style="width: 150%" >
								<thead>
									<tr>			
										<th style="text-align: center; width: 6%">No. Peg</th>
										<!-- <th style="text-align: center; width: 15%">Nama</th> -->
										<!-- <th style="text-align: center; width: 3.5%">Unit</th> -->
										<th style="text-align: center; width: 5%">Human Factor</th>
										<th style="text-align: center; width: 5%">CASR</th>
										<th style="text-align: center; width: 5%">FTS</th>
										<th style="text-align: center; width: 5%">SMS</th>
										<th style="text-align: center; width: 5%">EWIS</th>
										<th style="text-align: center; width: 5%">Module 10</th>
										<th style="text-align: center; width: 5%">GMF QS</th>
										<th style="text-align: center; width: 5%">BATK</th>
										<th style="text-align: center; width: 5%">Basic Eng.</th>
										<th style="text-align: center; width: 5%">Cont. Air</th>
										<th style="text-align: center; width: 5%">Type Rating</th>
										<th style="text-align: center; width: 15%">Progress Training</th>
										
									</tr>
								</thead>
								<tbody>
									<?php
									foreach ($training -> result() as $train) 
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
											<td><p class="demo">
													<div class="progress">
														<div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
													</div></p></td>
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