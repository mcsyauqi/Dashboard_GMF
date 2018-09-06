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
						<div class="card-header">
									</div>
						<div class="container" style="overflow-x: scroll;">
		<table class="table table-striped table-bordered data" >
			<thead>
				<tr>			
					<th>No. Peg</th>
					<th>Nama</th>
					<th>Bidang</th>
					<th>Unit</th>
					<th>Date of Joining</th>
					<th>Function</th>
					<th>Education</th>
				</tr>
			</thead>
			<tbody>
				<tr>				
					<td>00000</td>
					<td>Andi</td>
					<td>Jakarta</td>
					<td>Web Designer</td>
					<td>21</td>
					<td>Aktif</td>
					<td>S1</td>
				<tr>				
					<td>111111</td>
					<td>Malas Ngoding</td>
					<td>Bandung</td>
					<td>Web Developer</td>
					<td>26</td>
					<td>Aktif</td>
					<td>D3</td>
				</tr>
			</tbody>
		</table>
	</div>
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