<?php 
  $page_now="training_admin";
  include 'navbar.php';
?>

<div class="main-panel">
	<div class="content">
		<div class="container-fluid">
			<h4 class="page-title">Training Compliance</h4>
			<div class="row">
				<div class="col-md-12">
					<div class="card">
						<div class="card-header" style="padding: 30px 15px">
							<div class="card-title">List of Employees Training</div>
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
	
	<script>
		$('#displayNotif').on('click', function(){
			var placementFrom = $('#notify_placement_from option:selected').val();
			var placementAlign = $('#notify_placement_align option:selected').val();
			var state = $('#notify_state option:selected').val();
			var style = $('#notify_style option:selected').val();
			var content = {};

			content.message = 'Turning standard Bootstrap alerts into "notify" like notifications';
			content.title = 'Bootstrap notify';
			if (style == "withicon") {
				content.icon = 'la la-bell';
			} else {
				content.icon = 'none';
			}
			content.url = 'index.html';
			content.target = '_blank';

			$.notify(content,{
				type: state,
				placement: {
					from: placementFrom,
					align: placementAlign
				},
				time: 1000,
			});
		});
	</script>
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