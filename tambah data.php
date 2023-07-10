<?php
include '../auth/koneksi.php';

$query= mysqli_query($mysqli, "INSERT INTO `db_karyawan1`(`no`, `nip`, `nama`, `golongan`, `seksi`, `jenis kelamin`, `jabatan statistik`, `username`) 
VALUES ('','','','','','','','')");
header('location:home.php');
?>
