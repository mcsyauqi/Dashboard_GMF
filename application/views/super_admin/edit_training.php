<?php 
$page_now="training_super";
include 'navbar.php';

?>

<div class="main-panel">
	<div class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="card">
						<div class="card-header">
							<div class="card-title">Edit Training</div>
						</div>
						<?php
						foreach ($training -> result() as $train) 
						{
							$no_peg = $train->no_peg;

						}

						?>
						<form method="post" action="<?php echo site_url('Training/update_training')?>">
						<div class="card-body">
							<div class="form-group">
								<label class="control-label col-sm-2" for="form_employee"><h7><strong>No. Pegawai</strong></h7></label>
								<label><input type="text" class="form-control form-control" id="defaultInput" value="<?php echo $train->no_peg;?>" name="no_peg"></label>
							</div>
							<div class="form-group">
								<label class="control-label col-sm-2" for="form_employee"><h7><strong>Nama</strong></h7></label>
								<label><input type="text" class="form-control form-control" id="defaultInput" value="<?php echo $train->nama_peg;?>" name="nama_peg"></label>
							</div>
							<div class="form-group">
								<h6 class="control-label col-sm-2" for="form_employee" style="margin-bottom: -1%"><strong>Human Factor</strong></h6>
								<br>
								<label class="control-label col-sm-2" for="form_employee">Actual Date</label>
								<label><input type="date" class="form-control form-control" id="defaultInput" value="<?php echo $train->done_human;?>" name="done_human"></label>
							</div>
							<form class="form-group">
								<h6 class="control-label col-sm-2" for="form_employee" style="margin-bottom: -1%"><strong>CASR</strong></h6>
								<br>
								<label class="control-label col-sm-2" for="form_employee">Actual Date</label>
								<label><input type="date" class="form-control form-control" id="defaultInput" value="<?php echo $train->done_cas;?>" name="done_cas"></label>
							</form>
							<div class="form-group">
								<h6 class="control-label col-sm-2" for="form_employee" style="margin-bottom: -1%"><strong>FTS</strong></h6>
								<br>
								<label class="control-label col-sm-2" for="form_employee">Actual Date</label>
								<label><input type="date" class="form-control form-control" id="defaultInput" value="<?php echo $train->done_fts;?>" name="done_fts"></label>
							</div>
							<div class="form-group">
								<h6 class="control-label col-sm-2" for="form_employee" style="margin-bottom: -1%"><strong>SMS</strong></h6>
								<br>
								<label class="control-label col-sm-2" for="form_employee">Actual Date</label>
								<label><input type="date" class="form-control form-control" id="defaultInput" value="<?php echo $train->done_sms;?>" name="done_sms"></label>
							</div>
							<div class="form-group">
								<h6 class="control-label col-sm-2" for="form_employee" style="margin-bottom: -1%"><strong>EWIS</strong></h6>
								<br>
								<label class="control-label col-sm-2" for="form_employee">Actual Date</label>
								<label><input type="date" class="form-control form-control" id="defaultInput" value="<?php echo $train->done_ewis;?>" name="done_ewis"></label>
							</div>
							<div class="form-group">
								<h6 class="control-label col-sm-2" for="form_employee" style="margin-bottom: -1%"><strong>Module 10</strong></h6>
								<br>
								<label class="control-label col-sm-2" for="form_employee">Actual Date</label>
								<label><input type="date" class="form-control form-control" id="defaultInput" value="<?php echo $train->done_module;?>" name="done_module"></label>
							</div>
							<div class="form-group">
								<h6 class="control-label col-sm-2" for="form_employee" style="margin-bottom: -1%"><strong>GMF QS</strong></h6>
								<br>
								<label class="control-label col-sm-2" for="form_employee">Actual Date</label>
								<label><input type="date" class="form-control form-control" id="defaultInput" value="<?php echo $train->done_gqs;?>" name="done_gqs"></label>
							</div>
							<div class="form-group">
								<h6 class="control-label col-sm-2" for="form_employee" style="margin-bottom: -1%"><strong>BATK</strong></h6>
								<br>
								<label class="control-label col-sm-2" for="form_employee">Actual Date</label>
								<label><input type="date" class="form-control form-control" id="defaultInput" value="<?php echo $train->done_batk;?>" name="done_batk"></label>
							</div>
							<div class="form-group">
								<h6 class="control-label col-sm-2" for="form_employee" style="margin-bottom: -1%"><strong>Basic Eng.</strong></h6>
								<br>
								<label class="control-label col-sm-2" for="form_employee">Actual Date</label>
								<label><input type="date" class="form-control form-control" id="defaultInput" value="<?php echo $train->done_basic;?>" name="done_basic"></label>
							</div>
							<div class="form-group">
								<h6 class="control-label col-sm-2" for="form_employee" style="margin-bottom: -1%"><strong>Cont. Air</strong></h6>
								<br>
								<label class="control-label col-sm-2" for="form_employee">Actual Date</label>
								<label><input type="date" class="form-control form-control" id="defaultInput" value="<?php echo $train->done_cont;?>" name="done_cont"></label>
							</div>
							<div class="form-group">
								<h6 class="control-label col-sm-2" for="form_employee" style="margin-bottom: -1%"><strong>Type Rating</strong></h6>
								<br>
								<label class="control-label col-sm-2" for="form_employee">Tipe</label>
								<label><select class="form-control form-control" id="defaultSelect" name="stat_typer1" style="width: 208%">
									<option> <?php echo $train->stat_typer1;?></option>
									<option>TEA-1</option>
									<option>TEA-2</option>
									<option>TEA-3</option>
									<option>TEA-4</option>
									<option>TEC-1</option>
									<option>TED-1</option>
									<option>TED-2</option>
									<option>TED-3</option>
									<option>TED-4</option>
									<option>TED-5</option>
									<option>TEL-1</option>
									<option>TEL-2</option>
									<option>TER-1</option>
									<option>TER-2</option>
									<option>TER-3</option>
									<option>TER-4</option>
									<option>TER-5</option>
								</select></label>
							</div>
							<div class="card-action">
								<button class="btn btn-primary">Save</button>
								<a href="employees.html"><button class="btn btn-danger" style="margin-right:10px">Cancel</button></a>
							</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>