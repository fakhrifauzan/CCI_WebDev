<?php

	require 'koneksi.php';

	$nim = $_GET['nim'];
	$sql = "DELETE
	FROM mahasiswa
	WHERE nim='$nim'";
	$query = mysqli_query($connect, $sql);

	if ($query) {
		echo "Mahasiswa dengan NIM $nim berhasil diapus!";
	} else {
		echo "Gagal diapus!";
	}

?>