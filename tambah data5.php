<?php
include '../auth/koneksi5.php';

$query = mysqli_query($mysqli, "INSERT INTO `penilaian2`(`no`, `namakegiatan`, `unitkerja`, `tanggalmulai`, `tanggalselesai`, `target`, `satuan`) 
VALUES ('','','','','','','')");
header('location:penilaian2.php');
?>

