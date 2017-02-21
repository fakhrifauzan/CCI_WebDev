<!DOCTYPE html>
<html>
<head>
	<title>Aplikasi Crud sederhana</title>
	<style type="text/css">
		li{
			list-style: none;
		}
	</style>
</head>
<body>
	<div id="header">
		<h1>Aplikasi CRUD Sederhana</h1>
	</div>
	<div id="menu">
		<ul>
			<li><a href="formPendaftaran.html">Input Data</a></li>
		</ul>
	</div>
	<div id="data">
		<table border="3">
			<thead>
				<tr>
					<td>NIM</td>
					<td>NAMA</td>
					<td>JENIS KELAMIN</td>
					<td>TTL</td>
					<td>FAKULTAS</td>
					<td>JURUSAN</td>
					<td>KELAS</td>
					<td>AKSI</td>
				</tr>
			</thead>
			<tbody>
				<?php
					require 'koneksi.php';
					$mahasiswa = mysqli_query($connect, "SELECT * FROM mahasiswa");
					if (mysqli_num_rows($mahasiswa) == 0) {
						echo '<tr><td colspan="8"><center>Data Tidak Tersedia</center></td></tr>';
					} else {
						foreach ($mahasiswa as $mhs) {
							echo "
								<tr>
									<td>".$mhs['nim']."</td>
									<td>".$mhs['nama']."</td>
									<td>".$mhs['jeniskelamin']."</td>
									<td>".$mhs['ttl']."</td>
									<td>".$mhs['fakultas']."</td>
									<td>".$mhs['jurusan']."</td>
									<td>".$mhs['kelas']."</td>
									<td><a href='edit.php?nim=$mhs[nim]'>Edit</a> | <a href='delete.php?nim=$mhs[nim]'>Delete</a> </td>
								</tr>
							";
						}
					}
					
				?>
			</tbody>
		</table>
	</div>
</body>
</html>