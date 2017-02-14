<!DOCTYPE html>
<html>
<head>
	<title>Explode</title>
</head>
<body>
	<form method="post">
		<textarea name="text" rows="4" cols="40"></textarea>
		<input type="submit" name="submit" value="kirim">
	</form>

	<?php
		if(isset($_POST['submit'])){
			$text = $_POST['text'];

			$hasil = explode(" ", $text);

			foreach ($hasil as $hasil) {
				echo $hasil."<br/>";
			}
		}
	?>
</body>
</html>