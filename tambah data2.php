<?php
include '../auth/koneksi2.php';

$query = mysqli_query($mysqli, "INSERT INTO `db_mitra`(`no`, `nik`, `nama`, `provinsi`, `kabupaten/kota`, `kec`, `desa/kel`, `jenis_kelamin`, `no_telp`) 
VALUES ('','','','','','','','','')");
header('location:DataMitra.php');
?>

