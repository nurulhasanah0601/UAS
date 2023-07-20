<?php 
include 'koneksi.php';
$nidn = $_GET['nidn'];
mysqli_query($connect,"DELETE FROM dosen WHERE nidn='$nidn'")or
die(mysqli_error());

header("location:index.php?pesan=hapus");
?>
