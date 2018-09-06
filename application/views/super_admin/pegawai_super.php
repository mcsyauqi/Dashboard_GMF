<div class="main-panel">
	<div class="content">
		<div class="container-fluid">
			<h4 class="page-title">List of Employees</h4>
			<div class="row">
				<div class="col-md-12">
					<div class="card">
						<div class="card-header">
							<a href="<?php echo site_url('Pegawai/add_pegawai');?>">
								<button class="btn btn-info">Add Employee</button></a>
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
					<th></th>
					<th></th>
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
					<td><a href="edit_employee.html"><i class="la la-edit" style="font-size:20px"></i></a></td>
					<td><a id="hasil"><i onclick="konfirmasiDulu()" class="la la-remove" style="font-size: 20px"></i></a></td>
				<tr>				
					<td>111111</td>
					<td>Malas Ngoding</td>
					<td>Bandung</td>
					<td>Web Developer</td>
					<td>26</td>
					<td>Aktif</td>
					<td>D3</td>
					<td><a href="edit_employee.html"><i class="la la-edit" style="font-size:20px"></i></a></td>
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