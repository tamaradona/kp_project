<?php
include '../auth/koneksi3.php';

$query = mysqli_query($mysqli, "INSERT INTO `db_kegiatan`(`no`, `namakegiatan`, `jeniskegiatan`, `admin`) 
VALUES ('','','','')");
header('location:DataKegiatan.php');
?>

