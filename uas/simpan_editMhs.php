<?php
include 'koneksi.php';
$nim = $_GET['nim'];
$nama_mhs = $_POST['nama_mhs'];
$tgl_lahir = $_POST['tgl_lahir'];
$alamat = $_POST['alamat'];
$jenis_kelamin = $_POST['jenis_kelamin'];

mysqli_query($connect,"UPDATE mahasiswa SET nim=$nim, nama_mhs='$nama', tgl_lahir='$tgl_lahir', alamat='$alamat', jenis_kelamin=$jenis_kelamin WHERE nim='$nim'");

header("location:index.php?pesan=edit");
?>