<!DOCTYPE html>
<html>
<head>
	<title>Manipulasi String</title>
</head>
<body>
	1. Menghitung jumlah karakter <br>
	2. Kapital semua <br>
	3. Huruf kecil semua <br>
	4. Membalikan string <br>

	<form method="post">
		<textarea name="string" rows="4" cols="40"></textarea><br>
		<select name="pilihan">
			<option value="pilih" selected="selected">-- Pilih --</option><br>
			<option value="1">1</option><br>
			<option value="2">2</option><br>
			<option value="3">3</option><br>
			<option value="4">4</option><br>
		</select>
		<input type="submit" name="submit" value="Submit">
	</form>

	<?php  
		if (isset($_POST['submit'])){
			$string = $_POST['string'];
			$pilihan = $_POST['pilihan'];

			switch ($pilihan) {
				case 1:
					echo "Hasil output: ".strlen($string);
					break;
				
				case 2:
					echo "Hasil output: ".strtoupper($string);
					break;
				
				case 3:
					echo "Hasil output: ".strtolower($string);
					break;
				
				case 4:
					echo "Hasil output: ".strrev($string);
					break;
				
				default:
					echo "Error";
					break;
			}

		}
	?>
</body>
</html>
