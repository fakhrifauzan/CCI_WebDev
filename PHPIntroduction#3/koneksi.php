<?php
	$host = "localhost";
	$user = "root";
	$password = "";
	$database = "mahasiswa";

	$connect = mysqli_connect($host, $user, $password, $database);

	if (mysqli_connect_errno()) {
		echo "Gagal Terhubung!";
	} else {
		//echo "Sudah terkoneksi!";
	}	
?>