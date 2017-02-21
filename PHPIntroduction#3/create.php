<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include 'koneksi.php';

if (!isset($_POST['submit'])) {
    echo 'Data Tidak Valid!';
} else {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $jeniskelamin = $_POST['jeniskelamin'];
    $fakultas = $_POST['fakultas'];
    $ttl = $_POST['ttl'];
    $kelas = $_POST['kelas'];
    $jurusan = $_POST['jurusan'];
    
    //print_r($_POST);
    $query = mysqli_query($connect, "INSERT INTO mahasiswa SET nim='$nim', nama='$nama', jeniskelamin='$jeniskelamin', ttl='$ttl', fakultas='$fakultas', jurusan='$jurusan', kelas='$kelas'");
    
    if ($query) {
        echo 'Data Berhasil disimpan :)';
        header("refresh: 2; url=index.php");
    } else {
        echo 'Tidak Valid!';
    }
}

