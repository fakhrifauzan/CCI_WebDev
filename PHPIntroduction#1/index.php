<!DOCTYPE html>
<html>
<head>
	<title>WebDev CCI</title>
</head>
<body>
	<h1>Hello World</h1>
	<?php

	echo "<h2>Selamat Datang di WebDev CCI</h2>";
	$x = 5;
	//echo $x;
	$nama = "Fakhri Fauzan";
	echo "Variabel x adalah ".$x."<br>";
	echo "Selamat Datang $nama";
	//echo '$x';

	$y = 10;
	$z = $x - $y; 
	$z2 = $x/$y;
	$z3 = $x%$y;
	$z4 = $x*$y;
	$t = 2;
	$tpangkat = pow($t, 2);

	echo "<h1>".$tpangkat."</h1>";

	$kondisi = FALSE;

	echo "$z<br>$z2<br>$z3<br>$z4<br>";

	for ($i=0; $i < 10 ; $i++) { 
		echo "$i Selamat Datang<br>";
	}

	if ($y%2 == 0) {
		echo "Genap<br>";
	} else {
		echo "Ganjil<br>";
	}

	if ($kondisi) {
		echo "Benar<br>";
	} else {
		echo "Salah<br>";
	}

	if ($x > $y) {
		echo "X Lebih Besar dari Y";
	} else if ($x < $y) {
		echo "X Lebih Kecil dari Y";
	} else {
		echo "X sama dengan Y";
	}

	echo "<br>";
	
	$bintang = 0;
	switch ($bintang) {
		case '5':
			echo "Memuaskan";
			break;
		
		case '4':
			echo "Cukup Memuaskan";
			break;

		case '3':
			echo "B Ajah";
			break;

		default:
			echo "Belom ngasih bintang cuy";
			break;
	}

	?>

	<form method="POST">
		<label>Nama : </label>
		<input type="text" name="nama">
		<input type="submit" name="submit">
	</form>

	<?php

		if (isset($_POST['submit'])) {
			echo $_POST['nama'];
		} else {
			echo "Belom Input Nama";
		}
		
	?>
	
</body>
</html>