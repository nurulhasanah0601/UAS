<?php
include 'koneksi.php';
$nim =$_POST['nim'];
$nama_mhs = $_POST['nama_mhs'];
$tgl_lahir = $_POST['tgl_lahir'];
$alamat = $_POST['alamat'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$ins = mysqli_query($connect,"INSERT INTO mahasiswa (nim,nama_mhs,tgl_lahir,alamat,jenis_kelamin) values('$nama','$deskripsi','$harga','$jumlah')");

header("location:index.php?pesan=input");

?>