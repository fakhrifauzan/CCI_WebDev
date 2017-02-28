<?php

	require 'koneksi.php';
	$nim = $_GET['nim'];

	$sql = "SELECT *
	FROM mahasiswa
	WHERE nim ='$nim'";

	$mahasiswa = mysqli_query($connect, $sql);

	$mhs = mysqli_fetch_array($mahasiswa);
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Form Input Mahasiswa</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1>Form Pendaftaran Mahasiswa</h1>
        <div id="data">
            <table>
                <form action="" method="POST">
                    <tr>
                        <td>NIM</td>
                        <td>:</td>
                        <td><input type="number" maxlength="11" name="nim" value="<?php echo $mhs['nim']?>"></td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td><input type="text" maxlength="100" name="nama" value="<?php echo $mhs['nama']?>"></td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>:</td>
                        <td>
                            <input type="radio" name="jeniskelamin" value="Laki-laki" <?php if ($nim['jeniskelamin'] == 'Laki-laki') {
                            	echo selected;
                            }?>> Laki-Laki <br>
                            <input type="radio" name="jeniskelamin" value="Perempuan" <?php if ($nim['jeniskelamin'] == 'Perempuan') {
                            	echo selected;
                            }?>> Perempuan <br>
                        </td>
                    </tr>
                    <tr>
                        <td>Tanggal Lahir</td>
                        <td>:</td>
                        <td><input type="date" name="ttl" value="<?php echo $mhs['ttl']?>"></td>
                    </tr>
                    <tr>
                        <td>Fakultas</td>
                        <td>:</td>
                        <td>
                            <select name="fakultas">
                                <option value="Informatika" <?php if ($nim['fakultas'] == 'Informatika') echo selected;?>>Informatika</option>
                                <option value="Teknik Elektro" <?php if ($nim['fakultas'] == 'Informatika') echo selected;?>>Teknik Elektro</option>
                                <option value="Rekayasa Industri" <?php if ($nim['fakultas'] == 'Informatika') echo selected;?>>Rekayasa Industri</option>
                                <option value="Ekonomi & Bisnis" <?php if ($nim['fakultas'] == 'Informatika') echo selected;?>>Ekonomi & Bisnis</option>
                                <option value="Komunikasi & Bisnis" <?php if ($nim['fakultas'] == 'Informatika') echo selected;?>>Komunikasi & Bisnis</option>
                                <option value="Ilmu Terapan" <?php if ($nim['fakultas'] == 'Informatika') echo selected;?>>Ilmu Terapan</option>
                                <option value="Industri Kreatif" <?php if ($nim['fakultas'] == 'Informatika') echo selected;?>>Industri Kreatif</option>
                            </select>    
                        </td>
                    </tr>
                    <tr>
                        <td>Jurusan</td>
                        <td>:</td>
                        <td><input type="text" maxlength="25" name="jurusan" value="<?php echo $mhs['fakultas'] ?>"></td>
                    </tr>
                    <tr>
                        <td>Kelas</td>
                        <td>:</td>
                        <td><input type="text" maxlength="10" name="kelas" value="<?php echo $mhs['kelas'] ?>"></td>
                    </tr>
                    <tr>
                        <td colspan="3"><center><input type="submit" name="submit"><input type="reset" name="reset"></center></td>
                    </tr>
                </form>
            </table>
        </div>
    </body>
</html>
