<?php 
  $page_now="pegawai";
  include 'navbar.php';
?>
<div class="main-panel">
	<div class="content">
		<div class="container-fluid">
			<h4 class="page-title">List of Employees</h4>
			<div class="row">
				<div class="col-md-12">
					<div class="card">
						<div class="col-xs-12 table-responsive">
							<table id="table_employee" class="table table-bordered table-hover dataTable" 
							style="background-color: rgb(210, 221, 232); overflow-x:auto;">
							<thead>
								<tr>
									<th style="text-align: center">No. Pegawai</th>
									<th style="text-align: center">Name</th>
									<th style="text-align: center">Bidang</th>
									<th style="text-align: center">Unit</th>
									<th style="text-align: center">Date of Joining</th>
									<th style="text-align: center">Function</th>
									<th style="text-align: center">Education</th>
									<!--               <th style="text-align: center">Edit</th> -->
									<th style="text-align: center">Delete</th>
								</tr>
							</thead>
							<tbody>

								<?php
								foreach ($pegawai as $row) 
								{
									$no_peg = $row->no_peg;
									?>
									<tr>

										<td><?php echo $row->no_peg;?></td>
										<td><?php echo $row->nama_peg;?></td>
										<td><?php echo $row->bidang;?></td>
										<td><?php echo $row->unit;?></td>

										<td><?php
										$tgl_bener = strtotime($row->tgl_masuk); 
										echo date("d M Y",$tgl_bener);

										?></td>


										<td><?php echo $row->jabatan;?></td>
										<td><?php echo $row->pendidikan;?></td>

										<td><p data-placement="top" align="center" data-toggle="tooltip" title="Delete" ><center><button style="width:23px;height:23px" class="btn btn-danger btn-xs" data-title="Delete"  data-toggle="modal"  data-target="#delete"  ><span class="fa fa-times"></span></button></center></p></td>
									</tr>
									<?php
								}
								?>



							</tbody>
						</table>

						<!-- PAGINATION-->

						<!-- /.box-body -->
					</div>
					<!-- /.box -->
				</div>




				<div class="modal modal-danger fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">


							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="close">
									<span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
									<h4 class="modal-title" >Delete Employee</h4>
								</div>
								<div class="modal-body">
									<p>Are you sure you want to delete this Record?</p>
								</div>
								<!-- <?php $unames //= $this->uri->segment(3)?> -->
								<div class="modal-footer">
									<button type="button" class="btn btn-outline pull-right" data-dismiss="modal"><span class="fa fa-close"></span> No</button>
									<a class ="button" href="<?php echo base_url('user/deletepegawai/'.$uname.'/'.$no_peg); ?>"> <button type="button" class="btn btn-outline" style="margin-right: 1%;"><span class="fa fa-check"></span> Yes</button></a>

								</div>
							</div>




						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>