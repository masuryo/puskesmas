<?php
session_start();
include '../../config/koneksi.php';

$nama			= $_POST['nama'];

$sql = "INSERT INTO jabatan (nama) VALUES ('$nama')";
mysqli_query($konek,$sql);
header('location:index.php');

?>