<?php 
  $page_now="pegawai_admin";
  include 'navbar.php';
?>

<div class="main-panel">
	<div class="content">
		<div class="container-fluid">
			<h4 class="page-title">Employees Training</h4>
			<div class="row">
				<div class="col-md-12">
					<div class="card">
						<div class="card-header">
							<div class="card-title">List of Employees</div>
							<a href="add_employee.html">
								<button class="btn btn-info">Add Employee</button></a>
							</div>
							<div class="card-body">
								<table class="table table-striped mt-3">
									<thead>
										<tr>
											<th scope="col">#</th>
											<th scope="col">First</th>
											<th scope="col">Last</th>
											<th scope="col">Handle</th>
											<th scope="col">Job</th>
											<th scope="col">Salary</th>
											<th scope="col">Age</th>
											<th scope="col">Email</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>1</td>
											<td>Mark</td>
											<td>Otto</td>
											<td>@mdo</td>
											<td>Business</td>
											<td>$500</td>
											<td>25</td>
											<td>bhxshgvh@mail.com</td>
											<td><a href="edit_employee.html"><button class="btn btn-primary">Edit</button></a></td>
											<td><a id="hasil"><button onclick="konfirmasiDulu()" class="btn btn-danger">Delete</button></a></td>
											<td><a href="index.html"><button class="btn btn-default">Profile</button></a></td>

										</tr>
										<tr>
											<td>2</td>
											<td>Jacob</td>
											<td>Thornton</td>
											<td>@fat</td>
											<td>Development</td>
											<td>$100</td>
											<td>30</td>
											<td>uuajanam@mail.com</td>
											<td><a href="edit_employee.html"><button class="btn btn-primary">Edit</button></a></td>
											<td><a id="hasil"><button onclick="konfirmasiDulu()" class="btn btn-danger">Delete</button></a></td>
											<td><a href="index.html"><button class="btn btn-default">Profile</button></a></td>
										</tr>
										<tr>
											<td>3</td>
											<td colspan="2">Larry the Bird</td>
											<td>@twitter</td>
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
</div>