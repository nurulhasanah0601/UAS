<?php 
include 'koneksi.php';
$kode_matakuliah = $_GET['kode_matakuliah'];
mysqli_query($connect,"DELETE FROM matakuliah WHERE kode_matakuliah='$kode_matakuliah'")or
die(mysqli_error());

header("location:index.php?pesan=hapus");
?>
