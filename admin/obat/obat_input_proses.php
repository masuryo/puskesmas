<?php
session_start();
include '../../config/koneksi.php';

$nama			= $_POST['nama'];
$expired		= $_POST['expired'];
$jumlah			= $_POST['jumlah'];
$satuan			= $_POST['satuan'];

if (empty($jumlah)) {
	$jumlah = 0;
}

if ($jumlah == 0) {
	$status = 1;
} else {
	$status = 0;
}


$sql = "INSERT INTO obat (nama, expired, status, jumlah, satuan)
		VALUES ('$nama', '$expired', '$status', '$jumlah', '$satuan')";
mysqli_query($konek,$sql);
header('location:index.php');

?>