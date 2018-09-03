<div class="main-panel">
	<div class="content">
		<div class="container-fluid">
			<h4 class="page-title">Employees Training</h4>
			<div class="row">
				<div class="col-md-12">
					<div class="card">
						<div class="card-header">
							<div class="card-title">List of Employees</div>
							</div>
							<?php
						$con=mysqli_connect("localhost","root","","db_gmf");
						// Check connection
						if (mysqli_connect_errno())
						{
							echo "Failed to connect to MySQL: " . mysqli_connect_error();
						}

						$result = mysqli_query($con,"SELECT * FROM pegawai");

						echo "<table border='1'>
						<tr>
						<th>Nomor Pegawai</th>
						<th>Nama Pegawai</th>
						<th>Dinas</th>
						<th>Bidang</th>
						<th>Unit</th>
						<th>Jabatan</th>
						<th>Tanggal Masuk</th>
						</tr>";

						while($row = mysqli_fetch_array($result))
						{
							echo "<tr>";
							echo "<td>" . $row['no_peg'] . "</td>";
							echo "<td>" . $row['nama_peg'] . "</td>";
							echo "<td>" . $row['dinas'] . "</td>";
							echo "<td>" . $row['bidang'] . "</td>";
							echo "<td>" . $row['unit'] . "</td>";
							echo "<td>" . $row['jabatan'] . "</td>";
							echo "<td>" . $row['tgl_masuk'] . "</td>";
							echo "</tr>";
						}
						echo "</table>";

						mysqli_close($con);
						?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>