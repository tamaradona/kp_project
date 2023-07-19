<?php
include '../auth/koneksi4.php';

$query = mysqli_query($mysqli, "INSERT INTO `penilaian`(`no`, `namakegiatan`, `unitkerja`, `tanggalmulai`, `tanggalselesai`, `target`, `satuan`) 
VALUES ('','','','','','','')");
header('location:penilaian.php');
?>

